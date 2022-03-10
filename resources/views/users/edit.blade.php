@extends('layouts.masterpage')
@section('title', 'LibraryApp | Categories')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Users.update",$user->user_id)}}' method="POST">
                @method('PUT')
                @csrf
                <div class="input-field col s12">
                    <input name='name' id="name" type="text" readonly value='{{ $user->name }}'>
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s12">
                    <input name='email' id="email" type="text" required value='{{ $user->email }}'>
                    <label for="email">Email</label>
                </div>
                <div class='col s12'>
                    <ul class='collection'>
                        @foreach ($user->books as $book)
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
