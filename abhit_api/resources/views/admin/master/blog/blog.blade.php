@extends('layout.admin.layoout.admin')

@section('title', 'Blog')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-book"></i>
            </span> Blogs
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.create.blog') }}" class="btn btn-gradient-primary btn-fw">Add Blog</a>
                    {{-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> --}}
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-md-12">
        <div class="row">
            {{-- Loop starts --}}
            @for ($i = 0; $i < 9; $i++)              
            <div class="col-md-4 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="action-buttons">
                            {{-- Status --}}
                            <label class="switch">
                                <input type="checkbox" id="testingUpdate" data-id="1" checked>
                                <span class="slider round"></span>
                            </label>

                            {{-- Edit --}}
                            <a href="#"
                                class="btn btn-gradient-primary btn-rounded btn-icon anchor_rounded float-right mb-3">
                                <i class="mdi mdi-pencil-outline"></i>
                            </a>
                        </div>

                        {{-- Blog image --}}
                        <img src="{{ asset('asset_admin/images/faces/face1.jpg') }}" width="100%" alt="">

                        {{-- Small description --}}
                        <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            <span><a href="{{route('admin.read.blog')}}">Read more...</a></span>
                        </p>
                    </div>
                </div>
            </div>
            {{-- Loop ends --}}
            @endfor
        </div>
    </div>

@endsection

{{-- scripts --}}
@section('scripts')
@endsection
