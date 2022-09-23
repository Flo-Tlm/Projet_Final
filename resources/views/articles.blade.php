@extends('layouts.app')

@section('main')
    {{-- ARTICLES -------------------------------------------------------- --}}
    @include('composent.articles.articleBloc')

    {{-- PAGINATION ----------------------------- --}}
    @include('composent.articles.pagination')

@endsection
