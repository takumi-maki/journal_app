@if($post->post_image_path)
    <img src="{{ secure_asset('storage/post_images/'. $post->post_image_path) }}" alt="card_img" class="card-img" />

@elseif ($post->post_image_path == null && $post->post_type == "book")    
    <img src="{{ secure_asset('/images/book.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "business")    
    <img src="{{ secure_asset('/images/business.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "daily")    
    <img src="{{ secure_asset('/images/daily.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "hobby")    
    <img src="{{ secure_asset('/images/hobby.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "movie")
    <img src="{{ secure_asset('/images/movie.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "society")    
    <img src="{{ secure_asset('/images/society.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "sport")    
    <img src="{{ secure_asset('/images/sport.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "study")    
    <img src="{{ secure_asset('/images/study.jpg' ) }}" alt="card_img" class="card-img" /> 

@elseif ($post->post_image_path == null && $post->post_type == "travel")
    <img src="{{ secure_asset('/images/travel.jpg' ) }}" alt="card_img" class="card-img" /> 

@endif
