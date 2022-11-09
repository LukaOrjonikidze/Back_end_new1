@extends('layout')
@section('title', 'Main')



@section('body')
    <form class="d-flex w-25" role="search" method="POST">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>


    @foreach ($results as $rows)
        @isset($rows[0]->group)
            <h1>{{$rows[0]->group}}</h1>
            <ul>
            @foreach ($rows as $row)
                <h4>{{$row->position}}) {{$row->name}} - {{$row->price}}$</h4>
            @endforeach
            </ul>
            <a href="{{route('group', ['group' => $rows[0]->group])}}"><button class="btn btn-warning">ყველას ნახვა</button></a>
        @else 
        <h1>Not Found</h1>
        @endisset
    @endforeach
    <hr>
    <a href="{{route('admin')}}"><button class="btn btn-dark">Admin</button></a>
@endsection
