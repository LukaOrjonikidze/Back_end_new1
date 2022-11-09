@extends('layout')
@section('title', $rows[0]->group)


@section('body')

    <h1>{{$rows[0]->group}}</h1>
    <ul>
    @foreach ($rows as $row)
        <h4>{{$row->position}}) {{$row->name}} - {{$row->price}}$</h4>
    @endforeach
    </ul>




@endsection