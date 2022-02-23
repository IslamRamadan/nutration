<!DOCTYPE html>
<html lang="en">
<head>
	<title>reset passsword</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico') }}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('front') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css') }}" >
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css') }}" >
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="post" action="{{ route('password.update') }}">
					
                    @csrf
					<span class="login100-form-title p-b-55">
						reset password
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<input type="hidden" name="token" value="{{ $token }}">

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password"  id="password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "confirmation Password is required">
                        <input class="input100  @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Password"  id="password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					
					@if ($errors->any())
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                     <div class="row mr-2 ml-2" >
                        <div  class="btn btn-lg btn-block btn-outline-danger mb-2"
                                id="type-error">{{ $errors->first() }}
					 </div>
                </div>
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						
                    </div>
                @endif

				

				
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							send
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
                         <a href="{{ route('my_admin') }}"> login page?</a> 
						</span>
					</div>

				
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}" ></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}" ></script>
	<script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}" ></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/select2/select2.min.js') }}" ></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/js/main.js') }}" ></script>

</body>
</html>