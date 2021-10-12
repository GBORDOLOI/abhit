@foreach($knowledge_post as $post)
<li>
    @php $enc_id = Crypt::encryptString($post->id)@endphp
    <p class="small-text-heading">{{$post->created_at->diffForHumans()}}, &nbsp;Posted by: {{$post->user->firstname}} {{$post->user->lastname}}
        <a href="#" style="float:right;color:red;" ><span style="color:red;">Report</span></a>
    </p>
    <a href="{{route('website.knowledge.details.post',['id' =>  $enc_id])}}" target="_blank" class="small-heading-black">{{$post->question}}</a>
    <p class="block-ellipsis6">{{$post->description}}</p>
    <div class="answer-btn-box">
        <ul class="list-inline answer-btn-list">
            <li><a href="javascript:void(0);">{{ $post->total_comments}} Comment</a></li>
            <li><a href="javascript:void(0);">&nbsp;{{$post->total_views}} Views </a></li>
            @auth
                <li><a href="{{route('website.knowledge.details.post',['id' =>  $enc_id])}}">Add Comment</a></li>
            @endauth
            @guest
                <li><a data-toggle="modal" data-target="#login-modal" style="cursor: pointer;">Add Comment</a></li>
            @endguest
            <li style="border-right:none;border-left:2px solid #ddd;">
                <a href="javascript:void(0);"  data-toggle="modal" data-target="#sharePostModal">
                <i class="fa fa-share" aria-hidden="true"></i> &nbsp; Share</a>
            </li>
        </ul>
    </div>
</li>
@endforeach
