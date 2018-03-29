@extends('backpack::layout-mini')

@section('content')
    <div id="register" class="animate form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('backpack.auth.register') }}">
                {!! csrf_field() !!}

                <h1>{{ trans('backpack::base.register') }}</h1>
                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" placeholder="{{ trans('backpack::base.name') }}" value="{{ old('name') }}" required="" />

                    @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                </div>
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
                <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('backpack::base.confirm_password') }}" required="" />

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit">Submit</button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">Already a member ?
                        <a href="{{ route('backpack.auth.login') }}" class="to_register"> {{ trans('backpack::base.login') }} </a>
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
