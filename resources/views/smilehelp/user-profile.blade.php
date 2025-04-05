@extends('layouts.headeru')
@section('content')
    <!-- Header part end-->
    <style type="text/css">
      @media (max-width: 360px){
 .card-body{
   
    padding: 0.2rem !important;
}
}
      .badge-success {
    color: #fff;
    background-color: #28a745;
    font-size: 12px !important;
    padding: 4px !important;
    }

    </style>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2><?php 
                                if(!empty($user->name)){
                                 echo $user->name ;  
                                 }else {
                                  
                                 } 
                                 ?></h2>
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
        <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
                <p style="position: absolute;"> <?php 
                                if(!empty($member)){
                                 echo "<img src='../public/loo.png' style='width:45px; height
                                 :35px; border-radius:;' alt='member' >" ;  
                                 }else {
                                  echo "" ;
                                 } 
                                 ?></p>
<?php 
                                if(!empty($profile->image)){
                                 echo "<img src='../public/account/{$profile->image}' style='width:300px; height
                                 :300px; border-radius:50%;' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' alt='user avatar'>
" ;
                                 } 
                                 ?>
               
              </div>
              <h5 class="mb-1 text-white"><?php 
                                if(!empty($user->name)){
                                 echo $user->name ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?></h5>
              <h6 class="text-light"><?php 
                                if(!empty($profile->about)){
                                 echo $profile->about ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?></h6>
             </div>
             <div class="row text-center mt-4">
                  <div class="col p-6">
                   <h4 class="mb-1 line-height-5">
                   <i class="fa fa-heart" style="font-size:20px;color:#26b538"></i>
                   <i class="fa fa-heart" style="font-size:25px;color:#26b538"></i>
              
               <i class="fa fa-heart" style="font-size:30px;color:#26b538"> <span class="">
                <?php
 if ($heartw > 999999) {
    $heart = floor($heartw / 1000000);
    echo $heart .  "M";
}
elseif ($heartw > 999) {
    $heart = floor($heartw / 1000);
    echo $heart .  "K";
    //print_r($heart);exit();
} 
else{
    $heart = $heartw;
    echo $heart;
}       
  ?>
    
  </span> </i>
              
                 </div>
                    
                 </div>
             <div class="row text-center mt-4">
                  <div class="col p-2">
                   <h4 class="mb-1 line-height-5">₹ 

                   <?php 
                                if(!empty($amountrt)){
                                 echo $amountrt ;  
                                 }else {
                                  echo '0' ;
                                 } 
                                 ?>

                 </h4>
                    <small class="mb-0 font-weight-bold">Take Money</small>
                   </div>
                    <div class="col p-2">
                      <h4 class="mb-1 line-height-5"> ₹ 

                      <?php 
                                if(!empty($amountdt)){
                                 echo $amountdt ;  
                                 }else {
                                  echo '0' ;
                                 } 
                                 ?>
                    </h4>
                     <small class="mb-0 font-weight-bold">Donate Money</small>
                    </div>
                    <div class="col p-2">
                     <h4 class="mb-1 line-height-5">
 <?php
                     if(!empty($postt)){
                                 echo $postt ;  
                                 }else {
                                  echo '0' ;
                                 } 
                                 ?>

                   </h4>
                     <small class="mb-0 font-weight-bold">Posts</small>
                    </div>
                 </div>
              <div class="card-body">
                <ul class="list-group shadow-none">
                
                <li class="list-group-item">
                  
                  <div class="list-details">
                      <span> <i class="fa fa-envelope" style="color:#26b538"></i></span>
                 
                    <span><?php 
                                if(!empty($profile->email)){
                                 echo $profile->email ;  
                                 }else {
                                  echo " info@example.com" ;
                                 } 
                                 ?></span>
                    <small>Email Address</small>
                  </div>
                </li>
                <li class="list-group-item">
                  
                  <div class="list-details">
                      <span> <i class="fa fa-calendar" aria-hidden="true" style="color:#26b538"></i></span>
                 
                    <span><?php 
                                if(!empty($profile->created_at)){
                                 echo $profile->created_at ;  
                                 }else {
                                  
                                 } 
                                 ?></span>
                    <small>Joined At</small>
                  </div>
                </li>
                <li class="list-group-item">
                  
                  <div class="list-details">
                      <span> <i class="fa fa-globe" style="color:#26b538"></i></span>
                
                    <span><?php 
                                if(!empty($profile->website)){
                                 echo "<a href=".$profile->website.">$profile->website</a>";  
                                 }else {
                                  echo " www.example.com" ;
                                 } 
                                 ?></span>
                    <small>Website Address</small>
                  </div>
                </li>
                </ul>
                
                 
               </div>
               <div class="card-footer text-center">
                 
                                @if(!empty($profile->facebook))
                                 <a href="{{$profile->facebook}}" ><i class="fa fa-facebook-square" style="font-size:48px;color:#26b538" title="facebook" target="_blank">
                 </i></a>
                                @endif 

                                @if(!empty($profile->instagram))
                                 <a href="{{$profile->instagram}}" ><i class="fa fa-instagram" style="font-size:48px;color:#26b538" title="instagram" target="_blank"></i></a>
                 
                                @endif 

                                @if(!empty($profile->twitter))
                           <a href="{{$profile->twitter}}" ><i class="fa fa-twitter-square" style="font-size:48px;color:#26b538" title="twitter" target="_blank"></i></a>
                                @endif 
               </div>
               
               
             </div>
           </div>
        </div>
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
            <ul class="nav nav-pills nav-pills-primary nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#home" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link "><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                
            </ul>
            <div class="tab-content p-3 ">

                <div class="tab-pane active show" id="home">

                <!--- \\\\\\\Post-->
                </br>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
@if(count($userpost)==0)
<h3><center>Not Uploaded Any Post Yet !</center></h3>
@endif
@foreach($userpost as $userposts)
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($profile->image)){
                                 echo "<img src='../public/account/{$profile->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                                   
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">
                                      <?php 
                                if(!empty($userposts->heading)){
                                 echo $userposts->uname ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                    <div class="h7 text-muted"> 
                                       <?php 
                                if(!empty($userposts->heading)){
                                 echo $userposts->city ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                </div>
                            </div>
                            <div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 
                           <?php 
                                if(!empty($userposts->heading)){
                                 echo $userposts->date ;  
                                 }else {
                                  
                                 } 
                                 ?>
                               </div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"><?php 
                                if(!empty($userposts->heading)){
                                 echo $userposts->heading ;  
                                 }else {
                                  
                                 } 
                                 ?></h5>
                        </a>

                        <?php 
                                if(!empty($userposts->post_image)){
                                 echo "<img src='../public/account/{$userposts->post_image}'  class ='' >" ;  
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <!-- <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div> -->
                </div></br>
@endforeach 
          <!--   <post another > -->
@foreach($userdonation as $userdonations)
        

                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($userdonations->image)){
                                 echo "<img src='../public/account/{$userdonations->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                                   
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">
                                      <?php 
                                if(!empty($userdonations->amount)){
                                 echo $userdonations->name ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                    <div class="h7 text-muted"> 
                                       <?php 
                                if(!empty($userdonations->amount)){
                                 echo $userdonations->city ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                </div>
                            </div>
                            <div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 
                           <?php 
                                if(!empty($userdonations->amount)){
                                 echo $userdonations->created_at ;  
                                 }else {
                                  
                                 } 
                                 ?>
                               </div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"><?php 
                                if(!empty($userdonations->amount)){
                               echo "<b> Thank You For Your Donation : </b>₹ ".$userdonations->amount." </br> <b>Donation id  :  </b>".$userdonations->donation_id ;  
                                 }else {
                                  
                                 } 
                                 ?></h5>
                        </a>

                        <?php 
                                if(!empty($userdonations->amount)){
                                  echo "<img src='../public/thankyou.jpg'  class ='' >" ;   
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <!-- <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div> -->
                </div></br>
@endforeach 
<!-- <another post2> -->
  @foreach($userrequestmoney as $userrequestmoneys)
        

                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($userrequestmoneys->image)){
                                 echo "<img src='../public/account/{$userrequestmoneys->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                                   
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">
                                      <?php 
                                if(!empty($userrequestmoneys->amount)){
                                 echo $userrequestmoneys->name ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                    <div class="h7 text-muted"> 
                                       <?php 
                                if(!empty($userrequestmoneys->amount)){
                                 echo $userrequestmoneys->city ;  
                                 }else {
                                  
                                 } 
                                 ?>
                                   
                                 </div>
                                </div>
                            </div>
                            <div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 
                           <?php 
                                if(!empty($userrequestmoneys->amount)){
                                 echo $userrequestmoneys->created_at ;  
                                 }else {
                                  
                                 } 
                                 ?>
                               </div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"><?php 
                                if(!empty($userrequestmoneys->amount)){
                               echo "<b> Yoo , Your Money Request Is Approved </b> "." </br> <b>You Received Money From Smile Help Foundation  :  </b> ₹ ".$userrequestmoneys->amount ;  
                                 }else {
                                  
                                 } 
                                 ?></h5>
                        </a>

                        <?php 
                                if(!empty($userrequestmoneys->amount)){
                                echo "<img src='../public/congratulation.jpeg'  class ='' >" ; 
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <!-- <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div> -->
                </div></br>
@endforeach 


                <!-- Post /////-->
              </div></br>
</br>

                <div class="tab-pane " id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                       
                            <h6>About</h6>
                           
<div class="card">
  <div class="card-body">
    <p>
                                <?php 
                                if(!empty($profile->about)){
                                 echo $profile->about ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?>
                            </p>

  </div>
</div></br>
                            

                            <h6>Hobbies</h6>

<div class="card">
  <div class="card-body">
  <p>
                           <?php 
                                if(!empty($profile->hobbie)){
                                 echo $profile->hobbie ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?> </p>
  </div>
</div></br>
                            <h6>Favorite Quotes</h6>

<div class="card">
  <div class="card-body">
  <p>
                           <?php 
                                if(!empty($profile->quote)){
                                 echo $profile->quote ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?> </p>
  </div>
</div>
                            

                        </div>
                        <div class="col-md-6">
                             <h6>Place</h6>

<div class="card">
  <div class="card-body">
  <p>
                           <?php 
                                if(!empty($profile->city)){
                                 echo $profile->city ."</br>" ;
                                  echo $profile->country ;  
                                 }else {
                                  echo " Smile.." ;
                                 } 
                                 ?> </p>
  </div>
</div></br>
<hr>
                               <h6>Recent badges</h6>
                            <a href="javascript:void();" class="badge badge-success badge-pill">Be Happy</a>
                            <a href="javascript:void();" class="badge badge-success badge-pill">Help To Others</a>
                            <a href="javascript:void();" class="badge badge-success badge-pill">Smile Always</a>
                            <a href="javascript:void();" class="badge badge-success badge-pill">Donate Money</a>
                            <a href="javascript:void();" class="badge badge-success badge-pill">Take Money If You Need</a>
                           
                            <hr>

 </br>
                              <h6>People Times</h6>

                           <span class="badge badge-success"> {{$donatecu}} Total Donation Times</span></br>
                            <span class="badge badge-success"> {{$requestcu}} Total Request Money Times</span>
                        
                     <!--    <div class="col-md-12">
                         </br>
                              <h6>People Times</h6>


            <div class="card border-success ">
                
                <div class="text-success text-center mt-3"><h4>Total Donation Times</h4></div>
                <div class="text-success text-center mt-2"><h1>9332</h1></div>
            </div>
       
       
            <div class="card border-success ">
                
                <div class="text-success text-center mt-3"><h4>Total Request Money Times </h4></div>
                <div class="text-success text-center mt-2"><h1>346</h1></div>
            </div>
        
</br> 


                     </div> -->
                   </div>

                        <div class="col-md-12">

                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>
                                              <?php 
                                if(!empty($profile->activity1 || $profile->activity2)){
                                 echo $profile->activity1 ; 
                                 }else {
                                  echo " There Is No Recent Activity" ;
                                 } 
                                 ?>


                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                              <?php 
                                if(!empty($profile->activity1 || $profile->activity2)){
                                 echo $profile->activity2 ; 
                                 }else {
                                  echo " There Is No Recent Activity" ;
                                 } 
                                 ?>


                                            </strong>
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
 
<div class="container">
  <h5>Gallery</h5>
  <div class="card">
    
@if($userpostcount==0)

<p>There Is No Image!</p>

@endif



  <div class="row">

@foreach($userpost as $userposts)
        

    <div class="col-lg-3 col-md-4 col-sm-3" data-toggle="modal" data-target="#modal{{$userposts->pid}}">
      <a href="#lightbox{{$userposts->pid}}" data-slide-to="0"><img src="../public/account/{{$userposts->post_image}}" class="img-thumbnail my-3"></a>
    </div>


<div class="modal fade" id="modal{{$userposts->pid}}" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="lightbox{{$userposts->pid}}" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
          <ol class="carousel-indicators">

            <li data-target="#lightbox{{$userposts->pid}}" data-slide-to="0{{$userposts->pid}}"></li>
      
          </ol>
          <div class="carousel-inner">


            <div class="carousel-item active"><img src="../public/account/{{$userposts->post_image}}" class="w-100"
               alt="">
             </div>
            
        
          </div>
          <a class="carousel-control-prev" href="#lightbox{{$userposts->pid}}" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
          <a class="carousel-control-next" href="#lightbox{{$userposts->pid}}" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>
      </div>
    </div>
  </div>
</div>


@endforeach


  </div>
</div>
</div>
<!-- Modal -->
                    </div>
                    <!--/row-->
                </div>
                
                
            </div>
        </div>
      </div>
      </div>
        
    </div>
</div>
        </section>


 
    <!--================Blog Area =================-->

@endsection