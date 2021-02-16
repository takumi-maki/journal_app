<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use Validator;
use App\Like;
use Storage;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $type = $request->type;
        if($type == 'all' || $type == null){
            $posts = Post::where('post_key', 'open');
        }
        elseif($type == 'book'){
            $posts = Post::where([
                ['post_type', 'book'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'business'){
            $posts = Post::where([
                ['post_type', 'business'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'daily'){
            $posts = Post::where([
                ['post_type', 'daily'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'hobby'){
            $posts = Post::where([
                ['post_type', 'hobby'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'leaning'){
            $posts = Post::where([
                ['post_type', 'leaning'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'movie'){
            $posts = Post::where([
                ['post_type', 'movie'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'society'){
            $posts = Post::where([
                ['post_type', 'society'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'sport'){
            $posts = Post::where([
                ['post_type', 'sport'],
                ['post_key', 'open']
                ]);
        }
        elseif($type == 'travel'){
            $posts = Post::where([
                ['post_type', 'travel'],
                ['post_key', 'open']
                ]);
        }
        
        $posts = $posts->orderBy('created_at', 'desc')->paginate(10);
        
        if(count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('post/index', ['posts' => $posts, 'headline' => $headline]);
    }
    public function selectType()
    {
        return view('post/select');
    }
    public function newBook() 
    {
        return view('post/new/book');
    }
    public function newBusiness() 
    {
        return view('post/new/business');
    }
    public function newDaily() 
    {
        return view('post/new/daily');
    }
    public function newHobby()
    {
        return view('post/new/hobby');
    }
    public function newMovie() 
    {
        return view('post/new/movie');
    }
    public function newSociety() 
    {
        return view('post/new/society');
    }
    public function newSport() 
    {
        return view('post/new/sport');
    }
    public function newStudy()
    {
        return view('post/new/study');
    }
    public function newTravel()
    {
        return view('post/new/travel');
    }

    public function confirm(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'post_title' => 'required',
            'post_first_greeting' => 'required',
            'post_introduction' => 'required',
            'post_one' => 'required',
            'post_summary' => 'required',
            'post_last_greeting' => 'required',
            'post_image_path' => 'image|max:2048'
            ]);
            
            
        if($validator->fails()) {
            // 入力情報を保持したまま前の画面に戻る
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $post = new Post;
        $post->fill($request->all());
        $post->user_id = Auth::user()->id;
        if ($request->hasFile('post_image_path')) {
            $path = Storage::disk('s3')->putFile('/', $request->file('post_image_path'), 'public');
            $post->post_image_path = Storage::disk('s3')->url($path);
            // $path = $request->file('post_image_path')->store('public/post_images');
            // $post->post_image_path = basename($path);
        } else {
            $post->post_image_path = null;
        }
        unset($post['_token']);
        
        $request->session()->put('post', $post);

        return view('post/confirm', ['post' => $post]);
    }
    
    public function send(Request $request){
        $post = $request->session()->get('post');
        $post->save();
        return redirect('posts/thanks');
    }
    
    public function complete()
    {
        return view('post/complete');
    }
    
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->back();
    }
    
    public function show($post_id, User $user)
    {

        $post = Post::findOrFail($post_id);
        return view('post/show', ['post' => $post, 'user' => $user]);
        
    }
    public function edit(Request $request)
    {
        $post = Post::findOrFail($request->id);
        return view('post/edit', ['post' => $post]);
        
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'post_title' => 'required',
            'post_first_greeting' => 'required',
            'post_introduction' => 'required',
            'post_one' => 'required',
            'post_summary' => 'required',
            'post_last_greeting' => 'required',
            'post_image_path' => 'image|max:2048'
            ]);
            
        if($validator->fails()) {
            // 入力情報を保持したまま前の画面に戻る
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $post = Post::find($request->id);
        $post->fill($request->all());
        $post->user_id = Auth::user()->id;
        if ($request->hasFile('post_image_path')) {
            $path = Storage::disk('s3')->putFile('/', $request->file('post_image_path'), 'public');
            $post->post_image_path = Storage::disk('s3')->url($path);
        } else {
            $post->post_image_path = null;
        }
        unset($post['_token']);
        $post->save();
        return view('post/show', ['post' => $post]);
    }
    
}