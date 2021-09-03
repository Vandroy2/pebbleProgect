@extends('layouts.index')

@section('content')
<section class="home-page">
  <div class="banner-top element-animation scale">
    <div class="container">
      <div class="content">
          <div class="title">
            <div>
               <h1>PASSIONATELY REINVENTING MATCHMAKING</h1>
              <p>Designing the path to your ultimate partner.</p>
            </div>
             
               <a class="btn-arrow element-animation left" href="{{ route('HWR') }}"><span class="icon-next"></span></a>
          </div>
          <!-- <a class="btn-arrow element-animation left" href="{{ route('HWR') }}"><span class="icon-next"></span></a> -->
          <a class="btn element-animation right" href=""><span class="line line-left"></span><span class="value"> REGISTER NOW</span><span class="line line-right"></span></a>
      </div>
    </div>   
  </div>

</section>
@endsection