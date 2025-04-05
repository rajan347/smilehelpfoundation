<!DOCTYPE html>
<html>
<style type="text/css">
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: auto !important;
    right: 15px !important;
}
 .genric-btn {
    line-height: 25px !important;
}
@media only screen and (max-width: 600px) {
    .genric-btn {
    line-height: 10px !important;
}
}
    .gaadiex-list{

        border-bottom: 1px solid #41bc3f;
    }
  .gaadiex-list-item {

    margin: 14px;
    display: block;
    }
    .fiximg{
        width: 50px;
        height: 50px;
    }
.logout{
   
    display:none ;
}
@media only screen and (max-width: 600px) {
  .logout{
   
    display:block !important;
}
}

.bt{
    padding: 5px;
background-color: red;
color: white;
}
</style>
 <?php 
 if(!empty(auth()->user()->id))
{

    $user = AUTH::user();
        

        $profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$user->id)
        ->first();



        $profilev = DB::table('profilev')
        ->join('profile', 'profile.user_id', '=', 'profilev.uid')
        ->join('users', 'users.id', '=', 'profilev.uid')
        ->select('profilev.*','profile.*','profile.firstname as uname','users.name as username')
        
        ->where('profilev.clickuid','=',$user->id)
        ->orderBy('profilev.id','desc')
        //->where('profilev.noti','=',0)
        ->get();

        $profileview = DB::table('profilev')
        ->where('profilev.noti','=',0)
        ->where('profilev.clickuid','=',$user->id)
        ->get();
$profilevc=count($profileview);

}


  ?> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smile Help Foundation : non-governmental organization,Helping the Poor | Donate to Help The Poor - Food For The Poor,Helping People in Need,Helping others,Best NGO in India,Top Ngos In India,Ngo Committed to help,</title>
    <META name="DESCRIPTION" content="smile help foundation,smilehelpfoundation,non-governmental organization,Helping the Poor | Donate to Help The Poor - Food For The Poor,Helping People in Need,Helping others,Best NGO in India,Top Ngos In India,Ngo Committed to help,">
    <META name="KEYWORDS" content="smilehelpfoundation,smile help foundation,non-governmental organization,Helping the Poor | Donate to Help The Poor - Food For The Poor,Helping People in Need,Helping others,Best NGO in India,Top Ngos In India,Ngo Committed to help,">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('public/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">
     <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="{{asset('public/assets/addchat/css/addchat.min.css')}}" rel="stylesheet">

    <style type="text/css">
    .notic{
    padding: 3px;
    background-color: white;
    position: absolute;
    color: #41bc3f;
    margin-top: -5px;
    margin-left: -12px;
    font-size: 12px;
    border-radius: 50px;
        }
        .banner_part .banner_text .btn_2 {
    margin-top: 20px !important;
    width: 200px !important;
}
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
background-color: #26b538 !important;
        }

.bg-primary {
    background-color: #26b538!important;
}
#addchat-bot .c-messages .c-message .c-timestamp, #addchat-bot-admin .c-messages .c-message .c-timestamp
{
    display:none !important;
}
#addchat-bot a, #addchat-bot-admin a{
    display:none !important;
}
#addchat-bot .c-contacts .c-contact .c-image, #addchat-bot .c-contacts .c-group .c-image, #addchat-bot .c-groups .c-contact .c-image, #addchat-bot .c-groups .c-group .c-image, #addchat-bot-admin .c-contacts .c-contact .c-image, #addchat-bot-admin .c-contacts .c-group .c-image, #addchat-bot-admin .c-groups .c-contact .c-image, #addchat-bot-admin .c-groups .c-group .c-image{
    display:none !important;
}
#addchat-bot p.c-subtitle, #addchat-bot span.c-subtitle, #addchat-bot-admin p.c-subtitle, #addchat-bot-admin span.c-subtitle{
    padding-left:15px !important;
}
#addchat-bot .c-buddy .c-buddy-image .c-image, #addchat-bot-admin .c-buddy .c-buddy-image .c-image{
    display:none !important;
}
#addchat-bot{

   font-family: 'FontAwesome'; 
}

