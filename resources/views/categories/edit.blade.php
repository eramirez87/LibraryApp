@extends('layouts.masterpage')
@section('title', 'LibraryApp | Categories')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Categories.update",$categories->category_id)}}' method="POST">
                @method('PUT')
                @csrf
                <div class="input-field col s12">
                    <input name='name' id="name" type="text" required value='{{ $categories->name }}'>
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s12">
                    <textarea name='description' id="description" class='materialize-textarea' required>{{ $categories->description }}</textarea>
                    <label for="description">Description</label>
                </div>
                <div class='col s12'>
                    <ul class='collection'>
                        @foreach ($categories->books as $book)
                        <li class="collection-item">{{$book->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class='col s12'>
                    <button type='submit' class='waves-effect waves-light btn'>update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
