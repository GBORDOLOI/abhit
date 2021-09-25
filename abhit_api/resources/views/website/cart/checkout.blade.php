@extends('layout.website.website')

@section('title', 'Checkout')

@section('head')
@endsection

@section('content')
    <section class="check-describtion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    <ul class="list-inline cart-desc-list1">
                        <li>
                            <div class="cart-box">
                                <h4 data-brackets-id="12020" class="small-heading-black mb20">Checkout</h4>

                                <form action="#" class="payment">
                                    <p>
                                        <input type="radio" id="test1" name="radio-group" checked>
                                        <label for="test1">Credit or Debit Card
                                            <ul class="list-inline payment-cart-list">
                                                <li><img src="{{asset('asset_website/img/cart/american-express.png')}}" class="w100">
                                                </li>
                                                <li><img src="{{asset('asset_website/img/cart/mastercard.png')}}" class="w100"></li>
                                                <li><img src="{{asset('asset_website/img/cart/rupay.png')}}" class="w100"></li>
                                                <li><img src="{{asset('asset_website/img/cart/visa.png')}}" class="w100"></li>
                                            </ul>
                                        </label>
                                    </p>
                                    <p>
                                        <input type="radio" id="test2" name="radio-group">
                                        <label for="test2">Net Banking</label>
                                    </p>
                                    <!-- if a card is already save then the below code will be shown otherwise it is hidden-->

                                    <div class="saved-card">
                                        <label class="box3 "><span class="f14">ICICI CREDIT
                                                CARD5267-</span> <br />
                                            <span class="f12">XXXXXXXX-3499 </span><br />
                                            <span class="f10">VALID TILL 08/23</span>
                                            <input type="checkbox" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- if you select vredit/debit card below form-div2 will be shown-->
                                    <div class="row form-div2" action="">
                                        <div class="col-lg-6">
                                            <div class="form-group col-lg-12  p0">
                                                <input type="text" class="form-control" placeholder="Name on Card"
                                                    id="name2">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-6 month">
                                                    <input type="number" class="form-control" placeholder="MM" id="month">
                                                </div>
                                                <div class="form-group col-lg-6 col-6 year">
                                                    <input type="number" class="form-control" placeholder="YYYY"
                                                        id="year">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="form-group col-lg-12  p0">
                                                <input type="text" class="form-control" placeholder="Card Number"
                                                    id="p_number1">
                                            </div>
                                            <div class="form-group col-lg-12  p0">
                                                <input type="text" class="form-control" placeholder="Security Code/CVV"
                                                    id="cvv">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="box2 ">Save this card
                                                <input type="checkbox" id="">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <!-- if you select net-banking-->
                                        <div class="col-lg-12">
                                            <p>Select your bank from the drop-down list and click proceed to continue
                                                with your payment</p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="select">
                                                <div class="selectBtn" data-type="planningStage">Please choose bank
                                                </div>
                                                <div class="selectDropdown">
                                                    <div class="option" data-type="abc">abc</div>
                                                    <div class="option" data-type="xyz">xyz</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-block knowledge-link-old">Pay
                                                ₹15000</button>
                                        </div>

                                        <!-- After filling up the form and after save this card button class will me change knowledge-link-old to  knowledge-link-new. knowledge-link-new is already added in the css.-->
                                    </div>


                                </form>
                            </div>

                        </li>
                        <li class="">

                        <div class=" course-desc-list-right">
                            <h4 data-brackets-id="12020" class="small-heading-black mb20">Order Summary</h4>
                            <ul class="list-inline cart-course-list">
                                <li>
                                    <div class="cart-course-image"><img src="{{asset('asset_website/img/cart/image.png')}}"
                                            class="w100"></div>
                                    <div class="cart-course-desc">
                                        <h4 data-brackets-id="12020" class="small-heading-black mb20">Chemistry</h4>
                                        <p>Basic understanding of chemistry
                                            and maths.</p>
                                        <span class="course-price2"><i class="fa fa-inr"
                                                aria-hidden="true"></i>5000</span>
                                        <div class="dropdown course-tooltip">
                                            <button class="dropbtn">Full Course<span><i class="fa fa-info-circle ml5"
                                                        aria-hidden="true"></i></span></button>
                                            <div class="dropdown-content box arrow-top">
                                                <div class="scrollbar" id="style-1">
                                                    <div class="force-overflow">
                                                        <h6>Lessons</h6>
                                                        <ul class="list-inline tooltip-course-list">
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Aldehydes, Ketones and
                                                                Carboxylic Acids
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Alcohols, Phenols and
                                                                Ethers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Haloalkanes and
                                                                Haloarenes
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Biomolecules
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Polymers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemistry in Everyday
                                                                Life
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>d and f- Block
                                                                Elements
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Electrochemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemical Kinetics
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Surface Chemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Solutions
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-course-image"><img src="{{asset('asset_website/img/cart/image.png')}}"
                                            class="w100"></div>
                                    <div class="cart-course-desc">
                                        <h4 data-brackets-id="12020" class="small-heading-black mb20">Chemistry</h4>
                                        <p>Basic understanding of chemistry
                                            and maths.</p>
                                        <span class="course-price2"><i class="fa fa-inr"
                                                aria-hidden="true"></i>5000</span>
                                        <div class="dropdown course-tooltip">
                                            <button class="dropbtn">Full Course<span><i class="fa fa-info-circle ml5"
                                                        aria-hidden="true"></i></span></button>
                                            <div class="dropdown-content box arrow-top">
                                                <div class="scrollbar" id="style-1">
                                                    <div class="force-overflow">
                                                        <h6>Lessons</h6>
                                                        <ul class="list-inline tooltip-course-list">
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Aldehydes, Ketones and
                                                                Carboxylic Acids
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Alcohols, Phenols and
                                                                Ethers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Haloalkanes and
                                                                Haloarenes
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Biomolecules
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Polymers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemistry in Everyday
                                                                Life
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>d and f- Block
                                                                Elements
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Electrochemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemical Kinetics
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Surface Chemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Solutions
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-course-image"><img src="{{asset('asset_website/img/cart/image.png')}}"
                                            class="w100"></div>
                                    <div class="cart-course-desc">
                                        <h4 data-brackets-id="12020" class="small-heading-black mb20">Chemistry</h4>
                                        <p>Basic understanding of chemistry
                                            and maths.</p>
                                        <span class="course-price2"><i class="fa fa-inr"
                                                aria-hidden="true"></i>5000</span>
                                        <div class="dropdown course-tooltip">
                                            <button class="dropbtn">Full Course<span><i
                                                        class="fa fa-info-circle ml5"
                                                        aria-hidden="true"></i></span></button>
                                            <div class="dropdown-content box arrow-top">
                                                <div class="scrollbar" id="style-1">
                                                    <div class="force-overflow">
                                                        <h6>Lessons</h6>
                                                        <ul class="list-inline tooltip-course-list">
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Aldehydes, Ketones and
                                                                Carboxylic Acids
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Alcohols, Phenols and
                                                                Ethers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Haloalkanes and
                                                                Haloarenes
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Biomolecules
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Polymers
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemistry in Everyday
                                                                Life
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>d and f- Block
                                                                Elements
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Electrochemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Chemical Kinetics
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Surface Chemistry
                                                            </li>
                                                            <li>
                                                                <span class="star"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></span>Solutions
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="coupon-form" role="search" method="GET" action="">
                                <div class="input-group add-on">
                                    <input class="form-control" placeholder="Discount Code" name="Discount_Code"
                                        id="Discount Code" type="text">
                                    <div class="input-group-btn">
                                        <button id="btn_code" class="btn-code-old" type="button">Apply</button>
                                    </div>
                                    <!-- after filling the input by coupon code button class will be change from btn-code-old to btn-code-new. btn-code-new is already added in the css-->
                                </div>
                            </form>
                            <ul class="list-inline price-section">
                                <li class="">
                                    <p class=" mb0">Original price:</p>
                                    <span class="original-price"><i class="fa fa-inr"
                                            aria-hidden="true"></i>5000</span>
                                </li>
                                <!-- after coupon is applied the discounted price will be shown here-->
                                <li class="">
                                    <p class=" mb0">Discount Code:</p>
                                    <span class="original-price"><i class="fa fa-inr"
                                            aria-hidden="true"></i>5000</span>
                                </li>
                            </ul>

                            <div class="total1">
                                <p class=""><b>Total</b></p>
                                <span class=" course-price1">
                                    <i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                            </div>
                </div>
                </li>
                </ul>
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

<script>
    const select = document.querySelectorAll('.selectBtn');
    const option = document.querySelectorAll('.option');
    let index = 1;

    select.forEach(a => {
        a.addEventListener('click', b => {
            const next = b.target.nextElementSibling;
            next.classList.toggle('toggle');
            next.style.zIndex = index++;
        })
    })
    option.forEach(a => {
        a.addEventListener('click', b => {
            b.target.parentElement.classList.remove('toggle');

            const parent = b.target.closest('.select').children[0];
            parent.setAttribute('data-type', b.target.getAttribute('data-type'));
            parent.innerText = b.target.innerText;
        })
    })
</script>
@endsection
