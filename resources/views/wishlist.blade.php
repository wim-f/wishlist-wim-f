@extends('layout')
@include('header')
    @section('content')
        @foreach($items as $item)
            <article>
                <a href="/wishlist/{{ $item->id }}">{{ $item->id }}</a>
                <p>{{ $item->naam }}</p>
            </article>
        @endforeach
    @endsection
