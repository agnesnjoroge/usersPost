<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
      $data = $request -> validate([
        'title' => 'required',
        'body' => 'required'
        ]);
        
      $data['title'] = strip_tags($data['title']);
      $data['body'] = strip_tags($data['body']);
      $data['user_id'] = auth()->id();
      
      
    Post::create($data);
    return redirect('/');
   }
   public function allPosts (){
     $posts = Post::all();
     return view('posts.allPosts',['posts' => $posts]);
   }
   public function edit(Post $post){
     if(auth()->user()->id !== $post['user_id'])
     {
      return redirect ('/');
     }
      return view('edit',['post' => $post]);
   }
  public function update(Post $post, Request $request){
    if(auth()->user()->id !== $post['user_id'])
     {
       return redirect ('/');
     }
    $data = $request -> validate([
        'title' => 'required',
        'body' => 'required'
        ]);
        
      $data['title'] = strip_tags($data['title']);
      $data['body'] = strip_tags($data['body']);
     // $data['user_id'] = auth()->id();
     
     $post->update($data);
     return redirect ('/');
  }
  public function delete(Post $post){
    if(auth()->user()->id === $post['user_id'])
     {
       $post->delete();
     }
     return redirect ('/');
  }
}
