<!-- The Modal -->
<div class="modal" id="add-question-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <h4 class="modal-title">Add Question</h4>
            <button type="button" class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>


            <!-- Modal body -->
            <div class="modal-body">
                <div class="tips">
                    <h6 class="mb0">Tips on getting good answer quickly</h6>
                    <ul class="pl15 mb0">
                        <li>Make sure you question has not been asked already</li>
                        <li>Keep you question short and to the point</li>
                        <li>Double check grammer and spelling</li>
                    </ul>
                </div>
                <div>
                    <span class="knowledge-profile"><img src="assets/img/knowladge-forum/image4.png"></span>
                    <h6 class="knowledge-text">Himadri Shekhar Das</h6>
                </div>
                <div class="question-modal">
                    <form class="row">
                        <div class="form-group col-lg-12 mb0">
                            <textarea class="form-control" rows="1" placeholder="Type your question with “What”, “How”, “Why”, etc." id="Message3"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input class="form-control link-input" type="url" id="example-url-input" placeholder="&#xf0c1; Include a link that gives context">
                        </div>
                        <!--                            <button type="submit" class="btn btn-block knowledge-link">Send</button>                      -->
                    </form>
                </div>
            </div>
            <div class="btn-box">
                <ul class="list-inline modal-btn">
                    <li> <button type="button" data-dismiss="modal" class="btn btn-block cancel-question">Cancel</button></li>
                    <li> <button type="submit" class="btn btn-block add-question">Add Question</button> </li>
                </ul>
            </div>


        </div>
    </div>
</div>



<!-- The Modal -->
<div class="modal" id="add-post-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <h4 class="modal-title">Add Post</h4>
            <button type="button" class="close" data-dismiss="modal"><span class="icon-cancel-20"></span></button>


            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <span class="knowledge-profile"><img src="{{asset('asset_website/img/knowladge-forum/image4.png')}}"></span>
                    <h6 class="knowledge-text">Himadri Shekhar Das</h6>
                </div>
                <div class="question-modal">
                    <form class="row">
                        <div class="form-group col-lg-12 mb0">
                            <textarea class="form-control" rows="1" placeholder="Type your question with “What”, “How”, “Why”, etc." id="Message3"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input class="form-control link-input" type="url" id="example-url-input" placeholder="&#xf0c1; Include a link that gives context">
                        </div>
                        <!--                            <button type="submit" class="btn btn-block knowledge-link">Send</button>                      -->
                    </form>
                </div>
            </div>
            <div class="btn-box">
                <ul class="list-inline modal-btn">
                    <li> <button type="button" data-dismiss="modal" class="btn btn-block cancel-question">Cancel</button></li>
                    <li> <button type="submit" class="btn btn-block add-question">Add Post</button> </li>
                </ul>
            </div>


        </div>
    </div>
</div>