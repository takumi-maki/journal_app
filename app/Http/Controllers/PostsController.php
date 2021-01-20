<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Validator;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $posts = Post::all()->sortByDesc('updated_at');
        if(count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('post/index', ['$post' => $posts, 'headline' => $headline]);
    }
    public function selectType()
    {
        return view('post/select');
    }
    public function newMovie() 
    {
        return view('post/new/movie');
    }
    public function newBook()
    {
        return view('post/new/book');
    }
    
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'post_title' => 'required',
            'post_first_greeting' => 'required',
            'post_introduction' => 'required',
            'post_one' => 'required',
            'post_summary' => 'required',
            'post_last_greeting' => 'required'
            ]);
            
            if($validator->fails()) 
            {
                // 入力情報を保持したまま前の画面に戻る
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $post = new Post;
            $form = $request->all();
            if (isset($form['image'])) {
                $path = $request->file('image')->store('public/post_images');
                $post->post_image_path = basename($path);
            } else {
                $post->post_image_path = null;
            }
            unset($form['_token']);
            unset($form['image']);
            
            $post->fill($request->all());
            $post->user_id = Auth::user()->id;
            $post->save();
            
            
            
            return redirect('/');
    }
    
    
}
