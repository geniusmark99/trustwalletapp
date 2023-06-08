@extends('layouts.trustwallet')
@section('page-title','Not Found')
@section('page-content')
<div class="error-page vh-100 d-flex justify-content-center text-center">
    <div class="my-auto">
      <h2>404</h2>
      <p>Oops something went wrong</p>
      <a href="{{route('home')}}" class="btn">Back to Home <i class="icon ion-md-home"></i></a>
    </div>
  </div>
@endsection