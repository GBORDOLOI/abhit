<!-- The Modal -->

<div class="modal" id="add-question-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <h4 class="modal-title">Add Question</h4>
            <button type="button" class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>


            <!-- Modal body -->
            <div class="modal-body">
                <div class="tips">
                    <h6 class="mb0">Tips on getting good answer quickly</h6>
                    <ul class="pl15 mb0">
                        <li>Make sure you question has not been asked already</li>
                        <li>Keep you question short and to the point</li>
                        <li>Double check grammer and spelling</li>
                    </ul>
                </div>
                <div>
                    <span class="knowledge-profile"><img src="{{asset('asset_website/img/knowladge-forum/image4.png')}}"></span>
                    <h6 class="knowledge-text">Himadri Shekhar Das</h6>
                </div>
                <div class="question-modal">
                    <form class="row">
                        <div class="form-group col-lg-12 mb-2">
                            <textarea class="form-control" rows="1" id="editorQuestion" placeholder="Type your question with “What”, “How”, “Why”, etc."></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input class="form-control link-input" type="url" id="example-url-input" placeholder="&#xf0c1; Include a link that gives context">
                        </div>
                        <!--                            <button type="submit" class="btn btn-block knowledge-link">Send</button>                      -->
                    </form>
                </div>
            </div>
            <div class="btn-box">
                <ul class="list-inline modal-btn">
                    <li> <button type="button" data-dismiss="modal" class="btn btn-block cancel-question">Cancel</button></li>
                    <li> <button type="submit" class="btn btn-block add-question">Add Question</button> </li>
                </ul>
            </div>


        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <section class="login-section" style="height:auto;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-div" style="width:auto;">
                                    {{-- <div class="login-logo"><img src="{{ asset('asset_website/img/home/logo.png') }}"
                                            class="w100"></div>
            
                                    <a onclick="goBack()" class="page-close"><span class="icon-cancel-30"></span></a> --}}
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
                                                <form class="row" action="{{route('website.auth.login')}}" method="POST" id="loginForm">
                                                    {{-- <input type="hidden" name="current_route" value="{{Request::path()}}"> --}}
                                                    @csrf
                                                    <div class="form-group col-lg-12">
                                                        <input type="email"name="email"  class="form-control" placeholder="Email" id="email" required>
                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="password" name="password" class="form-control" placeholder="password"
                                                            id="password" required>
                                                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                                    </div>
                                                    <span class="text-danger ml-2">
                                                        @if($errors->any())
                                                            {{$errors->first()}}
                                                        @endif
                                                    </span>
                                                    <div class="form-group mb0 col-lg-12">
                                                        <button type="submit" class="btn btn-block login-btn" id="loginBtn">Login</button>
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
                                                <form class="row" id="signupForm">
                                                    @csrf
                                                    <div class="form-group col-lg-12">
                                                        <input type="text" class="form-control" name="fname" placeholder="First Name" id="fname" required>
                                                        <span class="text-danger">@error('fname'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname" required>
                                                        <span class="text-danger">@error('lname'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="text" name="email" class="form-control" placeholder="Email" id="p_number1" required>
                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="password" name="password" class="form-control" placeholder="Password" id="pass" required>
                                                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"
                                                            id="pass_new" required>
                                                    </div>
                                                    <div class="form-group mb0 col-lg-12">
                                                        <button type="submit" class="btn btn-block sign-btn" id="signupBtn">Sign up</button>
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
            </div>
        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal" id="add-post-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <h4 class="modal-title">Add Post</h4>
            <button type="button" class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>


            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <span class="knowledge-profile"><img src="{{asset('asset_website/img/knowladge-forum/image4.png')}}"></span>
                    <h6 class="knowledge-text">Himadri Shekhar Das</h6>
                </div>
                <div class="question-modal">
                    <form class="row">
                        <div class="form-group col-lg-12 mb0">
                            <textarea class="form-control" rows="1" placeholder="Type your question with “What”, “How”, “Why”, etc." id="Message3"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input class="form-control link-input" type="url" id="example-url-input" placeholder="&#xf0c1; Include a link that gives context">
                        </div>
                        <!--                            <button type="submit" class="btn btn-block knowledge-link">Send</button>                      -->
                    </form>
                </div>
            </div>
            <div class="btn-box">
                <ul class="list-inline modal-btn">
                    <li> <button type="button" data-dismiss="modal" class="btn btn-block cancel-question">Cancel</button></li>
                    <li> <button type="submit" class="btn btn-block add-question">Add Post</button> </li>
                </ul>
            </div>


        </div>
    </div>
</div>

@section('scripts')
    <script>
        CKEDITOR.replace( 'editorQuestion' );


        $('#signupForm').on('submit',function(e){
            e.preventDefault();

            $('#signupBtn').text('Please wait...');

            $.ajax({
                url:"{{route('website.auth.signup')}}",
                type:"POST",
                data:$('#signupForm').serialize(),
                success:function(data){
                    toastr.success(data.message);
                    $('#signupForm')['0'].reset();
                    $('#signupBtn').text('Sign up');
                   
                },
                error: function(xhr, status, error) {
                    if(xhr.status == 500 || xhr.status == 422){
                        toastr.error('Oops! something went wrong');
                    }
                    $('#signupForm')['0'].reset();
                    $('#signupBtn').text('Sign up');
                }

            });
        })
    </script>
@endsection
