@extends('layout')

@section('title', $menu->name ?? "Create")


@section('body')

    <form  method="post">
        @csrf
        <label for="position">Position</label>
        <input type="number" name="position" value="{{$menu->position ?? ""}}"> <br>
        <label for="group">Group</label>
        <input type="text" name="group" value="{{$menu->group ?? ""}}"> <br>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$menu->name ?? ""}}"> <br>
        <label for="price">Price</label>
        <input type="number" name="price" value="{{$menu->price ?? ""}}"> <br>
        <button class="btn btn-success">Save</button>

    </form>


@endsection