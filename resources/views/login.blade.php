@extends('layouts.masterpage')
@section('title', 'LibraryApp | Registro')
@section('content')
<div class="row">
    <div class='s12 m4 l2'>&nbsp;</div>
    <form method="POST" action="{{ route("autenticate") }}" class="s12 m4 l8">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="card">
            <span class='card-title'>Login form</span>
            <div class='card-content'>
                <div class='row'>
                    <div class="input-field col s12 m6">
                        <input id="email" name='email' type="email" class="validate">
                        <label for="email">Mail</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="password" name='password' type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class='row'>
                    <button type="submit" class="blue-text text-darken-2 waves-effect waves-teal btn-flat">LogIn</button>
                </div>
            </div>
        </div>
    </form>
    <div class='s12 m4 l2'>&nbsp;</div>
</div>
@endsection

