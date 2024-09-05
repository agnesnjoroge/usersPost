<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Post Page</title>
    </head>
    <body>
      <h2>Edit Post</h2>
      <form method="post" action="/update/{{$post->id}}">
        @csrf
        @method('PUT')
        <input type="text" value="{{$post->title}}" name="title" placeholder="Title..."/>
        <textarea name="body"> {{$post->body}}</textarea>
        <button>Save</button>
      </form>
    </body>
    </html>