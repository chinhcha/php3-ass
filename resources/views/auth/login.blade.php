@extends('client.layouts.master')
@section('title')
Login
@endsection
@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Login</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Login</li>
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
                        <h1>Sign in to <br>Recharge Direct.</h1>
                        <p>It you don't have an account you can <a href="{{route('register')}}">Register here!</a></p>
                        <img src="{{asset('theme/client/assets/images/login/2.png')}}" alt="login">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-right-form">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <ul class="social-links">
                                <li><a href="#" class="fa-brand"><span aria-hidden="true" class="fa-brands fa-facebook-f"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="fa-brands fa-google-plus-g"></span></a></li>
                            </ul>
                            <span class="back-or"> ........ Or, sign in with your email ........ </span>
                            <p>
                                <label>Work Email</label>
                                <input placeholder="E-mail Address" type="email" value="{{old('email')}}" id="email" name="email">
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </p>
                            <p>
                                <label>Password</label>
                                <input placeholder="Password" type="password"  name="password">
                                @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            </p>
                            <p>
                                <a href="{{ route('forgot') }}"> Forgot password?</a>
                            </p>
                            {{-- <div class="back-check-box">
                                <input type="checkbox" id="box-1"> Keep me signed in
                                <p>Forgot your password?</p>
                            </div> --}}
                            <button type="submit">Sign In</button>
                            <em class="signup">New to Neoton? <a href="{{route('register')}}">Sign Up</a></em>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
