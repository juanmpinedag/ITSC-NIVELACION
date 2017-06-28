@extends('layouts.landingPage')
@section('title', 'home')
@section('title-content', 'Home')
@section('content')
<div class="row padding">
    <div class="col-lg-4 col-md-4">
      <div class="">
      @if (count($query) > 0)
        @include('forms.home_search',['url'=>'home','link'=>'home'])

@else
    <div class="container" id="error">
    @include('forms.home_search',['url'=>'home','link'=>'home'])
        <figure id="img-error">
          <img src="img/sad-face.png" alt="sad-face">
        </figure>
        <h2 class="text-center">Oops, no se encontro ningun dato.</h2>
    </div>

      @endif
      </div>
    </div>
@endsection

