
@extends('layouts.header')
@section('content')
   <!-- breadcrumb start-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Member</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::volunteers_part start::-->
    <section class="volunteers_part padding_top single_page_volunteers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>All Member</p>
                        <h2>Our Humble Members</h2>
                    </div>
                </div>
            </div>
<?php
$memberc = DB::table('member')
         ->join('profile', 'profile.user_id', '=', 'member.uid')
         ->join('users', 'users.id', '=', 'member.uid')
        ->select('member.*','profile.*','users.name as uname')
        ->where('member.member','=',11)
         
         //->orderBy('post.id','desc')
        ->count();

        if ($memberc==0) {
            echo "There Is No Any Members Now !";
        }

?>            
            <div class="row">

@foreach($member as $members)
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="public/account/{{$members->image}}" alt="member">
                            <div class="social_icon">
@if(!empty($members->facebook))
                                <a href="{{$members->facebook}}"> <i class="ti-facebook"></i> </a>
@endif
@if(!empty($members->twitter))
                                <a href="{{$members->twitter}}"> <i class="ti-twitter-alt"></i> </a>
@endif
@if(!empty($members->instagram))
                                <a href="{{$members->instagram}}"> <i class="ti-instagram"></i> </a>
@endif                                
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
  <?php if(!empty(auth()->user()->id)){ ?>
                               <a href="{{ url('user-profile/'.$members->uid) }}"> <h3>{{$members->uname}}</h3></a>
     <?php }else{ ?>                            
                                <a href="{{route('signup-login')}}"> <h3>{{$members->uname}}</h3></a>
     <?php } ?> 
                               <!-- <p>Project Manager</p> -->
                            </div>
                        </div>
                    </div>
                </div>
@endforeach

                                
            </div>
        </div>
    </section>
    <!--::volunteers_part end::-->
@endsection