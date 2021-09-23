@extends('layout.admin.layoout.admin')



@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Subject</h4>
        <form class="forms-sample" action="{{route('admin.creating.subject')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="subject_name" name="name" placeholder="Enter Subject Name">
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

