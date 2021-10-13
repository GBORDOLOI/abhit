@extends('layout.website.website')

@section('head')
<style>
    .add-blog-floating{
        position: fixed;
        bottom: 60px;
        right: 20px;
        z-index: 1000;
        height: 70px;
        width: 70px;
        border-radius: 50%;
        background-image: linear-gradient(to left, #076fef, #01b9f1);
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
        transition: 0.2s ease-in-out;
    }

    .add-blog-floating:hover{
        transform: translateY(2px);
        color: #fff;
    }
</style>
@endsection

@section('content')
{{-- Floating button --}}
<button class="btn add-blog-floating mr-3">Add Blog</button>

    <section class="subheader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    <div class="subheader-image"><img src="{{ asset('asset_website/img/blog/banner.png') }}"
                            class="w100"></div>
                    <div class="subheader-image-desc">
                        <h2 class="heading-black">Blog</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    
                    <ul class="list-inline blog-list-div">
                        @foreach ($blogs as $item)
                            <li>
                                <a href="{{route('website.blog.details',['id'=>\Crypt::encrypt($item->id)])}}">
                                    <div class="blog-box">
                                        <div class="blog-image"><img src="{{asset($item->blog_image)}}"
                                                class="w100"></div>
                                        <div class="blog-desc">
                                            <span class="icon-Calender-09 calendar-icon"></span><span>{{\Carbon\Carbon::parse($item->created_at)->format('F d, Y')}}</span>
                                            <div class="block-ellipsis1">
                                                <h4 class="small-heading-black">{{$item->name}}</h4>
                                            </div>
                                            <div class="block-ellipsis2 ">
                                                {!!$item->blog!!}
                                            </div>
                                            <div>
                                                <h6 class="mb0">Ramjan Ali Anik</h6>
                                                <p class="mb0">Math Teacher</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        @endforeach

                        {{-- <li>
                            <a href="blog-details.html">
                                <div class="blog-box">
                                    <div class="blog-image"><img src="assets/img/blog/image2.png"
                                            class="w100"></div>
                                    <div class="blog-desc">
                                        <span class="icon-Calender-09 calendar-icon"></span><span>April 20, 2021</span>
                                        <div class="block-ellipsis1">
                                            <h4 class="small-heading-black">Integer congue magna at pretium
                                                purus pretium</h4>
                                        </div>
                                        <p class="block-ellipsis2 ">Lorem ipsum dolor sit amet, consectetur sed do
                                            eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat</p>
                                        <div>
                                            <h6 class="mb0">Ramjan Ali Anik</h6>
                                            <p class="mb0">Math Teacher</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a href="blog-details.html">
                                <div class="blog-box">
                                    <div class="blog-image"><img src="assets/img/blog/image3.png"
                                            class="w100"></div>
                                    <div class="blog-desc">
                                        <span class="icon-Calender-09 calendar-icon"></span><span>April 20, 2021</span>
                                        <div class="block-ellipsis1">
                                            <h4 class="small-heading-black">Integer congue magna at pretium
                                                purus pretium Integer congue magna at pretium
                                                purus pretium</h4>
                                        </div>
                                        <p class="block-ellipsis2 ">Lorem ipsum dolor sit amet, consectetur sed do
                                            eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat</p>
                                        <div>
                                            <h6 class="mb0">Ramjan Ali Anik</h6>
                                            <p class="mb0">Math Teacher</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a href="blog-details.html">
                                <div class="blog-box">
                                    <div class="blog-image"><img src="assets/img/blog/image4.png"
                                            class="w100"></div>
                                    <div class="blog-desc">
                                        <span class="icon-Calender-09 calendar-icon"></span><span>April 20, 2021</span>
                                        <div class="block-ellipsis1">
                                            <h4 class="small-heading-black">Integer congue magna at pretium
                                                purus pretium Integer congue magna at pretium
                                                purus pretium</h4>
                                        </div>
                                        <p class="block-ellipsis2 ">Lorem ipsum dolor sit amet, consectetur sed do
                                            eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat</p>
                                        <div>
                                            <h6 class="mb0">Ramjan Ali Anik</h6>
                                            <p class="mb0">Math Teacher</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a href="blog-details.html">
                                <div class="blog-box">
                                    <div class="blog-image"><img src="assets/img/blog/image5.png"
                                            class="w100"></div>
                                    <div class="blog-desc">
                                        <span class="icon-Calender-09 calendar-icon"></span><span>April 20, 2021</span>
                                        <div class="block-ellipsis1">
                                            <h4 class="small-heading-black">Integer congue magna at pretium
                                                purus pretium Integer congue magna at pretium
                                                purus pretium</h4>
                                        </div>
                                        <p class="block-ellipsis2 ">Lorem ipsum dolor sit amet, consectetur sed do
                                            eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat</p>
                                        <div>
                                            <h6 class="mb0">Ramjan Ali Anik</h6>
                                            <p class="mb0">Math Teacher</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-details.html">
                                <div class="blog-box">
                                    <div class="blog-image"><img src="assets/img/blog/image6.png"
                                            class="w100"></div>
                                    <div class="blog-desc">
                                        <span class="icon-Calender-09 calendar-icon"></span><span>April 20, 2021</span>
                                        <div class="block-ellipsis1">
                                            <h4 class="small-heading-black">Integer congue magna at pretium
                                                purus pretium Integer congue magna at pretium
                                                purus pretium</h4>
                                        </div>
                                        <p class="block-ellipsis2 ">Lorem ipsum dolor sit amet, consectetur sed do
                                            eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat</p>
                                        <div>
                                            <h6 class="mb0">Ramjan Ali Anik</h6>
                                            <p class="mb0">Math Teacher</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
