<h6 style="text-align: left;">{{ $post->post_type }}</h6>
    <div class="card">
      <div class="card-img">
        @include('common.card_image_path')
      </div>
      
      <div class="card-body">
      
        <h5 class="card-title">「{{ \Illuminate\Support\Str::limit($post->post_title, 30, '...') }}」</h5>
        <p class="card-text p-1">{{ \Illuminate\Support\Str::limit($post->post_introduction, 50, '...') }}</p>
        <a class="card-next" href="{{ action('PostsController@show', $post->id) }}">この記事を読む</a>
        
        @if ($post->likedBy(Auth::user())->count() > 0)
        <ul class="like-icon">
          <li>
            <a class="no-text-decoration" data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrFail()->id }}">
              <img src="/images/parts7.png" />
              <span>{{$post->likes->count() }} like</span>
            </a>
          </li>
        </ul>
        @else
        <ul class="like-icon">
          <li>
            <a class="no-text-decoration" data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes">
              <img src="/images/parts5.png" />
              <span>{{$post->likes->count() }} like</span>
            </a>
          </li>
        </ul>  
        @endif
        
        <div class="profile-wrap mt-4">
            <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
                @if ($post->user->profile_photo)
                <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('storage/user_images/'. $post->user->profile_photo) }}" />
                @else 
                <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('/images/blank_profile.png') }}" />
                @endif
            <span>{{ $post->user->name }}</span>
            </a>
            
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-6 p-0">
            <p class="card-text">date:{{ $post->created_at->format('y-m-d') }}</p>
          </div>
          <div class="col-6">
          
            @if($post->user->id == Auth::user()->id)
            <ul  class="delete-icon">
            <li>
              <a class="no-text-decoration" href="/postsdelete/{{ $post->id }}">
                <img src="/images/parts9.png" />
                <span>delete</span>
              </a>
            </li> 
            </ul>
            @endif
          </div>
        </div>
      </div>
      
    </div>