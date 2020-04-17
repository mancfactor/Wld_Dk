@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section('content')
<style>
input {
    border: 1px solid #000;
}
</style>

<section id="Register" class="center account">
  <section class="col">
    <div class="customer-register">
        <h2 class="theme">Create Account</h2>
        <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>.</p>
        <form method="post"  enctype="multipart/form-data" action="{{ route('register') }}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <div class="form-field">
        
      	</div>
        <div class="form-field">
            <label for="name" class="label--float">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" id="first_name" class="large" size="30" placeholder="Name">
        </div>
        <div class="form-field">
            <label for="email" class="label--float">Email</label>
            <input type="email" value="{{ old('email') }}" name="email" id="email" class="large" placeholder="Email">
        </div>
        <div class="form-field">
            <label for="password" class="label--float">Password</label>
            <input type="password" value="" name="password" id="password" class="large password" placeholder="Password">
        </div>
        <div class="form-field">
            <label for="confirm_password" class="label--float">Confirm Password</label>
            <input type="password" value="" name="password_confirmation" id="confirm_password" class="large password" placeholder="Confirm Password">
        </div>
        <div class="form-field">
            <label for="phone" class="label--float">Phone Number</label>
            <input type="text" value="" name="phone" id="phone" class="large" placeholder="Phone Number" maxlength="15">
        </div>
        <div class="form-field" style="min-height:50px;">
            <input name="terms" type="checkbox" class="form-check-input" value="1" id="terms">
             <label class="form-check-label label--float" for="terms" style="margin-left: 10px;font-size: 10px;">Yes, sign me up! by checking this box, I agree I want to receive news, offers and other promotional materials from WithLoveDarling, including by email or phone to the contact information I am submitting. I consent to WithLoveDarling, its affilaites and service providers processing my personal data for these purposes. I understand that I can withdraw my consent at any time.</label>
        </div>
        <div class="form-field action-bottom">
            <input class="btn" type="submit" value="Create">
        </div>
        </form>
    </div>
  </section>
</section>


@endsection
