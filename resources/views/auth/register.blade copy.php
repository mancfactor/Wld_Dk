@extends('layouts.clone.layoutb')

@section('content')
<div id="shopify-section-1478798179956" class="shopify-section homepage-section">
    <section class="border-top section products-section" data-section-type="featured-collection">
        <div class="container">
            <div class="reading-column">
                <div class="row">
                    <div class="col-lg-12 col-md-offset-2">
                        <div class="panel panel-default">
                            <h1 class="section-heading left">REGISTER</h1>
                            <div class="panel-body">
                                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-md-4 control-label">Phone Number</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <input name="terms" type="checkbox" class="form-check-input" value="1" id="terms">
                                        <label class="form-check-label" for="terms"><a href="#">link to terms</a></label>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar (optional)') }}</label>

                                        <div class="col-md-6">
                                            <input id="avatar" type="file" class="form-control" name="avatar">
                                        </div>
                                    </div>
                                    -->
                                    <br />
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
