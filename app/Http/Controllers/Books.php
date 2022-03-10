<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class Books extends Controller
{
    private $folder = 'books.';

    public function index(){
        $data = [
            'books' => Book::with('_user','_category')->get()
        ];
        return view( $this->folder . "index",$data);
    }
    public function create(){
        $data = [
            'categories' => Category::get()
        ];
        return view( $this->folder . "create",$data);
    }
    public function store(Request $request){
        Book::create( $request->all() );
        return redirect()->intended('/Books');
    }
    public function edit($book_id){
        return view($this->folder . 'edit',[
            'categories' => Category::get(),
            'users' => User::get(),
            'book' => Book::find($book_id),
        ]);
    }
    public function update($book_id, Request $request){
        $post = $request->except(['_token','_method']);
        Book::where('book_id',$book_id)->update($post);
        return redirect()->intended('/Books');
    }
    public function destroy($book_id){
        Book::where('book_id',$book_id)->delete();
        return redirect()->intended('/Books');
    }
}
