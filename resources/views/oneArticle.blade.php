@extends('layouts.app')

@section('main')

{{-- INFOSARTICLE --------------------------------------------------------------------------------------------}}

@include('composent.oneArticle.textArticle')

{{-- CAROUSEL --------------------------------------------------------------------------------------------}}
@include('composent.oneArticle.carouselArticle')

{{-- SONDAGE --------------------------------------------------------------------------------------------}}
@include('composent.oneArticle.sondageArticle')

{{-- COMMENTAIRES --------------------------------------------------------------------------------------------}}
@include('composent.oneArticle.commentaireArticle')


@endsection