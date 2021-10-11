<script>
    CKEDITOR.replace( 'editorQuestion');


    $('#signupForm').on('submit',function(e){
        e.preventDefault();

        $('#signupBtn').text('Please wait...');

        let pass = $('#pwd').val();
        let confirm_pass = $('#confPwd').val();

        if(pass != confirm_pass){
            toastr.error('Oops! password not matched');
            $('#signupBtn').text('Sign up');
        }else if(pass.length < 5 ){
            toastr.error('Oops! password must be 5 characters long');
            $('#signupBtn').text('Sign up');
        }else{
            $.ajax({
                url:"{{route('website.auth.signup')}}",
                type:"POST",
                data:$('#signupForm').serialize(),
                success:function(data){
                    toastr.success(data.message);
                    $('#signupForm')['0'].reset();
                    $('#signupBtn').text('Sign up');

                },
                error: function(xhr, status, error) {
                    if(xhr.status == 500 || xhr.status == 422){
                        toastr.error('Oops! something went wrong');
                    }
                    $('#signupForm')['0'].reset();
                    $('#signupBtn').text('Sign up');
                }

            });
        }

    })

    /********************** Knowledge Form Submit ************************/

    $('#knowledgeQuestionForm').on('submit',function(e){
        e.preventDefault();

        let question = $('#questionAsk').val();
        let editorQuestion = CKEDITOR.instances.editorQuestion.document.getBody().getText();
        let questionLink = $('#questionLink').val();

        $('#addQuestionBtn').text('Please wait...');

        if(editorQuestion.length <= 1){
            toastr.error('Description is required');
            $('#addQuestionBtn').text('Add Question');
        }else{
            $.ajax({
                url:"{{route('website.add.knowledge.question')}}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'question' : question,
                    'description' : editorQuestion,
                    'link' : questionLink,
                },
                success:function(data){
                    toastr.success(data.message);
                    $('#knowledgeQuestionForm')[0].reset();
                    CKEDITOR.instances.editorQuestion.setData('');
                    $('#addQuestionBtn').text('Add Question');
                    $('#add-question-modal').modal('hide');
                    location.reload(true);

                },
                error:function(xhr, status, error){
                    if(xhr.status == 500 || xhr.status == 422){
                        toastr.error('Oops! something went wrong');
                    }
                    $('#addQuestionBtn').text('Add Question');
                }
            });
        }

    });

    $('#cancelAddQuestionBtn').on('click',function(){
        $('#knowledgeQuestionForm')[0].reset();
        CKEDITOR.instances.editorQuestion.setData('');
    });
</script>