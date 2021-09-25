<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Forgot Password</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('asset_website/img/favicon.png')}}" rel="icon">
    <link href="{{asset('asset_website/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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
                    <div class="forget-div">
                        <div class="login-logo"><img src="{{asset('asset_website/img/home/logo.png')}}" class="w100"></div>
                        <a onclick="goBack()" class="page-close"><span class="icon-cancel-30"></span></a>
                        <div class="forget-cover">
                            <form class="row" action="">
                                <div class="col-lg-12">
                                    <h4 class="small-heading-grey">Forgot Password</h4>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Enter Email address" id="email">
                                </div>

                                <div class="form-group mb0 col-lg-12">
                                    <a href="newpass.html" class="btn btn-block login-btn">Continue</a>
                                </div>

                            </form>
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