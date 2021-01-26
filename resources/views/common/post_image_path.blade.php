@if($post->post_image_path)
    <img src="{{ secure_asset('storage/post_images/'. $post->post_image_path) }}" alt="post_img" class="post-img" />
@elseif ($post->post_image_path == null && $post->post_type == "movie")
    <img src="{{ secure_asset('/images/movie.jpg' ) }}" alt="post_img" class="post-img" /> 
@elseif ($post->post_image_path == null && $post->post_type == "book")    
    <img src="{{ secure_asset('/images/book.jpg' ) }}" alt="post_img" class="post-img" /> 
@endif