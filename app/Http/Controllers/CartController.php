<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->title,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->picture,
            )
        ]);
        session()->flash('success', 'El libro fue agregado exitosamente!!');

        //return redirect()->route('cart.list');
        return back()->with('status','Libro agregado al carrito de compras');
    }

    public function payBooks(Request $request){
        //dd($request);
        $request->validate([
            'cardnumber' => 'required|numeric|min:12',
            'cardholder' => 'required|min:3',
            'expires' => 'required|date_format:m/y',
            'cvc'     => 'required|numeric|min:3',
        ]);

        if($request->booksId){
            foreach($request->booksId as $key => $id){
            
                $book = Book::where('id', $id)->get();
                
                $book_sold = Book::where('id', $id)->first();
    
                $book->toQuery()->update([
                    'sold' => $request->booksQ[$key] + $book_sold->sold,
                ]);

                Shopping::create(
                    [
                        'username' => Auth::user()->name,
                        'book' => $book_sold->title, //Usuario administrador
                        'quantity' => $request->booksQ[$key],
                        'status' => 0,
                        'id_mensajeria' => rand(1,3)
                    ]
                );
            }
    
            \Cart::clear();
            session()->flash('success', 'Pago realizado correctamente!!');
            return back()->with('status','Pago realizado correctamente');
        }else{
            session()->flash('success', 'No se encuentran productos por comprar!!');
            return back()->with('status','No se encuentran productos por comprar!!');
        }
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'El libro del carrito fue actualizado exitosamente!!');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'El libro del carrito fue removido exitosamente!!');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todos los libros del carrito fueron eliminados exitosamente!!');

        return redirect()->route('cart.list');
    }
}
