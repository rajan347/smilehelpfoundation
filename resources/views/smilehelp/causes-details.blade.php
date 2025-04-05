@extends('layouts.headeru')
@section('content')

   <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Causes Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- Start Sample Area -->
  <section class="sample-text-area">
    <div class="container box_1170">
      <h3 class="text-heading">{{$causesdetail->heading}}</h3>
      <p class="sample-text">
        {{$causesdetail->subheading}}

      </p>
    </div>
  </section>
  <!-- End Sample Area -->

  <!-- Start Align Area -->
  <div class="whole-wrap">
    <div class="container box_1170">
      <div class="section-top-border">
        <h3 class="mb-30">All Helped</h3>
        <div class="row">
          <div class="col-md-3">
            <img src="../public/account/{{$causesdetail->img}}" class="card-img-top causeimg" alt="causes">
          </div>
          <div class="col-md-9 mt-sm-20">
            <p>{{$causesdetail->description}}</p>
          </div>
        </div>
      </div>
          
      <div class="section-top-border">
        <h3 class="mb-30">Block Quotes</h3>
        <div class="row">
          <div class="col-lg-12">
            <blockquote class="generic-blockquote">
              {{$causesdetail->quote}}
            </blockquote>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Align Area -->










  <!-- ================ contact section end ================= -->
@endsection