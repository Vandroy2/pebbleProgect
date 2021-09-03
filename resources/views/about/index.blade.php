@extends('layouts.index')

@section('content')
<section class="about-page">
  <div class="banner-top element-animation scale">
    <div class="container">
      <div class="content">
          <div class="title">
            <div>
              <h2>ABOUT US</h2>
              <h1>PASSIONATE</h1>
              <p>A modern approach to finding true love.</p>
            </div>
            <a class="btn-arrow element-animation left" href="{{ route('sign-up') }}"><span class="icon-next"></span></a>
          </div>
         
          <a class="scroll-bottom  mPS2id-highlight" href="#scroll-info-about">
            <span class="icon-down-arrow"></span>
            <span class="line"></span>
          </a>
          
      </div>
    </div>   
  </div>
  <div class="info" id="scroll-info-about">
    <div class="container">
      <div class="content">
        <div class="wrap">
          <p>“Pebble is a bespoke matchmaking consultancy dedicated to working within the most elite, 
            influential and dynamic circles. Our community is private and referral-based to ensure we 
            connect with extraordinary singletons nationwide… all of whom are looking for loving, 
            long-term relationships.”</p>
            <span class="line-vertical"></span>
        <a class="btn" href="">
          <span class="line line-left"></span>
          <span class="value"> REGISTER NOW</span>
          <span class="line line-right"></span>
        </a>
        </div>
    </div>
  </div>

</section>
@endsection