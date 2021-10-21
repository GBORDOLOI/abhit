@forelse ($multiChoice as $item)
    <ol class="pl15" type="">
        <li>
            <h4 data-brackets-id="3991" class="small-heading-black mb20">{{$item->question}}</h4>
            <div>
                <ul class="list-inline pl-0">
                    <li>
                        <input type="radio" id="test1" name="radio-group" value="{{$item->answer_1}}">
                        <label for="test1"><span>(A)</span> {{$item->answer_1}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test2" name="radio-group" value="{{$item->answer_2}}">
                        <label for="test2"><span>(B)</span>  {{$item->answer_2}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test3" name="radio-group" value="{{$item->answer_3}}">
                        <label for="test3"><span>(C)</span>  {{$item->answer_3}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test4" name="radio-group" value="{{$item->answer_4}}">
                        <label for="test4"><span>(D)</span> {{$item->answer_4}} </label>
                    </li>
                </ul>
            </div>
        </li>
    </ol>
@empty
    <div class="text-center">
        No MCQ's Found
    </div>
@endforelse

<div class="mcq-page-link">
    <a href="{{ $multiChoice->nextPageUrl() }}" class="knowledge-link">Next</a>
</div>