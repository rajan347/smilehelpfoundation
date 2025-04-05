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
                            <h2>Total Donation</h2>
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
                    <h4>Last 7 Days Donation</h4>
                </div>
 <canvas  id="donation" style="height: 200px"></canvas> 
       
            </div>
        </div>
    </div>
    </div>
  
</br>
</br>
<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="card" style="height: 50%;overflow-y: scroll;">
                 <div class="card-header">
                    <h4>Total Donation List</h4>
                </div>

 @foreach($totald as $totalds)
                       
                    <div class="gaadiex-list">
                      <div class="gaadiex-list-item">
                          <i class="">
                              
<?php 
                                if(!empty($totalds->image)){
                                 echo "<img src='public/account/{$totalds->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                          </i>
                      <div class="gaadiex-list-item-text">
                        <h3><a href="{{ url('user-profile/'.$totalds->user_id) }}">{{$totalds->name}}</a> <h4 style="float: right;"> ₹ {{$totalds->amount}}</h4></h3>
                        <h4>{{$totalds->city}}</h4>
                        <!-- <p> {{$totalds->about}}</p> -->

                      </div>
                    </div>
                     </div>
@endforeach



            </div>
        </div>



        <div class="col-md-6">
            <div class="card" style="height: 50%;overflow-y: scroll;">
                 <div class="card-header">
                    <h4>Today Donation List</h4>
                </div>

@if($todaydcount==0)

<p>There Is No Donation Today!</p>

@endif



 @foreach($todayd as $todayds)
                       
                    <div class="gaadiex-list">
                      <div class="gaadiex-list-item">
                          <i class="">
                              
<?php 
                                if(!empty($todayds->image)){
                                 echo "<img src='public/account/{$todayds->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                          </i>
                      <div class="gaadiex-list-item-text">
                        <h3><a href="{{ url('user-profile/'.$totalds->user_id) }}">{{$totalds->name}}</a> <h4 style="float: right;"> ₹ {{$totalds->amount}}</h4></h3>
                        <h4>{{$todayds->city}}</h4>
                       <!--  <p> {{$todayds->about}}</p> -->
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


  
@endsection('content')
@section('script')
    <script>
     var ctx = document.getElementById("donation").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:['1 Day', '2 Day', '3 Day', '4 Day','5 Day', '6 Day', '7 Day'],
            datasets: [{
                    
                    
                
                    label: 'Donation',
                   backgroundColor: '#26b538',
                    data:[
                       {{ $donate7days }}
                        ]},
                  
            ]
        },
       
    });
</script>


 
@endsection