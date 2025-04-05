@extends('layouts.header')
@section('content')

    <!-- Header part end-->
    <style type="text/css">body {background:#e2e2e2;}
/********card frame **************/

@media (max-width: 360px){
 .card-body{
   
    padding: 0.2rem !important;
}

}
.logout1{
   
    display:none ;
}
@media (min-width: 1360px){
 .logout1{
   
    display:block !important;
}

}


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
    margin-top: 6px;
    margin-bottom: 8px;
    margin-right: 20px;
    border-radius: 50%;
}
.border-b-1 {border-bottom: 1px solid rgba(162,162,162,.16);}
.imgtop{
        margin-top: -33px;
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
                            <h2> Hello <?php 
                                if(!empty($user->name)){
                                 echo $user->name ;  
                                 }else {
                                  
                                 } 
                                 ?></h2></br>
                                 <h3 style="color: #26b538;font-weight: bold;"> Welcome To Smile Help Foundation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
        @if(session()->has('messageupdatep'))
<div class="card-body">
    
    <div class="alert alert-danger">
        {{ session()->get('messageupdatep') }}
    </div>
    </div>

@endif

                               
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
                                 echo "<img src='public/loo.png' style='width:45px; height
                                 :35px; border-radius:;' alt='member' >" ;  
                                 }else {
                                  echo "" ;
                                 } 
                                 ?></p>
