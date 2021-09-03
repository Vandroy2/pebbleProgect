@extends('layouts.index')

@section('content')
<section class="sign-up-page">
  <div class="banner-top element-animation scale">
    <div class="container">
        <div class="content">
            <div class="title">
              <div>
                <h2>REGISTER NOW</h2>
                <h1>MEET THE ONE</h1>
                <p>All consultations are complimentary and confidential.</p>
              </div>
                
            </div>
            <a class="scroll-bottom  mPS2id-highlight" href="#scroll-info-sign-up">
                <span class="icon-down-arrow"></span>
                <span class="line"></span>
            </a>
        </div>
    </div>   
  </div>
  <div class="info" id="scroll-info-sign-up">
    <div class="container">
      <div class="content">
        <div class="wrap">
            <form>
              <div class="gender">
                <input type="radio" class="radio" id="man" name="gender" checked>
                <label for="man">MAN</label>
                <input type="radio" class="radio" id="woman" name="gender">
                <label for="woman">WOMAN</label>
              </div>
                
              <input type="text" placeholder="Name" required>
              <input type="email" placeholder="Email address" required>
              <input type="tel"   onkeyup="this.value=this.value.replace(/[^\d]/,'')" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                  required placeholder="Phone number">
              <input type="text" placeholder="City" required>
              <div class="param">
                <input type="text" class="dop-param" placeholder="State" required>
                <input type="text" class="dop-param" placeholder="Zip code" required>
                <input type="text" class="dop-param" placeholder="DOB" required>
                <input type="text" class="dop-param" placeholder="Height" required>
              </div>
              
              <input type="text" placeholder="Referred by" required>
              <div class="file-upload">  
                <label><input type="file" id="fl_inp" accept=".jpg, .png" name="file">
                  <span class="icon-user"></span> 
                  <div id="fl_nm">Upload Images</div>
                </label>   
              </div>
              <!-- <input type="file" class="uploud-images" id="uploudImages" required>
              <label for="uploudImages"><span class="icon-user"></span></label> -->
              <input type="checkbox" class="custom-checkbox" id="accept">
              <label for="accept">I accept the Terms & Conditions.</label>
              <input type="submit" value="SUBMIT">
            </form>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection