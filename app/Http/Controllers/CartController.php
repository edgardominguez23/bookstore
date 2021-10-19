<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

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
        
        foreach($request->booksId as $key => $id){
            
            $book = Book::where('id', $id)->get();
            
            $book_sold = Book::where('id', $id)->first();

            $book->toQuery()->update([
                'sold' => $request->booksQ[$key] + $book_sold->sold,
            ]);
        }

        \Cart::clear();

        return back()->with('status','Pago realizado correctamente');
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
