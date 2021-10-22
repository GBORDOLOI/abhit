@extends('layout.website.website')

@section('title', 'Home')

@section('head')

@endsection

@section('content')
    <section class="subheader1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p0">
                    <div class="subheader1-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="course.html">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$blog->name}}</li>
                            </ol>
                        </nav>
                        <div class="block-ellipsis3">
                            <h2 class="heading-white">{{$blog->name}}</h2>
                        </div>

                        <div>
                            <h6 class="mb0">Ramjan Ali Anik</h6>
                            <p class="mb0">Math Teacher</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 p0">
                    <div class="subheader1-img">
                        <img src="{{asset($blog->blog_image)}}" class="w100">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    <span class="icon-Calender-09 calendar-icon"></span><span>{{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        @auth
                        <a href="javascript:void(0);" data-id="{{$blog->id}}" data-toggle="modal" data-target="#ReportBlogModal" class="reportBlogModal" style="display:inline;font-size:12px;" >
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;  Report
                        </a>
                        @endauth
                        &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);"  data-toggle="modal" data-target="#sharePostModal" style="display:inline;font-size:12px;">
                            <i class="fa fa-share" aria-hidden="true"></i> &nbsp; Share
                        </a>
                    <div class="mt-5">
                        {!!$blog->blog!!}
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('layout.website.include.modals')
@endsection
    
@section('scripts')
    @include('layout.website.include.modal_scripts')
@endsection