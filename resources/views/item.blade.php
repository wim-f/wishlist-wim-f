@extends('layout')
@include('header')
@section('content')

        <article>
            <p>{{ $item->naam }}</p>
            <p>{{ $item->plaatje }}</p>
            <p>{{ $item->beschrijving }}</p>
            <a href="{{ $item->link_to_site }}">{{ $item->prijs }}</a>
        </article>

@endsection
