@extends('layouts.header')
@section('content')
    <!-- Header part end-->
<style type="text/css">body {background:#e2e2e2;}
/********card frame **************/

.gaadiex-list {list-style-type: none; margin: 0;padding: 0;}
.gaadiex-list>.gaadiex-list-item {padding: 0 22px;}
.gaadiex-list-item-img  {
    float: left;
    width: 58px;
    height: 58px;
    margin-top: 20px;
    margin-bottom: 8px;
    margin-right: 20px;
    border-radius: 50%;
}
.gaadiex-list-item i  {
    float: left;
    font-size:48px;
    width: 58px;
    height: 58px;
    margin-top: 20px;
    margin-bottom: 8px;
    margin-right: 20px;
    border-radius: 50%;
}
.border-b-1 {border-bottom: 1px solid rgba(162,162,162,.16);}
.rounded-circle{
    margin-top: -57px !important;
}
</style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Search Result</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
     <section class="contact-section section_padding">


<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            <div class="card">
                 <div class="card-header">
                    <h4>Your Search Result</h4>
                </div>
<?php
if(count($searchuser) == 0){
echo  'No user found. Try to search again ! ';
}
?>
 @foreach($searchuser as $searchusers)
                       
                    <div class="gaadiex-list">
                      <div class="gaadiex-list-item">
                          <i class="">
                              
<?php 
                                if(!empty($searchusers->image)){
                                 echo "<img src='public/account/{$searchusers->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                          </i>
                      <div class="gaadiex-list-item-text">
                        <h3><a href="{{ url('user-profile/'.$searchusers->user_id) }}">{{$searchusers->name}}</a></h3>
                        <h4>{{$searchusers->city}}</h4>
                        <!-- <p> {{$searchusers->about}}</p> -->
                      </div>
                    </div>
                     </div>
@endforeach


            </div>
        </div>
    </div>
    </div>
        </section>


 
    <!--================Blog Area =================-->

@endsection