<div id="newsfeed_container" class="p-3 pt-1">

    @if ($user_data['id'] == $newsfeed_posts[0]->user_id)
        @include('_partials._create_post')
    @endif

    <div id="newsfeed_posts_container" class="rounded border-0">

        @include('_partials._posts')

    </div>
</div>