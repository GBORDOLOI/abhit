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
                            <li class="breadcrumb-item active" aria-current="page">Chemistry</li>
                        </ol>
                    </nav>
                    <h2 class="heading-white">Chemistry</h2>
                    <p>Basic understanding of chemistry and maths</p>
                    <div class="text-box"><a data-toggle="modal" data-target="#add-test-modal" class="mcq-test" style="cursor: pointer">MCQ Test</a></div>
                </div>
            </div>
            <div class="col-lg-6 p0">
                <div class="subheader1-img">
                    <img src="{{asset('asset_website/img/home/image2.jpg')}}" class="w100">
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
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                            ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum
                            iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae </p>

                        <div class="form-div1">
                            <h4 data-brackets-id="12020" class="small-heading-black mb20">Enquiry</h4>
                            <form class="row" action="">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" id="name1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" id="p_number1">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Id" id="email1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Message" id="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-block knowledge-link">Send</button>
                                </div>


                            </form>
                        </div>
                    </li>
                    <li class="">

                        <div class="course-desc-list1">
                            <label class="box1 ">Full Course
                                <input type="checkbox" id="select-all">
                                <span class="checkmark"></span>
                            </label>
                            <h5 class="small-heading-black mt15 mb20">Select Lesson</h5>

                            <ul class="list-inline centered">
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                    <label for="styled-checkbox-1">Aldehydes, Ketones and Carboxylic Acids</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2">
                                    <label for="styled-checkbox-2">Alcohols, Phenols and Ethers</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value3">
                                    <label for="styled-checkbox-3">Haloalkanes and Haloarenes</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
                                    <label for="styled-checkbox-4">Biomolecules</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value5">
                                    <label for="styled-checkbox-5">Polymers</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value6">
                                    <label for="styled-checkbox-6">Chemistry in Everyday Life</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
                                    <label for="styled-checkbox-7">d and f- Block Elements</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                                    <label for="styled-checkbox-8">Electrochemistry</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-9" type="checkbox" value="value9">
                                    <label for="styled-checkbox-9">Chemical Kinetics</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-10" type="checkbox" value="value10">
                                    <label for="styled-checkbox-10">Surface Chemistry</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox" value="value11">
                                    <label for="styled-checkbox-11">Solutions</label>
                                    <span class="course-price"><i class="fa fa-inr" aria-hidden="true"></i>500</span>
                                </li>
                            </ul>
                            <div class="total">
                                <p class=""><b>Total</b></p>
                                <span class="course-price1"><i class="fa fa-inr" aria-hidden="true"></i>5000</span>
                            </div>
                            <div class="total-cart">
                                <ul class="list-inline total-car-list">
                                    <li><a href="#" class="add-cart">Add to Cart</a></li>
                                    <li><a href="#" class="enquiry">Enquiry Now</a></li>
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
                    <p class="modal-sub-head-right">Time Left : <b>15:00 Mins</b></p><button type="button" class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>
                </div>


                <!-- Modal body -->
                <div class="modal-body">
                    <ol class="pl15" type="1">
                        <li>
                            <h4 data-brackets-id="3991" class="small-heading-black mb20">The main source of chemicals which are used in
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
    var selectAllItems = "#select-all";
    var checkboxItem = ":checkbox";

    $(selectAllItems).click(function() {

        if (this.checked) {
            $(checkboxItem).each(function() {
                this.checked = true;
            });
        } else {
            $(checkboxItem).each(function() {
                this.checked = false;
            });
        }

    });
</script>
@endsection
