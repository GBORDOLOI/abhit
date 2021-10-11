@extends('layout.website.website')

@section('title', 'My Account')

@section('head')
@endsection

@section('content')
@include('layout.website.include.forum_header')

<section class="account-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom1">
                        <div class="knowledge-pic">
                            @if($user_details != null)
                                <img src="{{asset('/files/profile/'.$user_details->image)}}" onerror="this.onerror=null;this.src='{{asset('asset_website/img/noimage.png')}}';"  class="rounded-circle w100">
                                
                            @else
                                <img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100">
                            @endif
                        </div>
                        <div class="knowledge-desc mt-2">
                            <h4 class="small-heading-black text-center mb0">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
                            @if($user_details != null)
                                <p class="text-center">{{$user_details->education}}</p>
                            @else
                                <p class="text-center">Msc</p>
                            @endif
                        </div>
                    </div>

                    <ul class="nav nav-tabs flex-column profile-tab" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#photo" role="tab" aria-controls="photo">Photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#account" role="tab" aria-controls="account">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payment" role="tab" aria-controls="payment">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#notification" role="tab" aria-controls="notification">Notification <span class="notification-badge">4</span></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#purchase" role="tab" aria-controls="purchase">Purchase History</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 col-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="profile-form">
                            <form class="row"  action="{{route('website.user.details')}}" method="Post" id="myAccountUserForm">
                                @csrf
                                <div class="col-lg-6 col-6">
                                    <h4 class="small-heading-black">Profile</h4>
                                </div>
                                <div class="col-lg-6 col-6 text-right ">
                                    <a class="btn btn-default edit-btn" href="#">Edit Profile</a>&nbsp;
                                    <a class="btn btn-warning cancel-edit-btn" href="#">Cancel Edit</a>
                                </div>
                                @if($user_details != null)
                                    <div class="form-group col-lg-6 pr10">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name" id="name3" value="{{Auth::user()->firstname}}" required>
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" id="p_number3" value="{{Auth::user()->lastname}}" required>
                                    </div>
                                    <div class="form-group col-lg-6 pr10">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" value="{{Auth::user()->email}}" required>
                                    </div>
                                    <div class="form-group col-lg-6 pr10">
                                        <label>Mobile number</label>
                                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone" id="phone" value="{{$user_details->phone}}">
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Education</label>
                                        <input type="text" class="form-control" name="education" placeholder="Enter Education" id="education" value="{{$user_details->education}}">
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="{{$user_details->gender}}">{{$user_details->gender}}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                @else
                                    <div class="form-group col-lg-6 pr10">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name" id="name3" value="{{Auth::user()->firstname}}">
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" id="p_number3" value="{{Auth::user()->lastname}}">
                                    </div>
                                    <div class="form-group col-lg-6 pr10">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group col-lg-6 pr10">
                                        <label>Mobile number</label>
                                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone" id="phone">
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Education</label>
                                        <input type="text" class="form-control" name="education" placeholder="Enter Education" id="education">
                                    </div>
                                    <div class="form-group col-lg-6 pl10">
                                        <label>Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group col-lg-12">
                                    <div class="button-div"><button type="submit" class="btn btn-block knowledge-link profile-save-btn">Save</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="photo" role="tabpanel">
                        <form class="row" enctype="multipart/form-data" id="photoUploadForm">
                            @csrf
                            <div class="col-lg-12 col-12">
                                <h4 class="small-heading-black">Preview Photo</h4>
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <p class="heading-form">Add / Change Image</p>
                                        <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" onchange="previewImage(event)" required>
                                        <label for="imageUpload"></label>
                                        <div class="btn-div2"><button type="submit" class="btn btn-md knowledge-link upload-photo-btn">Save</button></div>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                    <div class="avatar-preview">
                                        <img id="outputImage" src="{{asset('/asset_website/img/imgPreview.png')}}" alt="" >
                                        {{-- <div id="outputImage" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="account" role="tabpanel">
                        <div class="account-form">
                            <form class="row" id="updatePasswordForm">
                                @csrf
                                <div class="col-lg-12 col-6">
                                    <h4 class="small-heading-black">Password</h4>
                                </div>

                                <div class="form-group col-lg-12">
                                    <input type="password" class="form-control" name="currentPassword"  placeholder="Enter Current Password" id="currentPassword" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="password" class="form-control" name="newPassword" placeholder="Enter New Password" id="newPassword" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" id="confirmPassword" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="button-div1"><button type="submit" class="btn btn-block knowledge-link change-password-btn">Change Password</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="payment" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h4 class="small-heading-black">Card Saved</h4>
                            </div>
                            <div class="col-lg-12">
                                <ul class="list-inline card2-list">
                                    <li>
                                        <div>
                                            <div class="card-img"><img src="{{asset('asset_website/img/cart/visa.png')}}" class="w100"></div>
                                            <div class="card-desc">
                                                <p class=""><span class="f14">ICICI CREDIT CARD5267-</span> <br />
                                                    <span class="f12">XXXXXXXX-3499 </span><br />
                                                    <span class="f10">VALID TILL 08/23</span>
                                                </p>
                                            </div>
                                            <div class="name-on-card">Hirak jyoti das</div>
                                            <div class="remove-card"><a href="">REMOVE</a></div>
                                        </div>

                                    </li>
                                    <li>
                                        <div>
                                            <div class="card-img"><img src="{{asset('asset_website/img/cart/visa.png')}}" class="w100"></div>
                                            <div class="card-desc">
                                                <p class=""><span class="f14">ICICI CREDIT CARD5267-</span> <br />
                                                    <span class="f12">XXXXXXXX-3499 </span><br />
                                                    <span class="f10">VALID TILL 08/23</span>
                                                </p>
                                            </div>
                                            <div class="name-on-card">Hirak jyoti das</div>
                                            <div class="remove-card"><a href="">REMOVE</a></div>
                                        </div>

                                    </li>
                                    <li>
                                        <div>
                                            <div class="card-img"><img src="{{asset('asset_website/img/cart/visa.png')}}" class="w100"></div>
                                            <div class="card-desc">
                                                <p class=""><span class="f14">ICICI CREDIT CARD5267-</span> <br />
                                                    <span class="f12">XXXXXXXX-3499 </span><br />
                                                    <span class="f10">VALID TILL 08/23</span>
                                                </p>
                                            </div>
                                            <div class="name-on-card">Hirak jyoti das</div>
                                            <div class="remove-card"><a href="">REMOVE</a></div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="notification" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h4 class="small-heading-black">Notification</h4>
                            </div>
                            <div class="col-lg-12">
                                <ul class="list-inline notification-list">
                                    <li>
                                        <div>
                                            <h4 class="small-heading-black mb0">New Course Add. please Check it .</h4>
                                            <p class="text-justify mb0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="small-heading-black mb0">New Course Add. please Check it .</h4>
                                            <p class="text-justify mb0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4 class="small-heading-black mb0">New Course Add. please Check it .</h4>
                                            <p class="text-justify mb0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="purchase" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h4 class="small-heading-black">Purchase History</h4>
                            </div>
                            <div class="col-lg-12">
                                <ul class="list-inline cart-course-list1">
                                    <li>
                                        <div class="cart-course-image1"><img src="{{asset('asset_website/img/cart/image.png')}}" class="w100"></div>
                                        <div class="cart-course-desc">
                                            <h4 data-brackets-id="12020" class="small-heading-black">Chemistry</h4>
                                            <p>Basic understanding of chemistry
                                                and maths.</p>
                                            <span class="course-price2"><i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                                            <div class="dropdown course-tooltip">
                                                <button class="dropbtn">Full Course<span><i class="fa fa-info-circle ml5" aria-hidden="true"></i></span></button>
                                                <div class="dropdown-content box arrow-top">
                                                    <div class="scrollbar" id="style-1">
                                                        <div class="force-overflow">
                                                            <h6>Lessons</h6>
                                                            <ul class="list-inline tooltip-course-list">
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Aldehydes, Ketones and Carboxylic Acids
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Alcohols, Phenols and Ethers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Haloalkanes and Haloarenes
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Biomolecules
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Polymers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemistry in Everyday Life
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>d and f- Block Elements
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Electrochemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemical Kinetics
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Surface Chemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Solutions
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt10"><a href="#" class="remove">Remove</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-course-image1"><img src="{{asset('asset_website/img/cart/image.png')}}" class="w100"></div>
                                        <div class="cart-course-desc">
                                            <h4 data-brackets-id="12020" class="small-heading-black">Chemistry</h4>
                                            <p>Basic understanding of chemistry
                                                and maths.</p>
                                            <span class="course-price2"><i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                                            <div class="dropdown course-tooltip">
                                                <button class="dropbtn">Lesson Selected<span><i class="fa fa-info-circle ml5" aria-hidden="true"></i></span></button>
                                                <div class="dropdown-content box arrow-top">
                                                    <div class="scrollbar" id="style-1">
                                                        <div class="force-overflow">
                                                            <h6>Lessons</h6>
                                                            <ul class="list-inline tooltip-course-list">
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Aldehydes, Ketones and Carboxylic Acids
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Alcohols, Phenols and Ethers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Haloalkanes and Haloarenes
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Biomolecules
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Polymers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemistry in Everyday Life
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>d and f- Block Elements
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Electrochemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemical Kinetics
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Surface Chemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Solutions
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt10"><a href="#" class="remove">Remove</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-course-image1"><img src="{{asset('asset_website/img/cart/image.png')}}" class="w100"></div>
                                        <div class="cart-course-desc">
                                            <h4 data-brackets-id="12020" class="small-heading-black">Chemistry</h4>
                                            <p>Basic understanding of chemistry
                                                and maths.</p>
                                            <span class="course-price2"><i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                                            <div class="dropdown course-tooltip">
                                                <button class="dropbtn">Full Course<span><i class="fa fa-info-circle ml5" aria-hidden="true"></i></span></button>
                                                <div class="dropdown-content box arrow-top">
                                                    <div class="scrollbar" id="style-1">
                                                        <div class="force-overflow">
                                                            <h6>Lessons</h6>
                                                            <ul class="list-inline tooltip-course-list">
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Aldehydes, Ketones and Carboxylic Acids
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Alcohols, Phenols and Ethers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Haloalkanes and Haloarenes
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Biomolecules
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Polymers
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemistry in Everyday Life
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>d and f- Block Elements
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Electrochemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Chemical Kinetics
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Surface Chemistry
                                                                </li>
                                                                <li>
                                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>Solutions
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt10"><a href="#" class="remove">Remove</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.website.include.modals')
@endsection

@section('scripts')
    @include('layout.website.include.modal_scripts')
    <script>

    /******************  For Profile Section ******************/    
        $('#gender').attr("disabled", true); 
        $('.profile-save-btn').attr("disabled", true); 
        $('.profile-save-btn').addClass('knowledge-link-old');
        $('.profile-save-btn').removeClass('knowledge-link');
        $('#profileForm input').attr('readonly', 'readonly');
        $('.cancel-edit-btn').hide();
        toastr.options = {
          "closeButton": true,
          "newestOnTop": true,
          "positionClass": "toast-top-right"
        };

        $('.edit-btn').on('click',function(){
            $('#gender').attr("disabled", false); 
            $('.profile-save-btn').attr("disabled", false); 
            $('#profileForm input').attr('readonly', false);
            $('.edit-btn').hide();
            $('.cancel-edit-btn').show();
            $('.profile-save-btn').addClass('knowledge-link');
            $('.profile-save-btn').removeClass('knowledge-link-old');
        });

        $('.cancel-edit-btn').on('click',function(){
            $('.edit-btn').show();
            $('.cancel-edit-btn').hide();
            $('#gender').attr("disabled", true); 
            $('.profile-save-btn').attr("disabled", true); 
            $('#profileForm input').attr('readonly', 'readonly');
            $('.profile-save-btn').addClass('knowledge-link-old');
            $('.profile-save-btn').removeClass('knowledge-link');
        });

        
        
        
     
        // $('#myAccountUserForm').on('submit',function(e){
        //     e.preventDefault();

        //     $('.profile-save-btn').text('saving...');

        //     $.ajax({
        //         url:"{{route('website.user.details')}}",
        //         type:"POST",
        //         data:$('#profileForm').serialize(),
                
        //         success:function(data){
        //             toastr.success(data.message);
        //             $('#gender').attr("disabled", true); 
        //             $('.profile-save-btn').attr("disabled", true); 
        //             $('#profileForm input').attr('readonly', 'readonly');
        //             $('.profile-save-btn').text('save');
        //             $('.cancel-edit-btn').hide();
        //             $('.edit-btn').show();
        //         },
        //         error:function(xhr, status, error){
        //             if(xhr.status == 500 || xhr.status == 422){
        //                 toastr.error('Oops! Something went wrong while saving.');
        //             }
        //             $('.cancel-edit-btn').hide();
        //             $('.edit-btn').show();
        //             $('.profile-save-btn').text('save');
        //         }
        //     });
        // });



        /*******************************User Photo Upload*****************************/

        function previewImage(event){
            let reader = new FileReader();
            reader.onload = function(){
                let output = document.getElementById('outputImage');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }


        $('#photoUploadForm').on('submit',function(e){
            e.preventDefault();

            let formData = new FormData(this);
            $('.upload-photo-btn').text('uploading...');

            $.ajax({
                url:"{{route('website.user.upload.photo')}}",
                type:"POST",
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                data:formData,
                success:function(data){
                    toastr.success(data.message);
                    $('#photoUploadForm')[0].reset();
                    $('.upload-photo-btn').text('save');
                    location.reload();
                },
                error:function(xhr, status, error){
                    if(xhr.status == 500 || xhr.status == 422){
                        toastr.error('Oops! Something went wrong while saving.');
                    }
                    $('#photoUploadForm')[0].reset();
                    $('.upload-photo-btn').text('save');
                }
            });
        });

    /**************************** Update Password Section **************************/    
        $('#updatePasswordForm').on('submit',function(e){
            e.preventDefault();
            $('.change-password-btn').text('please wait...')

            let newPwd = $('#newPassword').val();
            let confPwd = $('#confirmPassword').val();

            if(newPwd != confPwd){
                toastr.error('Oops! password not matched');
                $('#updatePasswordForm')[0].reset();
                $('.change-password-btn').text('Change Password');
            }else{
                $.ajax({
                    url:"{{route('website.update.password')}}",
                    type:"POST",
                    data:$('#updatePasswordForm').serialize(),
                    success:function(data){
                        console.log(data.message);
                        toastr.success(data.message);
                        $('#updatePasswordForm')[0].reset();
                        $('.change-password-btn').text('Change Password');
                    },
                    error:function(xhr, status, error){
                        if(xhr.status == 500 || xhr.status == 422){
                            toastr.error('Oops! Something went wrong while saving.');
                        }
                        $('#updatePasswordForm')[0].reset();
                        $('.change-password-btn').text('Change Password');
                    }
                });
            }
        });


    </script>
@endsection
