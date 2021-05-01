@extends('parentlayout')
@section('profileblade')

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<div class="products">
    <div class="container">
        <div class="agileinfo_single">
            
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="{{asset('FE/images/hoang1.jpg')}}" alt=" " class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
            @php
                $getCustomerName = Session::get('customer_name');
                $getCustomerPhone = Session::get('customer_phone');  
                $getCustomerEmail = Session::get('customer_email');  
            @endphp
                <h2>{{$getCustomerName}}</h2>
                <div class="form-group">
                    <h4>Email: {{$getCustomerEmail}}</h4> 
                </div>
                <div class="form-group">
                    <h4>Phone: {{$getCustomerPhone}}</h4> 
                </div>
                <div class="form-group">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                        officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                        officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection