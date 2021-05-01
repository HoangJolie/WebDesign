@extends('header')
@section('loginblade')

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{Route('HOMEPAGE')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Login</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- login -->
<center>
    <div class="col-sm-5 abc">
      @if(session()->has('message'))
      <div class="alert alert-success">
        {!! session()->get('message') !!}
      </div>
      @elseif(session()->has('error'))
      <div class="alert alert-danger">
        {!! session()->get('error') !!}
      </div>
      @endif
   </div>
</center>
    <style>
        .abc{
            position: relative;
            left: 400px;
        }
    </style>
<div class="login">
    <div class="container">
        <h2>Login</h2>
        <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
            <form action="{{Route('EXECUTELOGIN')}}" method="post">
                @csrf
                <input type="email" name="customer_email" placeholder="Email Address">
                @if ($errors->has('customer_email'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập địa chỉ Email!</p>
                @endif
                <input type="password" name="customer_password" placeholder="Password">
                @if ($errors->has('customer_password'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập mật khẩu!</p>
                @endif
                <div class="forgot">
                    <a href="#">Forgot Password?</a>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
        <h4>For New People</h4>
        <p><a href="{{Route('REGISTER')}}">Register Here</a> (Or) go back to <a href="{{Route('HOMEPAGE')}}">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
    </div>
</div>
@endsection