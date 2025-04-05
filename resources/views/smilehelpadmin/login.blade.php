
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />
  <script>
      WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
         
                 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="ruffpageadmin/responsive.css" type="text/css" />
        <link rel="stylesheet" href="ruffpageadmin/bootstrap.css" type="text/css" />
        
         <link rel="stylesheet" href="ruffpageadmin/style.css" type="text/css" />
        
  <link rel="shortcut icon" href="" />
    <!-- <link href="assets/css/summernote.css" rel="stylesheet" type="text/css" /> -->
    <style>
      /* #m_ver_menu {*/
      /*  position:fixed;*/
      /*  height:100%;*/
      /*  width:250px;*/
      /*}*/
      /*@media screen and (min-width: 1025px) {
        .m-content {
          margin-left:20% !important;
        }
       }*/
       
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Login</title>

</head>

<body class="stretched">
  <div id="wrapper" class="clearfix">
    <section id="content">
      <div class="content-wrap nopadding">
        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background:radial-gradient(#3bc3f7, transparent); background-size: cover;"></div>
        <div class="section nobg full-screen nopadding nomargin">
          <div class="container-fluid vertical-middle divcenter clearfix">
            <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);margin-left: auto !important;
    margin-right: auto !important;
    top: 55%;
    position: relative;
    margin-top: 100px">
              <div class="card-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin" action="{{route('login')}}" method="POST">
                  @csrf
                  <h3>Login to your Account</h3>
                  <div class="col_full">
                    <input type="hidden" name="id">
                    <label for="login-form-username">Email:</label>
                    <input type="text" id="login-form-username inputEmail" name="email" value="" class="form-control not-dark @error('email') is-invalid @enderror" />
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="col_full">
                    <label for="login-form-password">Password:</label>
                    <input type="password" id="login-form-password inputPassword" name="password" value="" class="form-control not-dark @error('password') is-invalid @enderror" />
                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <br>
                  <div class="col_full nobottommargin" style="text-align:center">
                    <button class="button button-3d button-black nomargin btn-success" style="border:1px solid; border-radius:4px; padding: 5px 10px;" id="login-form-submit" name="login" value="login">Login</button>
                  </div>
                  
                  <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
                </form>
              </div>
            </div>
            <div class="center dark"><!-- <small>Copyrights &copy; All Rights Reserved by Canvas Inc.</small> --></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="gotoTop" class="icon-angle-up"></div>
  
</body>
</html>