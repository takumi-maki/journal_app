@if($post->post_image_path)
    <img src="{{ $post->post_image_path }}" alt="top_img" class="top-img" />

@elseif ($post->post_image_path == null && $post->post_type == "book")    
    <img src="{{ secure_asset('/images/book.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "business")    
    <img src="{{ secure_asset('/images/business.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "daily")    
    <img src="{{ secure_asset('/images/daily.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "hobby")    
    <img src="{{ secure_asset('/images/hobby.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "movie")
    <img src="{{ secure_asset('/images/movie.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "society")    
    <img src="{{ secure_asset('/images/society.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "sport")    
    <img src="{{ secure_asset('/images/sport.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "study")    
    <img src="{{ secure_asset('/images/study.jpg' ) }}" alt="top_img" class="top-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "travel")
    <img src="{{ secure_asset('/images/travel.jpg' ) }}" alt="top_img" class="top-img" /> 

@endif
