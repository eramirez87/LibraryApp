@extends('layouts.masterpage')
@section('title', 'LibraryApp | Books')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Books.store")}}' method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="input-field col s6">
                    <input name='name' id="name" type="text" required pattern="[a-zA-Z'-'\s]*">
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input name='author' id="author" type="text" required pattern="[a-zA-Z'-'\s]*">
                    <label for="author">Author</label>
                </div>
                <div class="input-field col s6">
                    <select name='category' required>
                      <option value="" disabled selected>Choose your option</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                    <label>Category</label>
                </div>
                <div class="input-field col s6">
                    <input name='published_date' id="published_date" type="date" required>
                    <label for="published_date">Published at</label>
                </div>
                <div class='col s12'>
                    <button type='submit' class='waves-effect waves-light btn'>Add</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
