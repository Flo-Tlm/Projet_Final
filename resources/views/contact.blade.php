@extends('layouts.app')

@section('main')


{{-- SUPPORT DE JEU ----------------------------------------------------------------------}}
    @include('composent.contact.support')

    {{-- AUTRE SITE ----------------------------------------------------------------------}}
    @include('composent.contact.autreSite')

       {{-- RÉSEAUX ----------------------------------------------------------------------}}
       @include('composent.contact.reseaux')

    




@endsection