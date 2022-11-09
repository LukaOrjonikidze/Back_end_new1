@extends('layout')

@section('title', 'Admin')

@section('body')
    @foreach ($results as $rows)
        <h1>{{$rows[0]->group}}</h1>
        <ul>
        @foreach ($rows as $row)
            <h4>{{$row->position}}) {{$row->name}} - {{$row->price}}$</h4>
            <a href="{{route('delete', ['menu' => $row])}}"> <button class="btn btn-danger">Delete</button></a>
            <a href="{{route('edit', ['menu' => $row])}}"> <button class="btn btn-primary">Change</button></a>
        @endforeach
        </ul>

    @endforeach
        <hr>
        <a href="{{route('edit')}}"><button class="btn btn-success">Add</button></a>



@endsection