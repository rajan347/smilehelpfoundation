@extends('layouts.header')
@section('content')
    <!-- Header part end-->
<style type="text/css">
.be_part {
    position: relative;
    z-index: 99;
    background-image: url("public/account/smile2.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 140px 0 180px;
}
</style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section_tittle text-center">
                        <p>Awesome Feature</p>
                        <h2>How Could You Help </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                
                                <h4>Our Mission</h4>
                            </div>
                            <p>Our Mission is Provide relief and support to needy families and victims of fire.Distribute food and clothing to persons in need.Help persons become self-sufficient.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                               
                                <h4>Our Vision</h4>
                            </div>
                            <p>Our vision is to help each person, no matter what challenges he or she faces, to achieve success and thereby enrich not only his or her own life, but also the community in which we live, work and raise our families.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                              <!--   <img src="{{ asset('public/img/icon/feature_2.svg')}}" alt=""> -->
                                <h4>Our Approach</h4>
                            </div>
                            <p>Our approach is to help those who are suffering from the quality of life by helping them to discover choices that will lead to better life. </p>
                        </div>
                    </div>
                </div>


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

    <!--::our client part start::-->
    <section class="client_part section_padding">
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
@endsection