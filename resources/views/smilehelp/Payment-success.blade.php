@extends('layouts.header')
@section('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Message</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      

        <div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Your Donation Is Successful.</strong>Plz Help To People Who Need It, Motivate To Others .</p>
  <h3>
          @if(session()->has('message'))

    
    <div class="alert alert-success">
     Your Donation id :     {{ session()->get('message') }}
    
    </div>

@endif

  </h3>
  <hr>

  <p class="lead">
    <a href="{{route('index')}}" class="btn_2">Continue to homepage</a>
  </p>
</div>

       
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection