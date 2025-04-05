@extends('layouts.header')
@section('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>contact</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  
  
    @if(session()->has('message'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    </div>

@endif
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="{{route('enquiry')}}" method="post" id=""
            >
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message' required></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address' required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject' required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control" name="phone" id="" type="number" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone'" placeholder='Enter Phone Number' required>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message <i class="flaticon-right-arrow"></i> </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>jayanagar, Bengaluru</h3>
              <p>3rd main road,jayanagar 1st block,bairasandra extension, Karnataka - 560011</p>
            </div>
          </div>
          <!-- <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:+918792126994"><p>(+91) 8792126994 </p></a></h3>
              <p>Any Time</p>
            </div>
          </div> -->
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <!--<h3><a href="mailto:info@smilehelpfoundation.com"><p>info@smilehelpfoundation.com </p></a></h3>-->
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection