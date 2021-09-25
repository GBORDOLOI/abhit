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
            <div class="col-lg-4">
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom">
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mb0">Himadri Shekhar Das</h4>
                            <p class="text-center">M.Sc Student</p>
                        </div>
                    </div>
                </div>
                <div class="knowledge-forum-right2">
                    <a href="#" class="small-heading-grey" data-toggle="modal" data-target="#add-question-modal">What is your question?</a>
                </div>
            </div>
            <div class="col-lg-8">
                <ul class="nav nav-tabs knowledge-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#question" role="tab" aria-controls="question">Your Question 10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#answer" role="tab" aria-controls="answer">Answer by you 21</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#post" role="tab" aria-controls="post">Post 15</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="question" role="tabpanel">
                        <div class="knowledge-forum-left-new">
                            <ul class="list-inline answer-list2">
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-your-question-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-your-question-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-your-question-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-your-question-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-your-question-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-your-question-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-your-question-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-your-question-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="answer" role="tabpanel">
                        <div class="knowledge-forum-left-new">
                            <ul class="list-inline answer-list2">
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-answer-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-answer-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-answer-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-answer-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-answer-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-answer-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May 21, 2021, Asked by: Ramjan Ali Anik, Math Teacher</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">I do want to get a detailed information with some example.</p>
                                        <a href="#" class="post-link">https://bagcradio.com/</a>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-answer-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-answer-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="post" role="tabpanel">
                        <div class="knowledge-forum-left-new">
                            <ul class="list-inline answer-list2">
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">26 min ago,</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua...</p>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-post-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-post-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May12, 2021 at 10:32 PM</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua...</p>

                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-post-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-post-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May12, 2021 at 10:32 PM</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua...</p>
                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-post-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-post-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="answer-describtion">
                                        <p class="small-text-heading">May12, 2021 at 10:32 PM</p>
                                        <h4 class="small-heading-black">What are the weirdest examples of natural selection in nature?</h4>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua...</p>

                                        <div class="answer-btn-box">
                                            <ul class="list-inline answer-btn-list">
                                                <li><a href="knowledge-post-details.html">14 Comment</a></li>
                                                <li><a href="knowledge-post-details.html">14 Views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
