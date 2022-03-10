<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class Books extends Controller
{
    private $folder = 'users.';

    public function index(){
        $data = [
            'users' => User::with('books')->get()
        ];
        return view( $this->folder . "index",$data);
    }
    public function create(){
        return view( $this->folder . "create");
    }
    public function store(Request $request){
        User::create( $request->all() );
        return redirect()->intended('/Users');
    }
    public function edit($user_id){
        return view($this->folder . 'edit',[
            'user' => User::find($user_id),
        ]);
    }
    public function update($user_id, Request $request){
        $post = $request->except(['_token','_method']);
        User::where('user_id',$user_id)->update($post);
        return redirect()->intended('/Users');
    }
    public function destroy($book_id){
        User::where('book_id',$book_id)->delete();
        return redirect()->intended('/Users');
    }
}
