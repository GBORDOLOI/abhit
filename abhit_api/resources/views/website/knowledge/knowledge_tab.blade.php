@extends('layout.website.website')

@section('title', 'Knowledge Forum')

@section('head')
    <style>
        #header {
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
                        <div class="knowledge-forum-profile-top"><img
                                src="{{ asset('asset_website/img/knowladge-forum/bg.png') }}" class="w100"></div>
                        <div class="knowledge-forum-profile-bottom">
                            @if (!empty($user_details))
                                <div class="knowledge-pic"><img src="{{ asset('/files/profile/' . $user_details->image) }}"
                                        onerror="this.onerror=null;this.src='{{ asset('asset_website/img/noimage.png') }}';"
                                        class="rounded-circle w100" style="border:4px solid white;"></div>
                            @else
                                <div class="knowledge-pic"><img
                                        src="{{ asset('asset_website/img/knowladge-forum/image1.png') }}"
                                        class="w100"></div>
                            @endif
                            <div class="knowledge-desc">
                                <h4 class="small-heading-black text-center mt-3 mb0">{{ Auth::user()->firstname }}
                                    {{ Auth::user()->lastname }}</h4>
                                @if (!empty($user_details))
                                    <p class="text-center">{{ $user_details->education }}</p>
                                @else
                                    <p class="text-center">education</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="knowledge-forum-right2">
                        <a data-toggle="modal" data-target="#add-question-modal" class="small-heading-grey">What is your
                            question?</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="nav nav-tabs knowledge-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#question" role="tab"
                                aria-controls="question">Asked By You</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#answer" role="tab"
                                aria-controls="answer">Answered By You</a>
                        </li>
                        {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#post" role="tab" aria-controls="post">Post 15</a>
                    </li> --}}
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="question" role="tabpanel">
                            <div class="knowledge-forum-left-new">
                                <ul class="list-inline answer-list2 ">
                                    @forelse ($questions_asked_by_user as $question)
                                        @php $enc_id = Crypt::encryptString($question->id)@endphp
                                        <li>
                                            <div class="answer-describtion">
                                                <p class="small-text-heading">{{ $question->created_at->diffForHumans() }}
                                                </p>
                                                <h4 class="small-heading-black">{{ $question->question }}</h4>
                                                <p class="text-justify">{{ $question->description }}</p>
                                                <a href="#" class="post-link">{{ $question->links }}</a>
                                                <div class="answer-btn-box">
                                                    <ul class="list-inline answer-btn-list">
                                                        <li><a
                                                                href="{{ route('website.knowledge.details.post', ['id' => $enc_id]) }}">{{ $question->total_comments }}
                                                                Comment</a></li>
                                                        <li><a href="javascript:void(0)">{{ $question->total_views }}
                                                                Views</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                        <p class="p-4 mb-0">Nothing to show.</p>
                                    @endforelse
                                </ul>
                            </div>
                            <div class="mt-2">
                                {{ $questions_asked_by_user->links() }}
                            </div>
                        </div>
                        <div class="tab-pane" id="answer" role="tabpanel">
                            <div class="knowledge-forum-left-new">
                                <ul class="list-inline answer-list2">
                                    @if (!$answered_by_user->isEmpty())
                                        @foreach ($answered_by_user as $answer)
                                            @php $encrypt_id = Crypt::encryptString($answer->knowledgeForumPost->id)@endphp
                                            <li>
                                                <div class="answer-describtion">
                                                    <p class="small-text-heading">
                                                        {{ $answer->knowledgeForumPost->created_at->diffForHumans() }},
                                                        Asked by: Ramjan Ali Anik, Math Teacher</p>
                                                    <h4 class="small-heading-black">
                                                        {{ $answer->knowledgeForumPost->question }}</h4>
                                                    <p class="text-justify">
                                                        {{ $answer->knowledgeForumPost->description }}</p>
                                                    <a href="#"
                                                        class="post-link">{{ $answer->knowledgeForumPost->links }}</a>
                                                    <div class="answer-btn-box">
                                                        <ul class="list-inline answer-btn-list">
                                                            <li><a
                                                                    href="{{ route('website.knowledge.details.post', ['id' => $encrypt_id]) }}">{{ $answer->knowledgeForumPost->total_comments }}
                                                                    Comment</a></li>
                                                            <li><a href="javascript:void(0)">{{ $answer->knowledgeForumPost->total_views }}
                                                                    Views</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <p class="p-4 mb-0">Nothing to show.</p>
                                    @endif
                                </ul>
                            </div>
                            <div class="mt-2">
                                {{ $answered_by_user->links() }}
                            </div>
                        </div>
                        <div class="tab-pane" id="post" role="tabpanel">
                            <div class="knowledge-forum-left-new">
                                <ul class="list-inline answer-list2">
                                    <li>
                                        <div class="answer-describtion">
                                            <p class="small-text-heading">26 min ago,</p>
                                            <h4 class="small-heading-black">What are the weirdest examples of natural
                                                selection in nature?</h4>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore
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
