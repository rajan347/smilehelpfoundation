@extends('layouts.header')
@section('content')
    <!-- Header part end-->
<style type="text/css">
     .causeimg{
    width: 350px;
    height: 230px;
 }
</style>
     <!-- breadcrumb start-->
     <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>causes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::passion part start::-->
    <section class="passion_part passion_section_padding">
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
@foreach($cause as $causes)
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                            <img src="public/account/{{$causes->img}}" class="card-img-top causeimg" alt="causes">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title">{{$causes->heading}} </h5>
                                </a>
                                <!-- <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">75%</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><img src="{{ asset('public/img/icon/passion_1.svg')}}" alt=""> Goal: $2500</li>
                                    <li><img src="{{ asset('public/img/icon/passion_2.svg')}}" alt=""> Raised: $1533</li>
                                </ul>
                                <a href="#" class="btn_3">read more</a> -->
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    <!--::passion part end::-->

    <!--::our client part end::-->

@endsection