@media (max-width: 576px){
.banner_part .banner_text h1 {
    font-size: 20px !important;
    margin-top: 45px !important;
    /* margin-bottom: 15px; */
    line-height: 1.3 !important;
}
}
@media (max-width: 576px){
.formsearch {
        display: -webkit-inline-box;
    flex-flow: unset;
    width: 150px;
    
}
}
@media (max-width: 991px){
.banner_part .banner_text {
    text-align: center;
    padding-top: 0px;
    height: 718px !important;
    margin-top: 42px !important;
    }
}

.main_menu .main-menu-item ul li .nav-link {
    font-weight: bolder;
    }
.main_menu .main-menu-item ul li .nav-link:hover {
    color: black;
}    
    </style>
</head>

<body>
    <div id="addchat_app"  data-baseurl="{{ url('') }}"  data-csrfname="{{'X-CSRF-Token' }}"  data-csrftoken="{{ csrf_token() }}" ></div>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="
    background-color: #41bc3f;
">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">

                                     <?php if(!empty(auth()->user()->id)){ ?>
                     <?php 
                                if(!empty($profile->image)){?>
                                 <a class='navbar-brand' href="{{route('myaccount')}}"> <img src='public/account/{{$profile->image}}' style='width:80px; height
                                 :80px; border-radius:50%; border: 1px solid #26b538; ' alt='user profile..' ></a>   
                                <?php } else  { ?>
                                   <a class='navbar-brand' href="{{route('myaccount')}}"> <img src='https://bootdey.com/img/Content/avatar/avatar7.png' style='width:80px; height
                                 :80px;border-radius:50%; border: 1px solid #26b538;'  alt='user avatar'></a>

                                <?php } 
                                 ?>
                        
                    <?php }else{ ?>
                        <a class="navbar-brand" href="{{route('index')}}"> <img src="{{ asset('public/img/lo.png')}}" alt="logo"> </a>
                     <?php } ?> 


                       <?php if(!empty(auth()->user()->id)){ ?>
                    
<form class="form-inline active-cyan-4 formsearch"  action="{{route('search-user')}}" method="get" >
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search.."
    aria-label="Search" name="search" required>
  <button type="submit" class="btn "><i class="fa fa-search" aria-hidden="true" style="color: white;"></i></button>
</form>
        
                       
                    <?php }else{ ?>
                      
                     <?php } ?> 




                


                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('causes')}}">causes</a>
                                </li>
                                 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{route('blog')}}">blog</a>
                                        <a class="dropdown-item" href="{{route('member')}}">Member</a>
                                    </div>
                                </li>

     <?php if(!empty(auth()->user()->id)){ ?>
                    
<li class="nav-item dropdown">
                                    <a class="nav-link" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell" style="font-size:25px;color:red" id="count"><span class="count notic"><b>{{$profilevc}}</b></span></i>
                                    </a>

                                    <div class="dropdown-menu profileview" aria-labelledby="navbarDropdown_2">
 @foreach($profilev as $profilevs)
                                        <a class="dropdown-item profileview" href="{{ url('user-profile/'.$profilevs->uid) }}"><b>{{$profilevs->username}}</b> Has view Your Profile. &nbsp;<i class="fa fa-clock-o" style="font-size:15px"></i>&nbsp;{{$profilevs->date}}</a>
 @endforeach                              
                                    </div>
                                      
                                   


                                </li>

                     <li class="nav-item">
                       <a href="{{route('myaccount')}}" class="genric-btn success-border circle arrow"><?php echo ucfirst(auth()->user()->name);?><span
                        class="lnr lnr-arrow-right"></span></a>
                     </li>
                                             
                    <?php }else{ ?>
                         <li class="nav-item">
                            <a href="{{route('signup-login')}}" class="genric-btn success-border circle arrow">Login<span
                        class="lnr lnr-arrow-right"></span></a>
                                    
                                </li>
                     
                     <?php } ?> 


