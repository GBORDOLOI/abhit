@extends('layout.website.website')

@section('content')
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
                    @auth
                        <a href="javascript:void(0)" class="btn add-post float-right mr-3" data-toggle="modal" data-target="#websiteAddBlogModal">Add Blog</a>
                    @endauth
                    @guest
                    <a href="javascript:void(0)" class="btn add-post float-right mr-3" data-toggle="modal" data-target="#login-modal">Add Blog</a>
                    @endguest
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
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layout.website.include.modals')
@endsection

@section('scripts')
    @include('layout.website.include.modal_scripts')
@endsection
