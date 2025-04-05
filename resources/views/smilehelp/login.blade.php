@extends('layouts.header')
@section('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Signup / Login</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
   @if(session()->has('messager'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('messager') }}
    </div>
    </div>

@endif
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-5">
          <div class="col-12">
          <h2 class="contact-title">Login</h2>
        </div>
        <div class="card" style="">
  <div class="card-body">
          <form action="{{route('login')}}"  method="post">
    @csrf
  <h3><center><b>DONT YOU HAVE AN ACCOUNT ?</b></center></h3><hr>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" id="" required>
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" id="" required>
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
<div class="form-group">
  @if (Route::has('password.request'))
  <a href="{{ route('password.request') }}"><h4 style="float: right;color: red">{{ __('Forgot Your Password?') }}</h4></a>
  @endif
  <br>
  </div><br>
  <center><button type="submit" class="btn_2" style="    width: 100%;
    padding: 7px;
    
    
    border: none;
    font-size: 18px;">Login</button></center>
</form></br>
<!-- <center><div class="or-seperator"><i>or</i></div></center></br>
        <p class="text-center">Login with your social media account</p>
      </br>
        <div class="text-center social-btn">
            <a href="{{url('/facebook')}}"><i class="fa fa-facebook-square" style="font-size: 40px; color: #26b538" >&nbsp;</i></a>
            
      <a href=""><i class="fa fa-google-plus-square" style="font-size: 40px;color: #26b538">&nbsp;</i></a>
        </div> -->
</div>

</div>
                                   </div>


        <div class="col-lg-7">
          <div class="col-12">
          <h2 class="contact-title">Register</h2>
        </div>
  <div class="card" style="">
  <div class="card-body">
          <form action="{{route('storeuser')}}" method="post">
    @csrf
  <h3><center><b>Create Your Account</b></center></h3><hr>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name"   placeholder="Enter name" id="" required>
     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" id="" required>
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <!-- <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Phone" id="" required>
    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div> -->
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" id="" required>
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  
  <center><button type="submit" class="btn_2" style="    width: 100%;
    padding: 7px;
   
    border: none;
    font-size: 18px;">Sign Up</button></center>
</form>
</div>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection