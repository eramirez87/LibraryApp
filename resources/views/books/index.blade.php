@extends('layouts.masterpage')
@section('title', 'LibraryApp | Books')
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
                        <th>Author</th>
                        <th>Category</th>
                        <th>Published at</th>
                        <th>User</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{$book->book_id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->_category->name}}</td>
                        <td>{{$book->published_date}}</td>
                        <td>{{isset($book->_user->name) ? $book->_user->name : '---' }}</td>
                        <td>
                            <a href="{{route('Books.edit',$book->book_id)}}" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>
                            <a class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    <div class="fixed-action-btn">
        <a href='{{route("Books.create")}}' class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</div>
@endsection
