@extends('layout.website.website')

@section('title', 'Gallery')

@section('head')
    <link href="{{ asset('asset_website/css/jquery.fancybox.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading-black mb0">Gallery</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p0">
                    <div class="galleryWrap">
                        <ul class="list-inline gallery-list" id="portfoliolist">
                            @foreach ($gallery as $item)
                                <li class="portfolio">
                                    <a href="{{ asset($item->gallery) }}"
                                        class='portfolio- cwrapper fancybox imgContainer' data-fancybox="images"
                                        data-fancybox-group='image-gallery'>
                                        <img src="{{ asset($item->gallery) }}"/>
                                    </a>
                                </li>
                            @endforeach


                            {{-- <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image2.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image2.jpg') }}" class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image3.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image3.jpg') }}" class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image4.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image4.jpg') }}" class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image5.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image5.jpg') }}"
                                        class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image6.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image6.jpg') }}"
                                        class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image7.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image7.jpg') }}"
                                        class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image8.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image8.jpg') }}"
                                        class="w100" />
                                </a>
                            </li>
                            <li class="portfolio">
                                <a href="{{ asset('asset_website/img/gallery/image9.jpg') }}"
                                    class='portfolio-wrapper fancybox imgContainer' data-fancybox="images"
                                    data-fancybox-group='image-gallery'>
                                    <img src="{{ asset('asset_website/img/gallery/image9.jpg') }}"
                                        class="w100" />
                                </a>
                            </li> --}}

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('asset_website/js/jquery.fancybox.js') }}"></script>
    <script type="text/javascript">
        $('[data-fancybox="images"]').fancybox({
            thumbs: {
                autoStart: true
            }
        });
        $('[data-fancybox="images1"]').fancybox({
            thumbs: {
                autoStart: true
            }
        });
    </script>
@endsection
