@extends('layouts.layoutAuth')
@section('content')
            <div class="text-center">
                <a href="#" class="logo-lg"><i class="mdi mdi-radar"></i> <span>Mi Ubersito</span> </a>
            </div>

            <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group row{{ $errors->has('nombres') ? ' has-error' : '' }}">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                            </div>
                            <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required="" placeholder="Nombres" required autofocus>
                            @if ($errors->has('nombres'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                            </div>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="Correo Electrónico" required autofocus>
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
                                <span class="input-group-text"><i class="mdi mdi-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required="" placeholder="Contraseña" required autofocus>
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
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-key"></i></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" placeholder="Confirmar Contraseña" required autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" checked="checked">
                            <label for="checkbox-signup">
                                I accept <a href="#">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-custom waves-effect waves-light w-md" >Register</button>
                    </div>
                </div>

                <div class="form-group row m-t-30">
                    <div class="col-12 text-center">
                        <a href="pages-login.html" class="text-muted">Already have account?</a>
                    </div>
                </div>

            </form>
@endsection