@extends('layouts.master')

@section('title')
    Board Index
@endsection

@section('content')
    <p>Board Index</p>
    @foreach ($boards as $item)
        Title : {{$item -> title}}
    @endforeach
@endsection
