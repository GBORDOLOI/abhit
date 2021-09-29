@extends('layout.website.website')

@section('content')

<section class="subheader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p0">
                <div class="subheader-image"><img src="{{asset('asset_website/img/course/banner.png')}}" class="w100"></div>
                <div class="subheader-image-desc">
                    <h2 class="heading-black">Our Courses<br>
                        <span class="heading-blue">Study Beyond The Classroom</span></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-courses">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="heading-black">All Course</h2>
            </div>
            <div class="col-lg-5 p0">
                <ul class="list-inline course-btn-list">
                    <li>
                        <div class="course-select">
                            <div class="selectBtn" data-type="planningStage">Subjects</div>
                            <div class="selectDropdown">
                                <div class="option" data-type="Subjects">-- Select Subjects --</div>
                                @foreach ($subjects as $item)
                                    <div class="option" data-type="{{$item->name}}">{{$item->name}}</div>
                                @endforeach
                                {{-- <div class="option" data-type="physics">Physics</div>
                                <div class="option" data-type="chemistry">Chemistry</div>
                                <div class="option" data-type="biology">Biology</div>
                                <div class="option" data-type="mathematics">Mathematics</div>
                                <div class="option" data-type="english_core">English Core</div>
                                <div class="option" data-type="english_elective">English Elective</div>
                                <div class="option" data-type="computer_science">Computer Science</div>
                                <div class="option" data-type="informatics_practices">Informatics Practices</div>
                                <div class="option" data-type="history">History</div>
                                <div class="option" data-type="geography">Geography</div>
                                <div class="option" data-type="political_science">Political Science</div>
                                <div class="option" data-type="economics">Economics</div>
                                <div class="option" data-type="accountancy">Accountancy</div>
                                <div class="option" data-type="business_studies">Business Studies</div>
                                <div class="option" data-type="idian_society">Sociology: Indian Society</div> --}}
                            </div>
                        </div>
                    </li>
                    <li><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search Course">
                    </li>
                </ul>
            </div>
            <div class="col-lg-12  p0">
                <ul class="list-inline courses-list">
                    @foreach ($publishCourse as $item)
                    <li>
                        <div class="course-pic"><img src="{{asset($item['course_pic'])}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">{{$item['name']}}</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details',['id'=>\Crypt::encrypt($item['id'])])}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>

                    @endforeach

                    {{-- <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image2.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Chemistry</h4></div>
                            <span>₹3399</span>
                           <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image3.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Biology</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image4.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">English Core</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image5.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">English Elective</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image6.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Computer Science</h4></div>
                            <span>₹3399</span>
                           <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image7.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Informatics Practices</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image8.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">History</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image9.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Geography</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image10.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Political Science</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image11.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Economics</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li>
                    <li>
                        <div class="course-pic"><img src="{{asset('asset_website/img/course/image12.png')}}" class="w100"></div>
                        <div class="course-desc"><span class="icon-clock-09 clock-icon"></span><span>10-15 Weeks</span>
                            <div class="block-ellipsis5"><h4 class="small-heading-black">Accountancy</h4></div>
                            <span>₹3399</span>
                            <a href="{{route('website.course.details')}}" target="_blank" class="enroll">Enroll now</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

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

            const parent = b.target.closest('.course-select').children[0];
            parent.setAttribute('data-type', b.target.getAttribute('data-type'));
            parent.innerText = b.target.getAttribute('data-type');
        })
    })
</script>

@endsection
