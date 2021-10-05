@extends('layout.admin.layoout.admin')

@section('title', 'Blog')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-book"></i>
            </span> Read Blog
        </h3>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4 text-center">Blog title</h3>
                {{-- Blog image --}}
                <div class="text-center">
                    <img class="rounded" src="{{ asset('asset_admin/images/faces/face1.jpg') }}" height="500" alt="">
                </div>

                <p class="mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
            </div>
    </div>


@endsection


{{-- scripts --}}
@section('scripts')
@endsection