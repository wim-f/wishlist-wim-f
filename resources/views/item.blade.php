@extends('layout')
@include('header')
@section('content')

        <article>
            <p>{{ $item->title }}</p>
            <p>{{ $item->plaatje }}</p>
            <p>{{ $item->description }}</p>
            <a href="{{ $item->link_to_site }}">{{ $item->prijs }}</a>
        </article>

@endsection
