<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();

        $categA = DB::select('select * from books where category_id = :id', ['id' => 1]);
        $categB = DB::select('select * from books where category_id = :id', ['id' => 2]);
        $categC = DB::select('select * from books where category_id = :id', ['id' => 3]);
        $categD = DB::select('select * from books where category_id = :id', ['id' => 4]);
        $categE = DB::select('select * from books where category_id = :id', ['id' => 5]);
        
        return view('welcome')->with('books', $books)->with('categA', $categA)->with('categE', $categE)->with('categB', $categB)->with('categC', $categC)->with('categD', $categD);
    }
}
