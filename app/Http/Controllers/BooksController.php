<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    //
    public function index()
    {
            $book = new Book();
            $book = Book::all();
            return view('list.index', ['book' => $book]);
    }

    public function inputImage(Request $request)
    {
        $validateImage = $request->validate([
            'image' => 'required|image|mimes:JPEG,jpeg,PNG,png,JPG,jpg'
        ]);
        $image = date('YmdHis') . $request->image;
        if($image->isValid()){
            $filepath = $image->store('public');
        }
        return view('list.post', ['filepath'=>$filepath]);
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
        $book->image = $request->image;
        $book->autor = $request->autor;
        $book->price = $request->price;
        $book->summary = $request->summary;
        $book->impression = $request->impression;
        $book->remark = $request->remark;
        $book->save();
       
        return view('/');
    }

    public function getBook(Request $request)
    {
        $book = new Book();
        $book = Book::all();
        return view('list.post', ['book' => $book]);
    }
}
