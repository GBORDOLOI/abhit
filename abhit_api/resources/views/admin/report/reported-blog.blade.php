@extends('layout.admin.layoout.admin')

@section('title', 'Reported Blog')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi  mdi-alert menu-icon"></i>
            </span> Reported Blogs
        </h3>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Subjects List</h4> --}}
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Blog Name </th>
                            <th>Number Of Reports</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reportedBlogs as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td>{{ $item->blogs->name }}</td>
                                <td>{{ $item->report_count }}</td>
                                <td>
                                    @if ($item->is_activate == 1)
                                        <label class="switch">
                                            <input type="checkbox" id="blogStatusUpdate" data-id="{{ $item->blogs_id }}" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    @else
                                        <label class="switch">
                                            <input type="checkbox" id="blogStatusUpdate" data-id="{{ $item->blogs_id }}">
                                            <span class="slider round"></span>
                                        </label>
                                    @endif
                                </td> 
                            </tr>
                        @empty 
                            <tr>
                                <td colspan="6">
                                    <div class="text-center">No Reported Blogs Found.</div>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

{{-- scripts --}}
@section('scripts')
    
<script>
    $(document.body).on('change', '#blogStatusUpdate', function() {
        let status = $(this).prop('checked') == true ? 1 : 0;
        let blog_id = $(this).data('id');
        let formData = {
            'blog_id': blog_id,
            'active': status
        }
        $.ajax({
            type: "post",

            url: "{{ route('website.blog.report.remove') }}",
            data: formData,

            success: function(result) {
               toastr.success(result.message)
            },
            error:function(xhr, status, error){
                if(xhr.status == 500 || xhr.status == 422){
                    toastr.error('Oops! Something went wrong while reporting.');
                }
            }
        });
    });
</script>
@endsection
