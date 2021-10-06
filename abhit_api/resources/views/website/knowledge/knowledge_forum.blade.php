@extends('layout.website.website')

@section('title','Knowledge Forum')

@section('head')
<style>
    #header{
        display: none;
    }
</style>
@endsection

@section('content')
@include('layout.website.include.forum_header')

<section class="knowledge-forum">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="knowledge-forum-left">
                    <ul class="list-inline answer-list">
                        @auth
                        <li>
                            <a data-toggle="modal" data-target="#add-question-modal">
                                <span class="icon-user-08 admin-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                <p class="small-text-heading mb0">Himadri Shekhar Das</p>
                                <h4 class="small-heading-grey mb0">What is your question?</h4>
                            </a>
                        </li>
                        @endauth
                        @guest
                            <li>
                                <a data-toggle="modal" data-target="#login-modal">
                                    <span class="icon-user-08 admin-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                    <p class="small-text-heading mb0">Himadri Shekhar Das</p>
                                    <h4 class="small-heading-grey mb0">What is your question?</h4>
                                </a>
                            </li>
                        @endguest
                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress and Boost Mental Health?</a>
                            <p class="block-ellipsis6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua...</p>
                            <div class="answer-btn-box">
                                <ul class="list-inline answer-btn-list">
                                    <li><a href="{{route('website.knowledge.details.post')}}">14 Comment</a></li>
                                    <li><a href="{{route('website.knowledge.details.post')}}">14 Views</a></li>
                                    <li><a href="{{route('website.knowledge.details.post')}}">Add Comment</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress and Boost Mental Health?</a>
                            <p class="block-ellipsis6">I do want to get a detailed information with some example.</p>
                            <div><a href="#" class="post-link">https://bagcradio.com/</a></div>
                            <div class="answer-btn-box">
                                <ul class="list-inline answer-btn-list">
                                    <li><a href="{{route('website.knowledge.details.post')}}">14 Comment</a></li>
                                    <li><a href="{{route('website.knowledge.details.post')}}">14 Views</a></li>
                                    <li><a href="{{route('website.knowledge.details.post')}}">Add Comment</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress and Boost Mental Health?</a>
                            <p class="block-ellipsis6">I do want to get a detailed information with some example.</p>
                            <div><a href="#" class="post-link">https://bagcradio.com/</a></div>
                            <div class="answer-btn-box">
                                <ul class="list-inline answer-btn-list">
                                    <li><a href="#">14 Comment</a></li>
                                    <li><a href="#">14 Views</a></li>
                                    <li><a href="#">Add Comment</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress and Boost Mental Health?</a>
                            <p class="block-ellipsis6">I do want to get a detailed information with some example.</p>
                            <div><a href="#" class="post-link">https://bagcradio.com/</a></div>
                            <div class="answer-btn-box">
                                <ul class="list-inline answer-btn-list">
                                    <li><a href="#">14 Comment</a></li>
                                    <li><a href="#">14 Views</a></li>
                                    <li><a href="{{route('website.knowledge.details.post')}}">Add Comment</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                @auth
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom">
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mb0">Himadri Shekhar Das</h4>
                            <p class="text-center">M.Sc Student</p>
                            <div class="question-box">
                                <ul class="list-inline question-point-list">
                                    <li><a href="knowledge-tab.html#question">Questions Asked<span class="question-no">10</span></a></li>
                                    <li><a href="knowledge-tab.html#answer">Answered<span class="question-no">10</span></a></li>
                                    <li><a href="knowledge-tab.html#post">Post<span class="question-no">10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
                <div class="knowledge-forum-right2">
                    <h4 class="small-heading-grey">Today’s top Topics</h4>
                    <ul class="list-inline todays-topic-list">
                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress
                                and Boost Mental Health?</a>
                        </li>
                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress
                                and Boost Mental Health?</a>
                        </li>
                        <li>
                            <p class="small-text-heading">26 min ago, Poted by: Ramjan Ali Anik, Math Teacher</p>
                            <a href="#" target="_blank" class="small-heading-black">How to Reduce Workplace Stress
                                and Boost Mental Health?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



@include('layout.website.include.modals')

@endsection

@section('scripts')
@endsection
