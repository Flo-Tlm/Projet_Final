@extends('layouts.app')

@section('main')
    {{-- TEXTE INFOS QUI SOMME NOUS  ------------------------------------------------------------- --}}
    @include('composent.studio.infoTexte')

    {{-- GALERIE EQUIPE ------------------------------------------------------------------------------------------------------------ --}}
    @include('composent.studio.galerieEquipe')

@endsection
