@extends('layouts.app')

@section('content')

<div style="width:50%; margin-left: auto; margin-right: auto;">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login</h1>
	               		<hr/>
	               	</div>
	            </div>
				<div class="main-login main-center">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
								</div>
							</div>
						</div>

						<div class="form-group ">
              <div class="col-md-6">
                <input type="checkbox" name="remember" style="margin-right: 10px; float: left;"{{ old('remember') ? 'checked' : '' }}><label style="float: left;">Remember Me</label>
                <a class="btn btn-link" href="{{ route('password.request') }}" style="float: left; padding:0;">Forgot Your Password?</a>
              </div>
              <div class="col-md-6">
                <button type="submit" tabindex="4" class="btn btn-register" style="width: 100%">Login</button>
              </div>
						</div>
						<div class="login-register">
	            <a href="/goldenbook" style="float:left">Return to the Golden Book page</a> <a href="/register" style="float:right">Register</a>
	          </div>
					</form>
				</div>
      </div>
@endsection
