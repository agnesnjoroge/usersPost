<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Posts</title>
    </head>
    <body>
      <h2>All Posts</h2>
          
      @foreach($posts as $post)
       <centre><h3> Posts by {{$post->user_id}}</h3></centre>
       <ul>
         <li>Title: {{$post['title']}}</li>

         <li>Body: {{$post->body}}</li>
       </ul>

  @endforeach
    </body>
    </html>