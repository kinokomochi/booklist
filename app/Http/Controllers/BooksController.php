<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    //
    public function index()
    {
        return view('list.index');
    }
    
    public function postBook(Request $request)
    {
        //バリデーション
        $validateBook = $request->validate([
            'title' => 'required',
            'autor' => 'required',
            'price' => 'required',
        ]);
        //入力データ登録
        $book = new Book();
        $book->status = $request->status;
        $book->title = $request->title;
        $book->autor = $request->autor;
        $book->price = $request->price;
        $book->summary = $request->summary;
        $book->impression = $request->impression;
        $book->remark = $request->remark;
        $book->save();
        //データ取得
        $list = Book::all();
        return view('list.post', ['book' => $book, 'list' => $list]);
    }

    public function getBook(Request $request)
    {
        $book = new Book();
        $book = Book::first();
        return view('list.post', ['book' => $book]);
    }
}