<?php if(!empty(auth()->user()->id)){ ?>

<li class="nav-item"><div class="card-footer text-center logout" style="background-color:#26b538 ">

                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:18px;color:white; ">Logout</i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                
                 
               </div></li>
   <?php } ?>

               

                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    @yield('content')

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-3 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="{{route('index')}}">
                             <!-- <h1 style="color: #26b538">SMILE HELP FOUNDATION</h1> -->
                           <a class="navbar-brand" href="{{route('index')}}"> <img src="{{ asset('public/img/smilelogo.png')}}" alt="logo" style="height: 160px"> </a>
                          </a>
                      </br>
                        <p>Smile Help Foundation is a non-profit, that raises funds to help all people in India who needs it. The purpose of the Smile Help Foundation is to dealing with the foods , medicine , clothes , education etc.. 
                            </p>
                    </div>
                </div>
                
                <div class="col-sm-3 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Important Link</h4>
                                    <a class="" href="{{route('about')}}"><p>about</p></a>
                                   <a class="" href="{{route('blog')}}"><p>blog</p></a>
                                  <a class="" href="{{route('causes')}}"><p>Donation Causes</p></a>
                                 <a class="" href=""><p>Events</p></a>
                                  <a class="" href="{{route('member')}}"><p>Member</p></a>
                                
                        
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest news.</p>
                        <div class="form-wrap" id="">
                            <form 
                                action="{{route('news')}}"
                                method="get" class="form-inline">
                                <input class="form-control" name="email" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase" type="submit"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="" tabindex="" value=""
                                        type="submit">
                                </div>

                                <div class="info"></div>
 @if(session()->has('message'))

        <div class="alert alert-success">
        {{ session()->get('message') }}
         </div>
         
@endif
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-sm-3 col-md-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <p>3rd main road,jayanagar 1st block,bairasandra extension,jayanagar, Bengaluru, Karnataka - 560011</p>
                        <div class="contact_info">
                           <!--  <a href="tel:+918792126994"><p><span class="ti-mobile"></span>(+91) 8792126994</p> </a>
                            --> <a href="mailto:info@smilehelpfoundation.com"><p><span class="ti-email"></span>info@smilehelpfoundation.com </p></a>
                            <!-- <a href="mailto:rajanku347@gmail.com"><p><span class="ti-email"></span>rajanku347@gmail.com</p></a> -->
                                  <a href="https://m.facebook.com/smilehelpfoundation"><i class="fa fa-facebook-square" style="font-family: 'FontAwesome'; font-size: 45px; color: #26b538" >&nbsp;</i></a>
      <a href="https://twitter.com/smilehelpfound1"><i class="fa fa-twitter-square" style="font-family: 'FontAwesome'; font-size: 50px;color: #26b538">&nbsp;</i></a>
      
       <a href=""><i class="fa fa-instagram" style="font-family: 'FontAwesome'; font-size: 55px; color: #26b538" >&nbsp;</i></a>
            
      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://smilehelpfoundation.com/AeronauIT" target="_blank">AeronauIT</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{ asset('public/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('public/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{ asset('public/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('public/js/swiper.min.js')}}"></script>
    <script src="{{ asset('public/js/wow.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery.smooth-scroll.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('public/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{ asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('public/js/slick.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('public/js/waypoints.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{ asset('public/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery.form.js')}}"></script>
    <script src="{{ asset('public/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('public/js/mail-script.js')}}"></script>
    <script src="{{ asset('public/js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('public/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
        <!--<script src="{{ asset('public/js/main.js')}}"></script>-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="module" src="{{asset('public/assets/addchat/js/addchat.min.js') }}"></script>
<script nomodule src="{{asset('public/assets/addchat/js/addchat-legacy.min.js') }}"></script>
    <script>

            // Replace the <textarea id="editor1"> with a CKEditor
  </script>
          <script>
  $(document).ready(function(){
    $("#myModal2").modal();
   
});    
 </script>
 <script type="text/javascript">
 $(".profileview").hover(function(){
  $(this).css("background-color", "yellow");
  
cid = 1;
        //alert(cid);
      $.ajax({
        type:'POST',
        url:"{{ url('profile-view-noti')}}",
        data:{_token : '<?php echo csrf_token(); ?>',cid:cid},
        success:function(data) {
            $("#doctor").html(data);
        }
      });





});   

</script>

            @yield('script')
</body>

</html>
