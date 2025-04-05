@extends('layouts.header')
@section('content')
<?php
 $donate = DB::table('donate')
        ->select('donate.*')
        //->where('user_id','=',$user->id)
        ->get();
        $donatet = $donate->sum('amount');

//total help amount
 $helpa = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=','2')
        ->get();
        $helpat = $helpa->sum('amount');

//total help people
 $helpp = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=','2')
        ->count();
   

  $ourcauses = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(6)
        ->get();

        $blogs = DB::table('blogs')
        ->select('blogs.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(3)
        ->get();

        $partner = DB::table('partner')
        ->select('partner.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->get();
        
$howtohelp = DB::table('howtohelp')
        ->select('howtohelp.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(6)
        ->get();

        $banner = DB::table('banner')
        ->select('banner.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(6)
        ->first();

        $bannera = DB::table('banner')
        ->select('banner.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->skip(1)
        ->take(2)
        ->get();


 $userc = DB::table('users')
        ->select('users.*')
        //->where('status','=',2)
        ->count();
   

$leftat=$donatet-$helpat;
$quote = DB::table('quota')   
->select('quota.*')
->whereDay('date', date('d'))
//->where('date', Carbon::now()->format('d'))
->first();



?>
<style type="text/css">
.genric-btn.e-large {
  line-height: 20px;

}
.genric-btn.e-large {
    line-height: 20px;
    }
.be_part {
    position: relative;
    z-index: 99;
    background-image: url("public/account/smile2.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 140px 0 180px;
}
.intro_video_bg {
    background-image: url("public/account/member.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 480px;
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
}
 .modal-content {

    margin-top: 50% !important;
 }   
 .imgsize{
    height: 350px;
 }
 .causeimg{
    width: 350px;
    height: 230px;
 }
 .d-none {
    display: block !important;
}
.mt-0:hover{
    color: #fff;
}
</style>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Smile Help Foundation</h1>
                                 <h2 style="color: #26b538;font-weight: bold;">Bless others with
                                your gift</h2>
                           
                                  
                                  <?php if(!empty(auth()->user()->id)){ ?>
                                           <a href="{{route('total-donation')}}" class="btn_2 ">Total Donation Amount </br>₹ <span class="count">{{$donatet}}</span></a>
                        
                    <?php }else{ ?>
                           <a href="{{route('signup-login')}}" class="btn_2 ">Total Donation Amount </br>₹ <span class="count">{{$donatet}}</span></a> 
                     
                     <?php } ?>   
                     <a href="#" class="btn_2 ">Total Left Amount </br>₹ <span class="count">{{$leftat}}</span></a> 

                                  <?php if(!empty(auth()->user()->id)){ ?>
                       <a href="{{route('total-request')}}" class="btn_2 "> Total Helped People ({{$helpp}}) </br>₹<span class="count">{{$helpat}}</span></a>

                    <?php }else{ ?>
                         <a href="{{route('signup-login')}}" class="btn_2 "> Total Helped People ({{$helpp}})</br>₹<span class="count">{{$helpat}}</span></a>

                     
                     <?php } ?> 
                         
                             </br>
                            </br><p>
@if(!empty($quote->quota))
                                {{$quote->quota}}
@endif
                            </p>
                                
      <?php if(!empty(auth()->user()->id)){ ?>
                    <button type="button" class="btn_2" data-toggle="modal" data-target="#myModal" > Start Donation(₹5)</button></li>
                        
                    <?php }else{ ?>
                         <a href="{{route('signup-login')}}" class="btn_2">Start Donation (₹5)</a>
                     
                     <?php } ?> 
                            

                           
                                  <?php if(!empty(auth()->user()->id)){ ?>
                     <a href="{{route('request-money')}}" class="btn_2">Request For Money</a></li>
                        
                    <?php }else{ ?>
                        <a href="{{route('signup-login')}}" class="btn_2">Request For Money</a>
                        
                     
                     <?php } ?> 

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end-->

 <!-- banner part2 start-->
 <section class="feature_part">
        <div class="container">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol> -->

    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img src="public/account/{{$banner->img}}" class="d-block w-100 imgsize" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <div class="button-group-area mt-40">
                <p class="genric-btn primary e-large">{{$banner->heading}}</p>
            </div>
        </div>
      </div>
      @foreach($bannera as $banneras)
      <div class="carousel-item">
        <img src="public/account/{{$banneras->img}}" class="d-block w-100 imgsize" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <div class="button-group-area mt-40">
                <p class="genric-btn primary e-large">{{$banneras->heading}}</p>
            </div> </div>
      </div>
     @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</section>
 <!-- banner part2 end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Awesome Feature</p>
                        <h2>How Could You Help </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                   @foreach($howtohelp as $howtohelps)
                <div class="col-lg-5 col-sm-6">
                 
                    <div class="single_feature">


                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                
                                <h4>{!!$howtohelps->heading!!}</h4>
                            </div>
                            <p>{!!$howtohelps->subheading!!}</p>
                        </div>


                    </div>
                   
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- top_service part start-->
    <section class="be_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="be_part_text">
                        <h2>Be a part of the Smile Help Foundation and make someones
                            dream come true, Make People Happy</h2>
                        <p>Remember, if you ever need a helping hand, it's at the end of your arm, as you get older, remember you have another hand: The first is to help yourself, the second is to help others.</p>
                        <a href="#" class="btn_2">Help The People</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('public/img/Charity.jpg')}}" alt="" class="be_img">
    </section>
    <!-- top_service part end-->

    <!-- counter part start-->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_counter d-flex">
                        <img src="{{ asset('public/img/icon/feature_1.svg')}}" alt="">
                        <div class="single_counter_text">
                            <p>Total Collection</p>
                            <span class="count">{{$donatet}}</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="{{ asset('public/img/icon/feature_2.svg')}}" alt="">
                        <div class="single_counter_text">
                            <p>Helped People</p>
                            <span class="count">{{$helpp}}</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="{{ asset('public/img/icon/feature_3.svg')}}" alt="">
                        <div class="single_counter_text">
                            <p>Total Users</p>
                            <span class="count">{{$userc}}</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="{{ asset('public/img/icon/feature_4.svg')}}" alt="">
                        <div class="single_counter_text">
                            <p>Successed Mission</p>
                            <span class="count">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter part end-->

    <!--::passion part start::-->
    <section class="passion_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Donation shows Passion</p>
                        <h2>Featured causes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($ourcauses as $ourcauses)

                <div class="col-sm-6 col-lg-4 col-xl-4">


                    <div class="single-home-passion">
                        <div class="card">
                            <img src="public/account/{{$ourcauses->img}}" class="card-img-top causeimg" alt="causes">
                            <div class="card-body">

                                <a href="{{route('causes')}}">
                                    <h5 class="card-title">{{$ourcauses->heading}} </h5>
                                </a>
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">80%</span>
                                    </div>
                                </div>
                                
                                <a href="{{ url('ourcauses-details/'.$ourcauses->id) }}" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>


                </div>
 @endforeach               
            </div>
        </div>
    </section>
    <!--::passion part end::-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>Forget what you can get and
                            see what you can give</h2>
                        <a href="#" class="btn_2">Become a Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    <!--::blog_part start::-->
    <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 15px">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Our blog</p>
                        <h2>Every Single Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog">
                        <div class="appartment_img">
                            <img src="{{ asset('public/img/blog/help.jpg')}}" alt="">
                        </div>
                        <div class="single_appartment_content">
                            
                                <h4>There is no exercise better for the heart than reaching down and lifting people up.
                                </h4>
                           
                            <ul class="list-unstyled">
                                <li> <span class="flaticon-calendar"></span>  oct 10, 2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right_single_blog">
                       @foreach($blogs as $blog)
                        <div class="single_blog">


                            <div class="media">
                                <div class="media-body align-self-center">
                                    <h5><a href="{{route('blog')}}">{{$blog->heading}}</a></h5>
                                    <a href="{{route('blog')}}">
                                        <p class="mt-0">{{$blog->description}}</p>
                                    </a>
                                </br>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$blog->created_at}}</li>
                                    </ul>
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

    <!--::our client part start::-->
    <section class="client_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>OUr Client</p>
                        <h2>Worldwide Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo owl-carousel">
@foreach($partner as $partners)
                        <div class="single_client_logo">
                           <a href="{{$partners->link}}"> <img src="public/account/{{$partners->img}}" alt=""></a>
                        </div>

@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our client part end::-->
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h2>Apply For Donation</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
         <form action="{{route('paywithrazorpay')}}" method="post" enctype="multipart/form-data">
                      @csrf
                       <input type="number" class="form-control" name="amount"   placeholder="Enter Amount " id="" value="5" required>
<br>
  <input type="submit" class="btn_2" style="width: 100%" value="Submit">
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection('content')

@section('script')
@endsection