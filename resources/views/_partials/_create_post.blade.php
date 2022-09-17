<main class="w-50 m-auto mt-2 rounded m-5" id="create_post_container">

    <div id="input_post_container" class="mt-5 w-75 m-auto">
      @if(Session::has('success'))
          <div id="success" class="alert alert-success p-3 border rounded">
              <p class="font fs-4 text-success d-inline-block">{{  Session::get('success') }}</p>
              <img src="img/success.png" width="30px" height="30px" alt="">
          </div>
      @endif
            {{-- CREATE POST MODAL TRIGGER/BUTTON--}}
            <label for="" class="form-label font fs-2 text-light">Create Post</label>

            <button type="submit" name="" id="create_post_button" class="form-control w-100 ps-4 pe-4" data-bs-toggle="modal" data-bs-target="#create_post_modal">
                Suggest Recipe. What do you have in mind, {{ $user_data['first_name'] }}?
            </button>

            {{-- CREATE POST MODAL --}}
            <div class="modal" id="create_post_modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content" id="modal">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Create Post</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('post.store') }}" method="POST">
                          @csrf
                          <div id="post_title" class="mb-3">
                            <input type="text" name="post_title" id="" class="form-control font p-3" placeholder="Add Title">
                            @if($errors->first('post_title'))
                                <small class="form-text d-block text-danger fw-bold">{{ $errors->first('post_title') }}</small>
                            @endif
                          </div>
                          
                          <div id="post_content">
                            <textarea name="post_content" id="" rows="20" class="bg bg-light border rounded text-dark font w-100 p-3 form-control" placeholder="Add content"></textarea>
                            @if($errors->first('post_content'))
                                <small class="form-text d-block text-danger fw-bold">{{ $errors->first('post_content') }}</small>
                            @endif
                          </div>
                    </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
    </div>
    
</main>
