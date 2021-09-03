@extends('layouts.index')

@section('content')
<section class="HWR-page">
  <div class="banner-top element-animation scale">
    <div class="container">
      <div class="content">
          <div class="title">
            <div>
              <h2>HOW WE ROLL</h2>
            <h1>EXCLUSIVITY</h1>
            <p>Our referral-based network of extraordinary singletons is rich with possibilities.</p>
            </div>
            <a class="btn-arrow element-animation left" href="{{ route('about') }}"><span class="icon-next"></span></a>
              <!-- <a class="btn-arrow element-animation left" hreff=""><span class="icon-next"></span></a> -->
          </div>
         
          <a class="scroll-bottom  mPS2id-highlight" href="#scroll-info"><span class="icon-down-arrow"></span></span><span class="line"></span></a>
          
      </div>
    </div>   
  </div>
  <div class="info" id="scroll-info">
    <div class="container">
      <div class="content">
        <!-- <div class="line"></div> -->
        <div class="wrap">
          <div class="card">
            <h3 class="element-animation top">EXCEPTIONAL CLIENTELE</h3>
            <p>Our clients are influential, dynamic, remarkable individuals. We interview 
              (it’s fun, we promise) and hand-select the best of the best who we’d love to work with.</p>
          </div>
          <div class="card">
            <h3 class="element-animation top">MEMBERSHIP</h3>
            <p>Are we a match? We provide custom, complimentary, 
              and (in our humble opinion) refreshing one-to-one chats to mutually agree we’re a good fit.</p>
          </div>
          <div class="card">
            <h3 class="element-animation top">QUALITY</h3>
            <p>Sit back, relax, and allow us to dive in on your behalf. We do the sifting, vetting, 
              meeting, and important question-asking to ensure we’re introducing you to the caliber of 
              partner you’re looking for. Oh… and did we mention absolutely zero blind set-ups?</p>
          </div>
          <div class="card">
            <h3 class="element-animation top">BESPOKE</h3>
            <p>As a client, you will be paired with your very own personal matchmaker who will 
              hone in on your core values, relationship desires, and goals. Our matchmakers are 
              intentional, transparent, supportive, keep it real, and always have your back.</p>
          </div>
          <div class="card">
            <h3 class="element-animation top">CONTEMPORARY</h3>
            <p>We’ve ditched the old-school, antiquated vibes from matchmaking days of 
              yore and are coming in hot with a fresh, chic, and distinctly authentic approach to connecting.</p>
          </div>
          <div class="card">
            <h3 class="element-animation top">PHILOSOPHY</h3>
            <p>Pebble is a conscious, sophisticated, judgment-free zone. We are pleased to maintain 
              a healthy balance between our exclusive service and a gratifying experience for all.</p>
          </div>
        </div>
        <span class="line-vertical"></span>
        <a class="btn" href=""><span class="line line-left"></span><span class="value"> REGISTER NOW</span><span class="line line-right"></span></a>
      </div>
    </div>
  </div>

</section>
@endsection