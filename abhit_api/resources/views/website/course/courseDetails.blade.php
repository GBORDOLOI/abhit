@extends('layout.website.website')

@section('content')

    <section class="subheader1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p0">
                    <div class="subheader1-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="course.html">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $course->subject->name }}</li>
                            </ol>
                        </nav>
                        <h2 class="heading-white">{{ $course->subject->name }}</h2>
                        <p>{{ $course->name }}</p>
                        <div class="text-box"><a data-toggle="modal" data-target="#add-test-modal"
                                class="mcq-test" style="cursor: pointer">MCQ Test</a></div>
                    </div>
                </div>
                <div class="col-lg-6 p0">
                    <div class="subheader1-img">
                        <img src="{{ asset($course->course_pic) }}" class="w100">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="course-describtion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    <ul class="list-inline course-desc-list">
                        <li>
                            <h4 data-brackets-id="12020" class="small-heading-black mb20">Description</h4>
                            <p>{!!$course->description ?? 'Desciption not given'!!}</p>

                            <div class="form-div1 mt-5">
                                <h4 data-brackets-id="12020" class="small-heading-black mb20">Enquiry</h4>
                                <form class="row" action="">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" id="name1">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number"
                                                id="p_number1">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Id" id="email1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-md-0">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Message"
                                                id="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-block knowledge-link">Send</button>
                                    </div>


                                </form>
                            </div>
                        </li>
                        <li class="">

                        <div class=" course-desc-list1">
                            <label class="box1 ">Full Course
                                <input type="checkbox" data-price="0.00" id="select-all">
                                <span class="checkmark"></span>
                            </label>
                            <h5 class="small-heading-black mt15 mb20">Select Lesson</h5>
                            <ul class="list-inline centered">
                                @foreach ($chapters as $key => $item)
                                    <li>
                                        <input class="styled-checkbox item_price" id="styled-checkbox-{{ $key + 1 }}"
                                            data-price="{{ $item->price }}" type="checkbox"
                                            value="value{{ $key + 1 }}">
                                        <label for="styled-checkbox-{{ $key + 1 }}">{{ $item->name }}</label>
                                        <span class="course-price mr-2"><i class="fa fa-inr"
                                                aria-hidden="true"></i>{{ $item->price }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="total">
                                <p class=""><b>Total</b></p>
                                <span class=" course-price1 mr-2"
                                    id="total_price"><i class="fa fa-inr" aria-hidden="true"></i>0.00</span>
                            </div>
                            <div class="total-cart">
                                <ul class="list-inline total-car-list">
                                    <li class="mr-md-3"><button class="add-cart form-control" id="add_cart">Add to Cart</button></li>
                                    <li><a href="#" class="text-center enquiry form-control">Buy Now</a></li>
                                </ul>
                            </div>
                </div>
                </li>
                </ul>
            </div>
        </div>
        </div>
    </section>


    <!-- The Modal -->
    <div class="modal" id="add-test-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-heading">
                    <h2 class="heading-mcq ">MCQ Test</h2>
                    <p class="modal-sub-head-left">Question 1/15</p>
                    <p class="modal-sub-head-right">Time Left : <b>15:00 Mins</b></p><button type="button"
                        class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>
                </div>


                <!-- Modal body -->
                <div class="modal-body">
                    <ol class="pl15" type="1">
                        <li>
                            <h4 data-brackets-id="3991" class="small-heading-black mb20">The main source of chemicals which
                                are used in
                                industries is</h4>
                            <div>
                                <ul class="list-inline pl-0">
                                    <li>
                                        <input type="radio" id="test1" name="radio-group" checked>
                                        <label for="test1"><span>(A)</span> Coke </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="test2" name="radio-group">
                                        <label for="test2"><span>(B)</span> Peat </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="test3" name="radio-group">
                                        <label for="test3"><span>(C)</span> Coal tar </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="test4" name="radio-group">
                                        <label for="test4"><span>(D)</span> Liquefied Petroleum Gas </label>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                    <div class="btn-box-test">
                        <a href="#" class="btn btn-block add-question">Next</a>

                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $('#add_cart').prop('disabled', true);
        $("#add_cart").css("background-color", "grey");
        var selectAllItems = "#select-all";
        var checkboxItem = '.item_price';

        var allPrice = 0.00;
        $(selectAllItems).click(function() {
            allPrice = 0.00

            if (this.checked) {
                $(checkboxItem).each(function() {
                    this.checked = true;
                    allPrice = parseFloat(allPrice) + parseFloat($(this).attr("data-price"));
                    $('#total_price').html('<i class="fa fa-inr" aria-hidden="true"></i>' + allPrice)
                    console.log($(this).attr("data-price"));
                    $('#add_cart').prop('disabled', false)
                    $("#add_cart").css("background-color", "#3ac162");
                });
                console.log(parseFloat(allPrice))
            } else {
                $(checkboxItem).each(function() {
                    this.checked = false;
                    allPrice = 0.00
                    $('#total_price').html('<i class="fa fa-inr" aria-hidden="true"></i>' + allPrice)
                    $('#add_cart').prop('disabled', true)
                    $("#add_cart").css("background-color", "grey");

                });
            }

        });

        $(checkboxItem).change(function() {
            if (this.checked) {
                allPrice = parseFloat(allPrice) + parseFloat($(this).attr("data-price"));
                $('#total_price').html('<i class="fa fa-inr" aria-hidden="true"></i>' + allPrice)
                $('#add_cart').prop('disabled', false)
                $("#add_cart").css("background-color", "#3ac162");
            } else {
                allPrice = parseFloat(allPrice) - parseFloat($(this).attr("data-price"));
                $('#total_price').html('<i class="fa fa-inr" aria-hidden="true"></i>' + allPrice)
                if (allPrice == 0) {
                    $('#add_cart').prop('disabled', true)
                    $("#add_cart").css("background-color", "grey");
                } else {
                    $('#add_cart').prop('disabled', false)
                    $("#add_cart").css("background-color", "#3ac162");
                }
            }
        });
    </script>
@endsection
