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
                                <p class="small-text-heading mb0">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
                                <h4 class="small-heading-grey mb0">What is your question?</h4>
                            </a>
                        </li>
                        @endauth
                        @guest
                            <li>
                                <a data-toggle="modal" data-target="#login-modal">
                                    <span class="icon-user-08 admin-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                    {{-- <p class="small-text-heading mb0">Himadri Shekhar Das</p> --}}
                                    <h4 class="small-heading-grey mb0">What is your question?</h4>
                                </a>
                            </li>
                        @endguest
                        @foreach( $knowledge_post as $post)
                            @php $enc_id = Crypt::encryptString($post->id)@endphp
                            <li>
                                <p class="small-text-heading">{{$post->created_at->diffForHumans()}}, &nbsp;Posted by: {{$post->user->firstname}} {{$post->user->lastname}}</p>
                                <a href="{{route('website.knowledge.details.post',['id' =>  $enc_id])}}" target="_blank" class="small-heading-black">{{$post->question}}</a>
                                <p class="block-ellipsis6">{{$post->description}}</p>
                                <div class="answer-btn-box">
                                    <ul class="list-inline answer-btn-list">
                                        <li><a href="javascript:void(0);">{{ $total_post_commented_overall}} Comment</a></li>
                                        <li><a href="javascript:void(0);">&nbsp;{{$post->total_views}} views </a></li>
                                        <li><a href="{{route('website.knowledge.details.post',['id' =>  $enc_id])}}">Add Comment</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {{ $knowledge_post->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                @auth
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom">
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mt-2 mb0">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
                            <p class="text-center">M.Sc Student</p>
                            <div class="question-box">
                                <ul class="list-inline question-point-list">
                                    <li><a href="knowledge-tab.html#question">Questions Asked<span class="question-no">{{$total_questions}}</span></a></li>
                                    <li><a href="knowledge-tab.html#answer">Answered<span class="question-no">{{$total_knowledge_post_commented_by_one_user}}</span></a></li>
                                    {{-- <li><a href="knowledge-tab.html#post">Post<span class="question-no">10</span></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
                <div class="knowledge-forum-right2">
                    <h4 class="small-heading-grey">Today’s top Topics</h4>
                    <ul class="list-inline todays-topic-list">
                        @foreach( $top_knowledge_post as $top_post)
                            @php $encrypted_id = Crypt::encryptString($top_post->id)@endphp
                            <li>
                                <p class="small-text-heading">{{$top_post->created_at->diffForHumans()}}, &nbsp;Poted by: {{$top_post->user->firstname}} {{$top_post->user->lastname}}</p>
                                <a href="{{route('website.knowledge.details.post',['id' =>  $encrypted_id])}}" target="_blank" class="small-heading-black">{{$top_post->question}}</a>
                            </li>
                        @endforeach
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
