@extends('layouts.masterpage')
@section('title', 'LibraryApp | Categories')
@section('content')
<div class="row">
    <div class='col s12'>
        <div class='card'>
            <form action='{{route("Categories.store")}}' method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="input-field col s12">
                    <input name='name' id="name" type="text" required pattern="[a-zA-Z'-'\s]*">
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s12">
                    <textarea name='description' id="description" class='materialize-textarea' required></textarea>
                    <label for="description">Description</label>
                </div>
                <div class='col s12'>
                    <button type='submit' class='waves-effect waves-light btn'>Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
