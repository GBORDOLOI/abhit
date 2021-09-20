@extends('layout.admin.layoout.admin')

@section('head')

<link rel="stylesheet"
href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Course</h4>
        <form class="forms-sample" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Categories</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Phyics</option>
              <option>Chemistry</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword4">Price</label>
            <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Enter Price">
          </div>

          <div class="form-group">
            <label>File upload</label>
            <input type="file" class="filepond" name="pic" id="course_pic" data-max-file-size="1MB" data-max-files="1" />
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Publish Date</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Publish Date">
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">Publish Time</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Publish Time">
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js">
</script>
<script
    src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>


<script>
    FilePond.registerPlugin(

        // encodes the file as base64 data
        FilePondPluginFileEncode,

        // validates the size of the file
        FilePondPluginFileValidateSize,

        // corrects mobile image orientation
        FilePondPluginImageExifOrientation,

        // previews dropped images
        FilePondPluginImagePreview
    );

    // Select the file input and use create() to turn it into a pond
    pond = FilePond.create(
        document.getElementById('course_pic'), {
            allowMultiple: true,
            maxFiles: 5,
            instantUpload: false,
            imagePreviewHeight: 135,
            labelIdle: '<div style="width:100%;height:100%;"><p> Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span><br> Maximum number of image is 1 :</p> </div>',
            // files: [{
            //     source: "{{asset('site/img/icons/check.png')}}",
            // }]
        }
    );

    $("#createFormData").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var formdata = new FormData(this);

        pondFiles = pond.getFiles();
        for (var i = 0; i < pondFiles.length; i++) {
            // append the blob file
            formdata.append('pic[]', pondFiles[i].file);
        }


        $.ajax({

            type: "POST",
            url: "#",
            // data: form.serialize(), // serializes the form's elements.
            data: formdata,
            processData: false,
            contentType: false,
            statusCode: {
                422: function(data) {
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors.errors, function(key, val) {
                        $("#" + key + "_error").empty();
                    });
                    $.each(errors.errors, function(key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });

                },
                200: function() {
                    alert('200 status code! success');
                },
                500: function() {
                    alert('500 someting went wrong');
                }
            }
        });


    })
    // $('.input-images').imageUploader();
</script>

@endsection
