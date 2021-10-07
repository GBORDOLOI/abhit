@extends('layout.website.website')

@section('title', 'Knowledge Details Post')

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
                <div class="knowledge-forum-left-new">
                    <ul class="list-inline answer-list1">
                        <li>
                            <div class="answer-profile">
                                <div class="answer-profile-pic"><img src="{{asset('asset_website/img/knowladge-forum/image2.png')}}" class="w100"></div>
                                <div class="answer-profile-desc">
                                    <h4 class="small-heading-black mb0">{{$knowledge_post->user->firstname}} {{$knowledge_post->user->lastname}}</h4>
                                    <p class="mb0">M.Sc Student</p>
                                </div>
                                <span class="answer-span">{{$knowledge_post->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="answer-describtion">
                                <h4 class="small-heading-black">Q: {{$knowledge_post->question}}</h4>
                                <p class="text-justify">{{$knowledge_post->description}}</p>
                                <a href="{{$knowledge_post->links}}" class="post-link">{{$knowledge_post->links}}</a>
                                <div class="answer-btn-box">
                                    <ul class="list-inline answer-btn-list">
                                        <li><a href="#">14 Comment</a></li>
                                        <li><a href="#">14 Views</a></li>
                                    </ul>
                                </div>
                                <div class="mt20">
                                    <span class="knowledge-profile"><img src="{{asset('asset_website/img/knowladge-forum/image4.png')}}"></span>
                                    <h6 class="knowledge-text1 ">Himadri Shekhar Das</h6>
                                    <form class="comment-form mt20" role="search" method="GET" action="">
                                        <div class="input-group add-on">
                                            <textarea class="form-control comment-form-control" placeholder="Add your Answer" name="comment" id="comment" rows="3"></textarea>
                                            <div class="input-group-btn">
                                                <button id="btn_comment" class="btn-comment" type="button">Post</button>
                                            </div>                                                   
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <h4 class="small-heading-black mt20 mb0">Answers</h4>
                                    <ul class="list-inline comment-list">
                                        <li>
                                            <div class="answer-profile1">
                                                <div class="answer-profile-pic1"><img src="{{asset('asset_website/img/knowladge-forum/image2.png')}}" class="w100"></div>
                                                <div class="answer-profile-desc1">
                                                    <h4 class="small-heading-black1 mb0">Rajdeep das</h4>
                                                    <p class="small-comment">M.Sc Student</p>
                                                    <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                                                </div>
                                                <span class="answer-span1">May12, 2021 at 10:32 PM</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @auth
              <div class="col-lg-4">
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom">
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mt-2 mb0">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
                            <p class="text-center">M.Sc Student</p>
                            <div class="question-box">
                                <ul class="list-inline question-point-list">
                                  <ul class="list-inline question-point-list">
                                    <li><a href="{{route('website.knowledge.tab')}}">Questions Asked<span class="question-no">{{$total_questions}}</span></a></li>
                                    <li><a href="{{route('website.knowledge.tab')}}">Answered<span class="question-no">10</span></a></li>
                                    <li><a href="{{route('website.knowledge.tab')}}">Post<span class="question-no">10</span></a></li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div> 
            @endauth    
        </div>
    </div>
</section>

@include('layout.website.include.modals')
@endsection

@section('scripts')
@endsection