<?php 
                                if(!empty($profile->image)){
                                 echo "<img src='public/account/{$profile->image}' style='width:300px; height
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
                    <span><i class="fa fa-phone-square" style="color:#26b538"></i></span>
                    <span><?php 
                                if(!empty($profile->phone)){
                                 echo $profile->phone ;  
                                 }else {
                                  echo " XXXXXXXXXX" ;
                                 } 
                                 ?></span>
                    <small>Mobile Number</small>
                  </div>
                </li>
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
               <div class="card-footer text-center logout1" style="background-color:#26b538 ">

                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:18px;color:white; ">Logout</i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                
                 
               </div>
             </br>
               <div class="card-footer text-center" style="background-color:#26b538 ">
<button type="button" class="btn btn-light" id="btnpoints99">Change password</button>
              
                <form class="" action="{{url('updatepassword')}}" method="post" id="rewards99" >
                              @csrf
                                                      <input type="hidden" class="form-control" name="uid" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">
                             
                                                    <label> New Password</label>
                                                    <input type="password" name="password" value="" required>
                                                   
                                                    <div class="save_button primary_btn default_button">
                                                        <button type="submit" class="btn btn-light">Update Password</button>
                                                    </div>
                                                </form>

                
                 
               </div></br>
              
               
             </div></br>
              <div class="card" style="">
                 <div class="card-header">
                    <h4>Your Nearest Friend </h4>
                </div>
@if($nfrndtotal==0)

<p>There Is No Nearest Friend!</p>

@endif



 @foreach($nfrnd as $nfrnds)
                       
                    <div class="gaadiex-list">
                      <div class="gaadiex-list-item">
                          <i class="">
                              
<?php 
                                if(!empty($nfrnds->image)){
                                 echo "<img src='public/account/{$nfrnds->image}' class='rounded-circle imgtop fiximg' width='' alt='user profile..' >" ;  
                                 }else {
                                  echo "  <img src='https://bootdey.com/img/Content/avatar/avatar7.png' class='rounded-circle imgtop fiximg' width='' alt='user avatar'>
" ;
                                 } 
                                 ?>
                          </i>
                      <div class="gaadiex-list-item-text">
                        <h3><a href="{{ url('user-profile/'.$nfrnds->user_id) }}">{{$nfrnds->name}}</a> </h3>
                        <h4>{{$nfrnds->city}}</h4>
                     <!--    <p> {{$nfrnds->about}}</p> -->

                      </div>
                    </div>
                     </div>
@endforeach


            </div></br>
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
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#rating" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs"> Won Heart </span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit profile</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a href="javascript:void();" data-target="#Password" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Change Password</span></a>
                </li> -->
            </ul>
            <div class="tab-content p-3 ">

                <div class="tab-pane active show" id="home">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Publish
                                    a post</a>
                            </li>

                            
                        </ul>

                    </div>
                    
                            <form action="{{route('userpost')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      
                    <div class="card-body">
                      <p style="color: #26b538"><i class="fa fa-check-circle-o" aria-hidden="true" style="font-family: 'FontAwesome';color: #26b538;font-weight: bold;"></i>&nbsp; Upload Posts Only With Smile Picture!</p>
                      <p style="color: #26b538"><i class="fa fa-check-circle-o" aria-hidden="true" style="font-family: 'FontAwesome';color: #26b538;font-weight: bold;"></i>&nbsp; Upload Posts Only When You Help Someone!</p>
                        <div class="tab-content" id="myTabContent">
                         <!--  <p style="color: #26b538"><i class="fa fa-check-circle-o" aria-hidden="true" style="color: #26b538;font-weight: bold;"></i>&nbsp; Upload Posts Only When You Give Donation!</p>
                          <p style="color: #26b538"><i class="fa fa-check-circle-o" aria-hidden="true" style="color: #26b538;font-weight: bold;"></i>&nbsp; Upload Posts Only When You Got Money From This Website!</p> -->
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                       <input type="hidden" class="form-control" name="uid"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">

                      <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" name="heading" placeholder="What are you thinking?" required></textarea>
                                </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>

                                
                            </div>
                            
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn_2">share</button>
                            </div>
                            <!-- <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    </form>
                </div></br>
                <!-- Post /////-->
    @if(session()->has('message'))
<div class="card-body">
    
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    </div>

@endif
    @if(session()->has('messageaddpost'))
<div class="card-body">
    
    <div class="alert alert-success">
        {{ session()->get('messageaddpost') }}
    </div>
    </div>

@endif
   @if(session()->has('messageup'))
<div class="card-body">
    
    <div class="alert alert-success">
        {{ session()->get('messageup') }}
    </div>
    </div>

@endif
                <!--- \\\\\\\Post-->
@foreach($userpost as $userposts)
        

                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($profile->image)){
                                 echo "<img src='public/account/{$profile->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
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
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header"></div>
                                        <a class="dropdown-item" href="{{ url('delete-post/'.$userposts->pid) }}">Delete</a>
                                       
                                    </div>
                                </div>
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
                                 echo "<img src='public/account/{$userposts->post_image}'  class ='' >" ;  
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                       <!--  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    -->
                    </div>
                </div></br>
@endforeach 
<!-- //another post -->
@foreach($userdonation as $userdonations)
        

                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($userdonations->image)){
                                 echo "<img src='public/account/{$userdonations->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
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
                                <!-- <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header"></div>
                                        <a class="dropdown-item" href="{{ url('delete-post/'.$userposts->pid) }}">Delete</a>
                                       
                                    </div>
                                </div> -->
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
                                 echo "<img src='public/thankyou.jpg'  class ='' >" ;  
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <div class="card-footer">
                        <!-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> -->
                       <!--  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    -->
                    </div>
                </div></br>
@endforeach 
<!-- //another2nd post -->
 @foreach($userrequestmoney as $userrequestmoneys)
        

                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
<?php 
                                if(!empty($userrequestmoneys->image)){
                                 echo "<img src='public/account/{$userrequestmoneys->image}' class='rounded-circle fiximg' width='' alt='user profile..' >" ;  
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
                                <!-- <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header"></div>
                                        <a class="dropdown-item" href="{{ url('delete-post/'.$userposts->pid) }}">Delete</a>
                                       
                                    </div>
                                </div> -->
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
                                if(!empty($userdonations->amount)){
                                 echo "<b> Yoo , Your Money Request Is Approved </b> "." </br> <b>You Received Money From Smile Help Foundation  :  </b> ₹ ".$userrequestmoneys->amount ; 
                                 }else {
                                  
                                 } 
                                 ?></h5>
                        </a>

                        <?php 
                                if(!empty($userrequestmoneys->amount)){
                                 echo "<img src='public/congratulation.jpeg'  class ='' >" ;  
                                 }else {
                                  
                                 } 
                                 ?>
                        
                    </div>
                    <div class="card-footer">
                        <!-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> -->
                       <!--  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    -->
                    </div>
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
                        
                          <!--   <div class="col-md-12">
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
                        </div> <hr>
                    </br>
 
                            </br>
                     

                  
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
      <a href="#lightbox{{$userposts->pid}}" data-slide-to="0"><img src="public/account/{{$userposts->post_image}}" class="img-thumbnail my-3"></a>
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


            <div class="carousel-item active"><img src="public/account/{{$userposts->post_image}}" class="w-100"
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
                <div class="tab-pane" id="rating">
                    
                    <table class="table table-hover table-striped">
                        <tbody>     
@foreach($wonheart as $wonhearts)                                                       
                            <tr>

                                <td>
                                   <span class="float-left font-weight-bold"><i class="fa fa-check-circle-o" aria-hidden="true" style="font-family: 'FontAwesome';color: #26b538;font-weight: bold;"></i></span>&nbsp;&nbsp;{{$wonhearts->wonheart}}
                                </td>

                            </tr>
 @endforeach                           
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <form action="{{route('edituserinfo')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" class="form-control" name="id"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="fname"  value="<?php 
                                if(!empty($profile->firstname)){
                                 echo $profile->firstname ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="lname" value="<?php 
                                if(!empty($profile->lastname)){
                                 echo $profile->lastname ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Birth Date</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="dob" value="<?php 
                                if(!empty($profile->birthdate)){
                                 echo $profile->birthdate ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">About</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  name="about" value="<?php 
                                if(!empty($profile->about)){
                                 echo $profile->about ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Hobbie</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="hobbie" value="<?php 
                                if(!empty($profile->hobbie)){
                                 echo $profile->hobbie ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Favorite Quotes</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="quote" value=" <?php 
                                if(!empty($profile->quote)){
                                 echo $profile->quote ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Recent Activity 1</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="activity1" value=" <?php 
                                if(!empty($profile->activity1)){
                                 echo $profile->activity1 ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Recent Activity 2</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="activity2" value=" <?php 
                                if(!empty($profile->activity2)){
                                 echo $profile->activity2 ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" value="<?php 
                                if(!empty($profile->email)){
                                 echo $profile->email ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" name="phone" value="<?php 
                                if(!empty($profile->phone)){
                                 echo $profile->phone ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Google Pay Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" name="googlepay" value="<?php 
                                if(!empty($profile->googlepay)){
                                 echo $profile->googlepay ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone Pay Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" name="phonepay" value="<?php 
                                if(!empty($profile->phonepay)){
                                 echo $profile->phonepay ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Paytm Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" name="paytm" value="<?php 
                                if(!empty($profile->paytm)){
                                 echo $profile->paytm ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="image">
                                 <?php if(!empty($profile->image)){ ?>
                                 <img src="public/account/{{$profile->image}}" alt="user profile.." width="50px" height="50px">
                              <?php }
                                 else{ ?>
                                 <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user profile.." width="50px" height="50px">
                                 <?php } ?>


                       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Website</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url"  name="url" value="<?php 
                                if(!empty($profile->website)){
                                 echo $profile->website ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Facebook link</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url"  name="furl" value="<?php 
                                if(!empty($profile->facebook)){
                                 echo $profile->facebook ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Instagram Link</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url"  name="iurl" value="<?php 
                                if(!empty($profile->instagram)){
                                 echo $profile->instagram ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Twitter Link</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url"  name="turl" value="<?php 
                                if(!empty($profile->twitter)){
                                 echo $profile->twitter ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  name="address" value="<?php 
                                if(!empty($profile->address)){
                                 echo $profile->address ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="<?php 
                                if(!empty($profile->city)){
                                 echo $profile->city ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>" name="city" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="<?php 
                                if(!empty($profile->postalcode)){
                                 echo $profile->postalcode ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>" name="postalcode" placeholder="postal code">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="<?php 
                                if(!empty($profile->country)){
                                 echo $profile->country ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>" name="country" placeholder="country">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="username" value="<?php 
                                if(!empty($user->name)){
                                 echo $user->name ;  
                                 }else {
                                  echo " " ;
                                 } 
                                 ?>">
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                               <input type="submit" class="btn btn_2" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
</div>
        </section>


 
    <!--================Blog Area =================-->
@endsection('content')
@section('script')

<script type="text/javascript">

    $(document).ready(function(){
        $("#rewards99").hide();
        $("#btnpoints99").click(function(e) {
            $("#rewards99").show();
            $("#btnpoints99").hide();

        });
    });
</script>

@endsection