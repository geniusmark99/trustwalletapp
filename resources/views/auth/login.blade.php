@extends('layouts.trustwallet')
@section('page-title','Sign in')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/css/component.css')}}">
@endsection

@section('page-content')
<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">

      <form method="post" action="{{ route('login') }}">
        @csrf
        <span>Sign In</span>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email Address" :value="old('email')">
          <x-input-error :messages="$errors->get('email')"  />
        </div>
        
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <x-input-error :messages="$errors->get('password')" />
       
        </div>
        <div class="text-right">
          <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox">
          <label class="custom-control-label" for="form-checkbox">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>

      <h2>Don't have an account? <a href="{{route('register')}}">Sign up here</a></h2>
    </div>
  </div>
@endsection
