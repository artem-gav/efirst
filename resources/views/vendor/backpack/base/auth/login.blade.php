@extends('backpack::layout-mini')

@section('content')
    <div id="login" class="animate form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                {!! csrf_field() !!}

                <h1>{{ trans('backpack::base.login') }}</h1>
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" placeholder="{{ trans('backpack::base.email_address') }}" value="{{ old('email') }}" required="" />

                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="{{ trans('backpack::base.password') }}" required="" />

                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                        </label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit">{{ trans('backpack::base.login') }}</button>
                    <a class="reset_pass" href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">New to site?
                        <a href="{{ route('backpack.auth.register') }}" class="to_register"> {{ trans('backpack::base.register') }} </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                        <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
            <!-- form -->
        </section>
        <!-- content -->
    </div>
@endsection
