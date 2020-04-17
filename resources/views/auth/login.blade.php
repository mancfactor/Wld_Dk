@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section('content')

<style>
input {
    border: 1px solid #000;
}
</style>
<section id="Login" class="account">
	<section class="col">
      <div class="login">
          <h2 class="theme">Login</h2>
          <p>Don't have an account? <a href="{{ route('register') }}">Sign up here</a>.</p>
          <form method="post" action="{{ route('login') }}" id="customer_login" accept-charset="UTF-8">
          {{ csrf_field() }}
          <input type="hidden" name="utf8" value="✓">
          <div class="form-field">
              <label for="customer_email" class="label--float">Email</label>
              <input type="email" value="{{ old('email') }}" name="email" id="email" class="" placeholder="Email" spellcheck="false" autocomplete="off" autocapitalize="off" autofocus="">
          </div>
          
          <div class="form-field">
              <label for="password" class="label--float">Password</label>
              <input type="password" value="" name="password" id="password" class="password" placeholder="Password">
              <div class="forgot-password">
                  <a href="{{ route('password.request') }}" >Forgot your password?</a>
              </div>
          </div>
          <div class="form-field action-bottom">
              <input class="btn" type="submit" value="Sign In">
          </div>
          </form>
      </div>
	</section>
</section>


@endsection
