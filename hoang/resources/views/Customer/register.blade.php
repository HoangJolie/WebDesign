@extends('header')
@section('registerblade')
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{Route('HOMEPAGE')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Register Page</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- register -->
<div class="register">
    <div class="container">
        <h2>Register Here</h2>
        <div class="login-form-grids">
            <h5>profile information</h5>
            <form action="{{Route('EXECUTEREGISTER')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="form-control" id="exampleInputPassword1" placeholder="Name">
                </div>
                @if ($errors->has('customer_name'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập tên của bạn!</p>
                @endif
                <div class="form-group">
                    <input type="email" name="customer_email" value="{{ old('customer_email') }}" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                @if ($errors->has('customer_email'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập địa chỉ Email!</p>
                @endif
                <div class="form-group">
                    <input type="password" name="customer_password" value="{{ old('customer_password') }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                @if ($errors->has('customer_password'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập mật khẩu!</p>
                @endif
                <div class="form-group">
                    <input type="text" name="customer_phone" value="{{ old('customer_phone') }}" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                </div>
                @if ($errors->has('customer_phone'))
                    <p class="help is-danger" style="color: red">Vui lòng nhập số điện thoại của bạn!</p>
                @endif
                <div class="register-check-box">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
                    </div>
                </div>
                <input type="submit" value="Register">
            </form>
        </div>
        <div class="register-home">
            <a href="{{Route('HOMEPAGE')}}">Home</a>
        </div>
    </div>
</div>
@endsection