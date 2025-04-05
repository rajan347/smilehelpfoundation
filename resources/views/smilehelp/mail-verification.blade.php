@extends('layouts.header')
@section('content')
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Verify Mail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section></br>
    <!-- breadcrumb start-->

    <!-- feature_part start-->
    
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <form action="{{route('verify-mail')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" class="form-control" name="uid"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">
                         <input type="text" class="form-control" name="code"   placeholder="enter code " id="" value="" required>
<br>
  <input type="submit" class="btn_2" style="width: 100%" value="Verify">
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></br>
    
    <!-- feature_part start-->

   
    <!--::our client part end::-->
@endsection