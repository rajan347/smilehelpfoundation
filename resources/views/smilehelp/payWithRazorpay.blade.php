@extends('layouts.header')
@section('content')
    <!-- Header part end-->
<style type="text/css">
.razorpay-payment-button    
{
background-color: #26b538!important;
padding: 15px !important;
font-size: 20px !important;
border-radius: 10px !important;

}

</style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Payment</h2>
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
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
            <div class="panel panel-default">
               


                <div class="panel-body text-center">
                    <form action="{!!route('payment')!!}" method="POST" >

                        <!-- Note that the amount is in paise = 50 INR -->
                        <!--amount need to be in paisa-->
                      <input type="number" name="" class="form-control" value="<?php echo $amount ?>" readonly>
</br>
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                               data-key="{{ Config::get('custom.razor_key') }}"
                                data-amount='<?php echo $amount*100 ?>'
                                data-buttontext="Pay"
                                data-name="Smile Help Foundation"
                                data-description="Order Value"
                                data-image="public/img/lo.png"
                                data-prefill.name="name"
                                data-prefill.email="email"
                                data-theme.color="#26b538">
                        </script>
 <input type="hidden" class="form-control" name="uid"   placeholder="" id="" value="<?php  echo $a = (!empty(auth()->user()->id))? auth()->user()->id: 0;?>">
  <input type="hidden" class="form-control" name="donation_id"   placeholder="" id="" value="<?php echo uniqid();?>">



                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
        
    </section>
    <!-- feature_part start-->

    <!-- top_service part start-->
    
    <!-- top_service part end-->

    <!-- counter part start-->
   
    <!-- counter part end-->

    <!--::our client part start::-->
    <!--::our client part end::-->
@endsection