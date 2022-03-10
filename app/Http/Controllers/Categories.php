<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class Categories extends Controller
{
    private $folder = 'categories.';

    public function index(){
        $data = [
            'categories' => Category::with('books')->get()
        ];
        return view( $this->folder . "index",$data);
    }
    public function create(){
        return view( $this->folder . "create");
    }
    public function store(Request $request){
        Category::create( $request->all() );
        return redirect()->intended('/Categories');
    }
    public function edit($category_id){
        return view($this->folder . 'edit',[
            'categories' => Category::with('books')->find($category_id)
        ]);
    }
    public function update($category_id, Request $request){
        $post = $request->except(['_token','_method']);
        Category::where('category_id',$category_id)->update($post);
        return redirect()->intended('/Categories');
    }
    public function destroy($category_id){
        Category::where('book_id',$category_id)->delete();
        return redirect()->intended('/Books');
    }
}
