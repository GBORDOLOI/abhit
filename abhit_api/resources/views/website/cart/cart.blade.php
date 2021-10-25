
@extends('layout.website.website')

@section('title','Cart')

@section('head')
@endsection

@section('content')
<section class="cart">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="heading-black mb0">Cart({{$countItemInsideCart}})</h2>
            </div>
        </div>
    </div>
</section>

<section class="cart-describtion">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <ul class="list-inline cart-course-list1">
                    @forelse ($cartCourse as $item)
                    <li>
                        <div class="cart-course-image1"><img src="{{asset($item->course->course_pic)}}" class="w100"></div>
                        <div class="cart-course-desc">
                            <h4 data-brackets-id="12020" class="small-heading-black">{{$item->course->name}}</h4>
                            <p>{{$item->course->description}}</p>
                            
                            <div class="dropdown course-tooltip">
                                <button class="dropbtn">Course Item Details<span><i class="fa fa-info-circle ml5" aria-hidden="true"></i></span></button>
                                <div class="dropdown-content box arrow-top">
                                    <div class="scrollbar" id="style-1">
                                        <div class="force-overflow">
                                            <h6>Lessons</h6>
                                            <ul class="list-inline tooltip-course-list">
                                                {{-- @foreach ($getChapter as $chapter)
                                                <li>
                                                    <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>{{$chapter->name}}
                                                </li>
                                                @endforeach --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="course-price2"><i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                            <div class="mt10"><a href="#" class="remove">Remove</a></div>
                        </div>
                       
                    </li>
                    @empty
                        <h4>Cart Empty !</h4>
                    @endforelse
                </ul>
                <div class="shipping-div text-center"><a href="{{route('website.course')}}" target="_blank" class="shipping-btn">Continue shoping</a></div>
                
            </div>
            <div class="col-lg-4">
                <div class="cart-checkout">
                    <label>Total:</label>
                    <h2 class="heading-black mb20"><i class="fa fa-inr" aria-hidden="true"></i>5000</h2>
                       <a href="{{route('website.checkout')}}" class="btn btn-block knowledge-link-new">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection
