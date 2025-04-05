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
                            <h2>blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">


@foreach($blogs as $blog)

                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="public/account/{{$blog->image}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{$blog->created_at}}</h3>
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href=" {{ url('blogdetail/'.$blog->heading) }}">
                                    <h2>{{$blog->heading}}</h2>
                                </a>
                                <p>{{$blog->description}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i>{!!$blog->tags!!}</a></li>
                                    <!-- <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li> -->
                                </ul>
                            </div>
                        </article>


@endforeach
                       

                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
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
                                <img src="public/account/{{$blog->image}}" alt="post" width="80">
                                <div class="media-body">
                                    <a href="">
                                        <h3>{{$blog->heading}}</h3>
                                    </a>
                                    <p>{{$blog->created_at}}</p>
                                </div>
                            </div>

@endforeach
                            
                           
                        </aside>
                        

                        


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form  action="{{route('news')}}"
                                method="get" >
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
        @if(session()->has('message'))

    
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    

@endif
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection