@php
use App\Models\Subject;
use App\Common\Activation;

$subjects = Subject::where('is_activate', Activation::Activate)
    ->orderBy('id', 'DESC')
    ->get();

@endphp

@extends('layout.admin.layoout.admin')

@section('title', 'Add Multiple Choice')

@section('head')

    <script src="{{ asset('asset_admin/ckeditor/ckeditor.js') }}"></script>

    <link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">

    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css' rel='stylesheet'>


@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Multiple Choice Question</h4>
                <form id="createCourse" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleSelectGender">Select Subjects</label>
                        <select class="form-control" name="subject_id">
                            <option value="" disabled selected>-- Select Subject --</option>
                            @foreach ($subjects as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger" id="subject_id_error"></span>
                    </div>
                    <div class="after-add-more">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputName1">Question</label>
                                    <input type="text" class="form-control" name="question[]" placeholder="e.g what is the unit of temperature ?">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success" style="margin-top:23px;" id="addMoreMultipleChoice">Add More</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer 1</label>
                                    <input type="text" class="form-control" name="answer1[]" placeholder="e.g Celcius">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer 2</label>
                                    <input type="text" class="form-control" name="answer2[]" placeholder="e.g Hertz">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer 3</label>
                                    <input type="text" class="form-control" name="answer3[]" placeholder="e.g Pascal">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer 4</label>
                                    <input type="text" class="form-control" name="answer4[]" placeholder="e.g Kelvin">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copy" style="display: none;">
                        <div class="control-group">
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Question</label>
                                        <input type="text" class="form-control" name="question[]" placeholder="e.g what is the unit of temperature ?">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger" style="margin-top:23px;" id="removeMultipleChoice">remove</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Answer 1</label>
                                        <input type="text" class="form-control" name="answer1[]" placeholder="e.g Celcius">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Answer 2</label>
                                        <input type="text" class="form-control" name="answer2[]" placeholder="e.g Hertz">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Answer 3</label>
                                        <input type="text" class="form-control" name="answer3[]" placeholder="e.g Pascal">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Answer 4</label>
                                        <input type="text" class="form-control" name="answer4[]" placeholder="e.g Kelvin">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $('#addMoreMultipleChoice').click(function(e){
                e.preventDefault();
                let html = $(".copy").html();
                $(".after-add-more").append(html);
            });

            $("body").on("click","#removeMultipleChoice",function(){ 
                $(this).parents(".control-group").remove();
            });
        });
        
    </script>

@endsection
