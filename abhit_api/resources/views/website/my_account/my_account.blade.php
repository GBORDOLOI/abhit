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
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mb0">Himadri Shekhar Das</h4>
                            <p class="text-center">M.Sc Student</p>

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
                            <form class="row" action="">
                                <div class="col-lg-6 col-6">
                                    <h4 class="small-heading-black">Profile</h4>
                                </div>
                                <div class="col-lg-6 col-6 text-right"><a href="#">Edit Profile</a></div>
                                <div class="form-group col-lg-6 pr10">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Himadri Shekhar" id="name3">
                                </div>
                                <div class="form-group col-lg-6 pl10">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Das" id="p_number3">
                                </div>
                                <div class="form-group col-lg-6 pr10">
                                    <label>Mobile number</label>
                                    <input type="email" class="form-control" placeholder="9801234567" id="email3">
                                </div>
                                <div class="form-group col-lg-6 pl10">
                                    <label>Education</label>
                                    <input type="email" class="form-control" placeholder="M.Sc" id="email3">
                                </div>
                                <div class="form-group col-lg-6 pr10">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" placeholder="abx@gmail.com" id="email3">
                                </div>
                                <div class="form-group col-lg-6 pl10">
                                    <label>Gender</label>
                                    <input type="email" class="form-control" placeholder="Male" id="email3">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="button-div"><button type="submit" class="btn btn-block knowledge-link">Save</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="photo" role="tabpanel">
                        <form class="row">
                            <div class="col-lg-12 col-12">
                                <h4 class="small-heading-black">Photo</h4>
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <p class="heading-form">Add / Change Image</p>
                                        <input type='file' id="imageUpload" class="" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                        <div class="btn-div2"><button type="submit" class="btn knowledge-link-old">Save</button></div>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="account" role="tabpanel">
                        <div class="account-form">
                            <form class="row" action="">
                                <div class="col-lg-12 col-6">
                                    <h4 class="small-heading-black">Password</h4>
                                </div>

                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Enter Current Password" id="name3">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Enter New Password" id="p_number3">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Confirm Password" id="email3">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="button-div1"><button type="submit" class="btn btn-block knowledge-link-old">Change Password</button></div>
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
@endsection
