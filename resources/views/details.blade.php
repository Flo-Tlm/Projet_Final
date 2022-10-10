@extends('layouts.app')

@section('main')

{{-- INFOSARTICLE --------------------------------------------------------------------------------------------}}

@include('composent.details.textArticle')

{{-- CAROUSEL --------------------------------------------------------------------------------------------}}
@include('composent.details.carouselArticle')

{{-- SONDAGE --------------------------------------------------------------------------------------------}}
@include('composent.details.sondageArticle')

{{-- COMMENTAIRES --------------------------------------------------------------------------------------------}}
@include('composent.details.commentaireArticle')


@endsection