@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section('content')
<style>
input {
    border: 1px solid #000;
}
.form-control{
    border: 1px solid #bcb7b4;
    background: #fff;
    min-height: 32px;
    display: block;
    width: 85%;
}
label {
    display: block;
    line-height: 1.2em;
    color: #000;
}
</style>
<section id="Forgot Password" class="center account">
  <section class="col">
    <div class="customer-forgot">
        <h2 class="theme">Reset Password</h2>
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-field">
        
      	</div>
        <div class="form-field">
            <label for="email" class="label--float">Email</label>
            <input type="email" value="{{ old('email') }}" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-field action-bottom">
            <input class="btn" type="submit" value="Send Password Reset Link">
        </div>
        </form>
    </div>
  </section>
</section>
@endsection
