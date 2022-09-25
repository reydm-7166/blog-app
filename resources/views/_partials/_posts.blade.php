

@foreach($newsfeed_posts as $posts)

<div id="posts" class="rounded light-gray-bg shadow p-3 ps-4 pb-4 mb-2">
  <div id="votes_container" class="d-inline-block align-top text-center">
    <p class="font fw-bold">Up</p> 
    <p class="font"></p>
    <p class="font fw-bold">Down</p> 
  </div>

  <div id="posts_container" class="d-inline-block">
    <div id="post_author_info" class="d-flex">
        <div id="author_image" class="pe-2">
            <img src="/img/profile_picture.jpg" alt="aa" class="border rounded-circle border-0" id="profile_picture">
        </div>
        <div id="author_information" class="pt-1 ps-2">
            <small class="font fw-bold d-block fs-6"><a href="{{ route('profile.index', $posts->user_id) }}" class="text-dark">{{$posts->first_name}} {{$posts->last_name}}</small></a>
            <small class="font fw-light">2h ago</small>
        </div>
        <div id="author_options" class="ms-auto d-flex align-items-center">
            <div class="btn-group" id="dropdown_options">
              
                <button type="button" class="btn btn-primary dropdown-toggle ms-5 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Hide</a></li>

                  @if ($user_data['id'] == $posts->user_id)
                    <li><button class='dropdown-item' name="edit_post" id="edit_post" data-bs-toggle="modal" data-bs-target="#create_post_modal" value="{{$posts->id}}">Edit</button></li>
                  @endif

                  <li><a class="dropdown-item" href="#">Report</a></li>

                </ul>
              </div>
        </div>
    </div>

    <div id="post_content" class="text-break p-2">
        <p>{{ $posts->post_content }}</p>
    </div>

    <div id="comment_share_button" class="p-2">
      share
      comment
      save
    </div>
  </div>
</div>

@endforeach