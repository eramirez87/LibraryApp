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
                        <th>Description</th>
                        <th>Books</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->category_id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{count( $category->books->toArray() )}}</td>
                        <td>
                            <form action="{{route('Categories.destroy',$category->category_id)}}" method="POST">
                                <a href="{{route('Categories.edit',$category->category_id)}}" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    <div class="fixed-action-btn">
        <a href='{{route("Categories.create")}}' class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</div>
@endsection
