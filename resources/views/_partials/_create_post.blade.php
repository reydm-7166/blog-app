<main class="w-50 m-auto mt-2 rounded m-5" id="create_post_container">
    
    <div id="input_post_container" class="mt-5 w-75 m-auto">
        
            {{-- CREATE POST MODAL TRIGGER/BUTTON--}}
            <label for="" class="form-label font fs-2 text-light">Create Post</label>

            <button type="submit" name="" id="" class="form-control w-100 ps-4 pe-4" data-bs-toggle="modal" data-bs-target="#create_post_modal">
                Suggest Recipe. What do you have in mind, {{ $user_data['first_name'] }}?
            </button>

            {{-- CREATE POST MODAL --}}
            <div class="modal fade" id="create_post_modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content" id="modal">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Create Post</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Post</button>
                    </div>
                  </div>
                </div>
            </div>


    </div>
    
</main>