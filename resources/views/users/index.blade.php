@extends('layouts.masterpage')
@section('title', 'LibraryApp | Category')
@section('content')
<div class="row">
    <div class="col s12">&nbsp;</div>
    <div class='col s12'>
        <table>
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Books</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{count( $user->books->toArray() )}}</td>
                        <td>
                            <form action="{{route('Users.destroy',$user->user_id)}}" method="POST">
                                <a href="{{route('Users.edit',$user->user_id)}}" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>
                                @method('DELETE')
                                @csrf
                                <button type='submit' class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    <div class="fixed-action-btn">
        <a href='{{route("Users.create")}}' class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</div>
@endsection
