@extends('layouts.masterpage')
@section('title', 'LibraryApp | Books')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Books.update",$book->book_id)}}' method="POST">
                @method('PUT')
                @csrf
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="input-field col s6">
                    <input name='name' id="name" type="text" required value='{{ $book->name }}'>
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input name='author' id="author" type="text" required value='{{ $book->author }}'>
                    <label for="author">Author</label>
                </div>
                <div class="input-field col s6">
                    <select name='category' required>
                      <option value="" disabled selected>Choose your option</option>
                      @foreach ($categories as $category)
                      <option {{ ( $category->category_id == $book->category ) ? 'selected' : '' }} value="{{ $category->category_id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                    <label>Category</label>
                </div>
                <div class="input-field col s6">
                    <input name='published_date' id="published_date" type="date" required value='{{ $book->published_date }}'>
                    <label for="published_date">Published at</label>
                </div>
                <div class='col s12'>
                    <button type='submit' class='waves-effect waves-light btn'>Update</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
