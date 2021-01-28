<h6 style="text-align: left;">{{ $post->post_type }}</h6>
    <div class="card">
      <div class="card-img">
        @include('common.post_image_path')
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ \Illuminate\Support\Str::limit($post->post_title, 30, '...') }}</h5>
        <p class="card-text p-1">{{ \Illuminate\Support\Str::limit($post->post_introduction, 50, '...') }}</p>
        <a class="card-next" href="{{ action('PostsController@show', $post->id) }}">この記事を読む</a>
        </div>
        <div class="profile-wrap ml-5">
            <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
                @if ($post->user->profile_photo)
                <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('storage/user_images/'. $post->user->profile_photo) }}" />
                @else 
                <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('/images/blank_profile.png') }}" />
                @endif
            <span>{{ $post->user->name }}</span>
            </a>
      </div>
      <div class="card-footer">
        <p class="card-text p-1">投稿日:{{ $post->created_at->format('Y年m月d日') }}</p>
      </div>
    </div>