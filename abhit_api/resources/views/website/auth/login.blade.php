<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>User | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('asset_website/img/favicon.png')}}" rel="icon">
    <link href="asset_website/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('asset_website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/css/responsive.css')}}" rel="stylesheet">

    <link href="{{asset('asset_website/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/svg/icomoon/style.css')}}" rel="stylesheet">
    
</head>

<body>


    <section class="login-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="login-div">
                        <div class="login-logo"><img src="{{asset('asset_website/img/home/logo.png')}}" class="w100"></div>

                        <a onclick="goBack()" class="page-close"><span class="icon-cancel-30"></span></a>
                        <div class="login-cover">
                            <ul class="nav nav-tabs login-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Log In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign Up</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form class="row" action="">
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Name" id="name1">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Phone Number" id="p_number1">
                                        </div>

                                        <div class="form-group mb0 col-lg-12">
                                            <button type="submit" class="btn btn-block login-btn">Login</button>
                                        </div>
                                        <div class="col-lg-12 forgot-div"><a href="{{route('website.forgot.password')}}" class="text-center">Forgot Password</a></div>
                                    </form>

                                    <div class="google-div"><a href="#" class="google-btn"><span class="icon-google-30 google-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></span>Continue with Google</a></div>
                                    <div class="facebook-div"><a href="#" class="facebook-btn"><span class="icon-facebook-07 facebook-icon"></span>Continue with Facebook</a></div>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form class="row" action="">
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Full Name" id="name1">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Email" id="p_number1">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="password" class="form-control" placeholder="Password" id="pass">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="pass_new">
                                        </div>
                                        <div class="form-group mb0 col-lg-12">
                                            <button type="submit" class="btn btn-block sign-btn">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('asset_website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset_website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset_website/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('asset_website/js/main.js')}}"></script>

<script>
   
function goBack() {
  window.history.back();
}
</script>


</body>

</html>