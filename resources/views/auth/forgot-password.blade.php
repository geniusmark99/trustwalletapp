@extends('layouts.trustwallet')
@section('page-title','Forget Password')

@section('page-content')
<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form action="#">
        <span>Reset Password</span>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address">
        </div>
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
      </form>
      <h2>Remembered your password? <a href="signin-light.html">Sign in here</a></h2>
    </div>
  </div>
@endsection