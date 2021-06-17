<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('/css/style.css')}}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Sign In</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
 
    <div class="card-body" id="card-body">
        <div class="form-login sign-in-container ">
             <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1 class="title">Sign Up</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span class="text" >or use another email account</span>
 

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       placeholder="Confirm Password" required autocomplete="new-password">
                </div>

                <div class="col-md-6">
                    <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no"
                        value="{{ old('phone_no') }}" required autocomplete="phone_no" placeholder="Phone Number" autofocus>

                    @error('phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <input id="dob" type="Date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                        value="{{ old('dob') }}" required autocomplete="dob" placeholder="Date of Birth" autofocus>

                    @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                <select required autocomplete="gender" class="form-control @error('gender') is-invalid @enderror" placeholder="Gender" autofocus>
                    <option value="{{old('Male')}}">Male</option>
                    <option value="{{ old('Female')}}">Female</option>
                </select>
                    
                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>

            </form>
        </div>
        <div class="form-login register-container ">
           <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="title">Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span class="text" >or use your email account</span>




                <div class="col-md-8">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="col-md-8">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="col-md-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>



                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <br>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link frgt" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>

            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                   
                    <h1>Hello</h1>
                    <p>Sign in here to continue where we left off</p>
                    <button class="ghost" id="Back">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                   
                    <h1>Welcome</h1>
                    <p>Sign up here and travel with us</p>
                    <button class="ghost" id="Reset">Sign Up</button>
                    <button class="ghost" id="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{url('/js/style.js')}}"></script>
    @endsection

</body>

</html>