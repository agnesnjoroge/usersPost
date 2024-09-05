<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register Page</title>
    </head>
    <body>
      <h2>Create Account Page</h2>
      <form method="post" action="/create">
        @csrf
        @method('post')
        <label>Name</label>
        <input type="text" name="name" />
        <br>
        <label>Email</label>
        <input type="email" name="email" />
        <br>
        <label>PassWord</label>
        <input type="password" name="password" />
        <br>
        <input type="submit" />
      </form>
    </body>
    </html>