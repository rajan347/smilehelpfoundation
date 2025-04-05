@extends('layouts.headeru')
@section('content')
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item text-center">
                     <h2>blog details</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="../public/account/{{$blogdetail->image}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$blogdetail->heading}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i>{!!$blogdetail->tags!!}</a></li>
                        
                     </ul>
                     <p class="excert">
                        {{$blogdetail->description}}
                     </p>
                     
                     <div class="quote-wrapper">
                        <div class="quotes">
                           {{$blogdetail->description2}}
                        </div>
                     </div>
                     <p>
                        {{$blogdetail->description3}}
                     </p>
                     
                  </div>
               </div>
               
               
               <!-- <div class="comments-area">
                  
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{ asset('public/img/comment/comment_1.png')}}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  
               </div> -->
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        
                     </div>
                     <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Send Message <i class="flaticon-right-arrow"></i> </button>
                      </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Causes</h4>
                            <ul class="list cat-list">

@foreach($ourcauses as $ourcause)
                                <li>
                                    <a href="{{route('causes')}}" class="d-flex">
                                        <p>{{$ourcause->heading}}</p>
                                        <!-- <p>(37)</p> -->
                                    </a>
                                </li>

@endforeach
                               
                            </ul>
                        </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
@foreach($blogs as $blog)

                            <div class="media post_item">
                                <img src="../public/account/{{$blog->image}}" alt="post" width="80">
                                <div class="media-body">
                                    <a href="">
                                        <h3>{{$blog->heading}}</h3>
                                    </a>
                                    <p>{{$blog->created_at}}</p>
                                </div>
                            </div>

@endforeach
                            
                           
                        </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tags</h4>
                     <ul class="list">
                        <li>
                           <a href="#">{!!$blogdetail->tags!!}</a>
                        </li>
                        
                     </ul>
                  </aside>
                  <!-- <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('public/img/post/post_5.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('public/img/post/post_6.png')}}" alt="">
                           </a>
                        </li>
                        
                     </ul>
                  </aside>
 -->                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

@endsection