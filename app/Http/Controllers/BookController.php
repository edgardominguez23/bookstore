<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBookPost;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol.admin');
    }

    public function index()
    {
        $user = Auth::user()->name;
        $books = DB::table('books')
                    ->select('id','title','author','category_id','editorial','price','lenguage','description','picture','created_at')
                    ->where('editorial','LIKE','%'.$user.'%')
                    ->orderBy('created_at','desc')
                    ->paginate(3,['*'],'paga');
        $shoppings = DB::table('shoppings')
                    ->select('id','book','quantity','status','created_at')
                    ->where('editorial','LIKE','%'.$user.'%')
                    ->orderBy('created_at','desc')
                    ->paginate(3,['*'],'pagb');

        return view("dashboard.index",['books'=> $books,'editorial'=>$user,'shoppings'=>$shoppings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        $categories = Category::pluck('id', 'name');
        return view("dashboard.create",['book' => new Book(), "categories"=>$categories, 'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookPost $request)
    {
        $IDbook = Book::create($request->validated());
        
        $book = Book::where('title', $IDbook->title)->get();

        $book->toQuery()->update([
            'picture' => 'picture-books/book.jpg',
        ]);

        return back()->with('status','Libro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $user = Auth::user()->name;
        $categories = Category::pluck('id', 'name');
        return view("dashboard.edit",['book' => $book, "categories"=>$categories, 'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookPost $request, Book $book)
    {
        $book->update($request->validated());

        return back()->with('status','Libro actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('status','Libro eliminado con exito');
    }

    public function picture(Request $request, Book $book)
    {
        $request->validate([
            'picture' => 'required|mimes:jpeg,jpg,bmp,png|max:10240',
        ]);

        $filename = time().".".$request->picture->extension();
        
        $request->picture->move(public_path('images'), $filename);

        $bookUpd = Book::where('id', $book->id)->get();

        $bookUpd->toQuery()->update([
            'picture' => 'images/'.$filename,
        ]);
        return back()->with('status','Imagen actualizada');
    }

    public function process(Request $request, Shopping $book){
        if($request->status == 0){
            DB::table('shoppings')
                ->where('id',$request->id)
                ->update(['status' => 1]);
        }else{
            DB::table('shoppings')
                ->where('id',$request->id)
                ->update(['status' => 2]);
        }
        return back();
    }
}
