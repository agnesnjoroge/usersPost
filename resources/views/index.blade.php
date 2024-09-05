<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index Page</title>
    </head>
    <body>
      <h2>Index Page</h2>
      @auth
      <p>Hi,Welcome to our website</p>
    <h1>Create Posts</h1>
      <form method="post" action="/create">
        @csrf
        @method('POST')
        <input type="text" name="title" placeholder="Title..."/>
        <textarea name="body" placeholder="body........"></textarea>
        <button>Post</button>
        
      </form>
      <br>
      <hr>
      <h2>My Posts </h2>
      @foreach($posts as $post)
       <h3> Title: {{$post['title']}} by {{$post->user->email}}</h3> 
             <h6>{{$post->user->name}}</h6>
       
         

         <p>Body: {{$post->body}} </p>
         <a href="/edit/{{$post->id}}/">Edit Post</a>
       
        <form method="post" action="/delete/{{$post->id}}">
        @csrf
        @method('delete')
        
        <button>Delete</button>
        
      </form>

  @endforeach
  <br><hr>
      <form method="post" action="/logout">
        @csrf
        @method('POST')
        <button>Logout</button>
        
      </form>
      @else
      Register with us at our <a href="/register"> Register page</a>
      Have an account then just go ahead and <a href="/loginPage">Login Here</a>
      @endauth
      
    </body>
    </html>