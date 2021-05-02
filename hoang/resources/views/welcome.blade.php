@extends('header')

@section('welcome')

<ul id="demo1">
    <li>
        <img src="{{asset('FE/images/11.jpg')}}" alt="" />
        <!--Slider Description example-->
        <div class="slide-desc">
            <h3>Hi</h3>
        </div>
    </li>
    <li>
        <img src="{{asset('FE/images/22.jpg')}}" alt="" />
          <div class="slide-desc">
            <h3>We are Super Market</h3>
        </div>
    </li>
    
    <li>
        <img src="{{asset('FE/images/44.jpg')}}" alt="" />
        <div class="slide-desc">
            <h3>BUY RICE PRODUCTS ARE NOW ON LINE WITH US</h3>
        </div>
    </li>
</ul>
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->

@endsection