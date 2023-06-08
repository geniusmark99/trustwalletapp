@extends('layouts.trustwallet')
@section('page-title','Sign up')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/css/component.css')}}">
@endsection

@section('page-content')
<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form  method="POST" action="{{route('register')}}">
        @csrf
        <span>Create Account</span>
        <div class="form-group">
          <input type="text" name="name" :value="old('name')"  class="form-control" placeholder="Name" autocomplete="name">
          <x-input-error :messages="$errors->get('name')" />
        </div>
        <div class="form-group">
          <input type="email" name="email" :value="old('email')" class="form-control" placeholder="Email Address" autocomplete="email">
          <x-input-error :messages="$errors->get('email')" /> 
        </div>
        <div class="form-group">
          <input  type="password" name="password" autocomplete="off" class="form-control" placeholder="Password">
          <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="form-group">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" autocomplete="off">
          <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox">
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="#!">Terms &
              Conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
      <h2>Already have an account? <a href="{{route('login')}}">Sign in here</a></h2>
    </div>
  </div>
@endsection