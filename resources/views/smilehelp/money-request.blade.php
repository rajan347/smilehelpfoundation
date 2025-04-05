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
                            <h2>Add Money Request Details</h2>
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
                            <form action="{{route('applyrequestmoney')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" class="form-control" name="uid"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">
                         <input type="number" class="form-control" name="amount"   placeholder="Enter Amount" id="" value="" required>
                         
                         <input type="text" class="form-control" name="reason"   placeholder="Enter Valid Reason" id="" value="" required>

                         <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="reasonimg" required>
    <label class="custom-file-label" for="inputGroupFile01">Reasionable Image</label>
  </div>
</div>
                        <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="aadharfront" required>
    <label class="custom-file-label" for="inputGroupFile01">Aadhar Front Image</label>
  </div>
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="aadharback" required>
    <label class="custom-file-label" for="inputGroupFile01" >Aadhar Back Image</label>
  </div>
</div>
<br>
  <input type="submit" class="btn_2" style="width: 100%" value="Submit">
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></br>
    
    <!-- feature_part start-->

   
    <!--::our client part end::-->
@endsection