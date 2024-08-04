@extends('client.layouts.master')

@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Registration</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <div class="back-login-page pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-left-content">
                        <h1>Create a <br>Free Account.</h1>
                        <p>I'm a subhead that goes with a story.</p>
                        <img src="{{asset('theme/client/assets/images/login/2.png')}}" alt="login">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-right-form">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <ul class="social-links">
                                <li><a href="#" class="fa-brand"><span aria-hidden="true" class="fa-brands fa-facebook-f"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="fa-brands fa-google-plus-g"></span></a></li>
                            </ul>
                            <span class="back-or"> ........ Or, sign in with your email ........ </span>
                            <p>
                                <label>Full Name</label>
                                <input placeholder="Full Name" type="text" value="{{old('name')}}" id="name" name="name">
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            </p>
                            <p>
                                <label>Work Email</label>
                                <input placeholder="E-mail Address" type="email" value="{{old('email')}}" id="email" name="email">
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </p>
                            <p>
                                <label>Password</label>
                                <input placeholder="Password" type="password" id="pass" name="password">
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </p>
                            <p>
                                <label for="password_confirmation" class="mt-4">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </p>
                            <p>
                                <a href="">Forgot password?</a>
                            </p>

                            <button type="submit" id="button" name="submit">Sign Up</button>
                            <em class="signup">New to Neoton? <a href="{{route('login')}}">Sign In</a></em>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
