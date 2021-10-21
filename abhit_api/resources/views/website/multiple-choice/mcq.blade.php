@forelse ($multiChoice as $key => $item)
    <ol class="pl15" type="" style="list-style-type: square;">
        <li>
            <h4 data-brackets-id="3991" class="small-heading-black mb20">{{$item->question}}</h4>
            <div>
                <ul class="list-inline pl-0">
                    <li>
                        <input type="radio" id="test1" name="radio-group" value="{{$item->option_1}}">
                        <label for="test1"><span>(A)</span> {{$item->option_1}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test2" name="radio-group" value="{{$item->option_2}}">
                        <label for="test2"><span>(B)</span>  {{$item->option_2}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test3" name="radio-group" value="{{$item->option_3}}">
                        <label for="test3"><span>(C)</span>  {{$item->option_3}} </label>
                    </li>
                    <li>
                        <input type="radio" id="test4" name="radio-group" value="{{$item->option_4}}">
                        <label for="test4"><span>(D)</span> {{$item->option_4}} </label>
                    </li>
                </ul>
            </div>
        </li>
    </ol>
    <div class="check-result text-center" style="display:none;">
        <button class="btn btn-success">Check Result</button>
    </div>
    

    <div class="mcq-page-link">
        @if($multiChoice->hasMorePages() == false)
            <div class="text-center">
                <button class="btn btn-success" >Submit</button>
            </div>
        @else
            <a href="{{ $multiChoice->nextPageUrl() }}" class="knowledge-link">Next</a>
        @endif
    </div>
@empty
    <div class="text-center">
        No MCQ's Found
    </div>
@endforelse

