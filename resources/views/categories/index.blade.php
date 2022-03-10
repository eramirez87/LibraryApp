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
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->category_id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{route('Categories.edit',$category->category_id)}}" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>
                            <a class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></a>
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
