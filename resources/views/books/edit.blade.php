@extends('layouts.masterpage')
@section('title', 'LibraryApp | Books')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Books.update",$book->book_id)}}' method="POST">
                @method('PUT')
                @csrf
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
                    <select name='user' required>
                      <option value='0'>Unasigned</option>
                      @foreach ($users as $user)
                      <option {{ ( $user->user_id == $book->user ) ? 'selected' : '' }} value="{{ $user->user_id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                    <label>User</label>
                </div>
                <div class="input-field col s6">
                    <input name='published_date' id="published_date" type="date" required value='{{ $book->published_date }}'>
                    <label for="published_date">Published at</label>
                </div>
                <div class="col s6">
                    <p>
                        <label>
                          <input name='status' type="checkbox" {{($book->status) ? 'checked' : '' }} value='1'/>
                          <span>Avaliable</span>
                        </label>
                      </p>
                </div>
                <div class='col s12'>
                    <button type='submit' class='waves-effect waves-light btn'>Update</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
