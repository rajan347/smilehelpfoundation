@extends('layouts.header')
@section('content')
<style type="text/css">
.blog_part .right_single_blog .single_blog .media-body {
padding: 5px !important;
}    
.blog_part .right_single_blog .single_blog .media-body h5 {
    font-weight: 600;
     line-height: 1.5; 
     margin: 0px; 
    font-size: 16px;
    padding: 8px;
    font-family: 'FontAwesome';
    -webkit-transition: .5s;
    transition: .5s;
</style>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Request Money</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_part start-->
        @if(session()->has('messagemail'))
<div class="card">
    
    <div class="alert alert-danger">
        {{ session()->get('messagemail') }}
    </div>
    </div>

@endif
<section class="blog_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center" style="">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        
                        <h2>Term And Condiction</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="right_single_blog">


                        @foreach($termcondiction as $termcondiction)
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <a href="#">
                                        <h5 class="mt-0">{!!$termcondiction->termcondiction!!}</h5>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <form action="{{route('emailverification')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" class="form-control" name="uid"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">
                         <input type="hidden" class="form-control" name="otp"   placeholder="" id="" value="<?php echo uniqid()?>">

                        <input type="checkbox" id="vehicle1" name="check" value="yes" class="form-control" required>
  <label for="vehicle1"> Accept Term And Condiction</label><br>
  <input type="submit" class="btn_2" style="width: 100%" value="Next">
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></br>
    
    <!-- feature_part start-->

   
    <!--::our client part end::-->
@endsection