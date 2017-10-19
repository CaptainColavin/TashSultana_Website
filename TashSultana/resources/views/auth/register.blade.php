@extends('layouts.app')

@section('content')

<div style="width:50%; margin-left: auto; margin-right: auto;">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register</h1>
	               		<hr/>
	               	</div>
	            </div>
				<div class="main-login main-center">

					<form id="register-form" action="{{ route('register') }}" method="post" role="form">
					{{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            </div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required>
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
                  <input type="password" name="password" id="email" tabindex="1" class="form-control" placeholder="Password" value="{{ old('password') }}" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password"  id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register">Register Now</button>
						</div>
						<div class="login-register">
				            <a href="/goldenbook" style="float:left">Return to the Golden Book page</a> <a href="/login" style="float:right">Login</a>
				         </div>
					</form>
				</div>
      </div>
@endsection
