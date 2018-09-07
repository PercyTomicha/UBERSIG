@extends('layouts.layoutAuth')
@section('content')
            <div class="text-center">
                <a href="#" class="logo-lg"><i class="mdi mdi-radar"></i> <span>Mi Ubersito</span> </a>
            </div>

            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control" name="email" required="" placeholder="Username" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-radar"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required="" placeholder="Password" value="{{ old('password') }}" required autofocus>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <label for="checkbox-signup">
                                Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-custom w-md waves-effect waves-light">Login
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="pages-register.html" class="text-muted">Create an account</a>
                </div>
                </div>
            </form>
@endsection