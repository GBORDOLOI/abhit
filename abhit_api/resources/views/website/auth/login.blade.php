@extends('layout.website.auth')

@section('title', 'User | Login')

@section('main')

    <section class="login-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-div">
                        <div class="login-logo"><img src="{{ asset('asset_website/img/home/logo.png') }}"
                                class="w100"></div>

                        <a onclick="goBack()" class="page-close"><span class="icon-cancel-30"></span></a>
                        <div class="login-cover">
                            <ul class="nav nav-tabs login-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Log In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Sign Up</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form class="row" action="">
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Name" id="name1">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Phone Number"
                                                id="p_number1">
                                        </div>

                                        <div class="form-group mb0 col-lg-12">
                                            <button type="submit" class="btn btn-block login-btn">Login</button>
                                        </div>
                                        <div class="col-lg-12 forgot-div"><a href="{{ route('website.forgot.password') }}"
                                                class="text-center">Forgot Password</a></div>
                                    </form>

                                    <div class="google-div"><a href="#" class="google-btn"><span
                                                class="icon-google-30 google-icon"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></span>Continue with Google</a></div>
                                    <div class="facebook-div"><a href="#" class="facebook-btn"><span
                                                class="icon-facebook-07 facebook-icon"></span>Continue with Facebook</a>
                                    </div>
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
                                            <input type="password" class="form-control" placeholder="Confirm Password"
                                                id="pass_new">
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
@endsection

@section('script')
@endsection



</body>

</html>
