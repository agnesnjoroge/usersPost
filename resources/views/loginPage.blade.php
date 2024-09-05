<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>
    </head>
    <body>
      <h2>Login Page</h2>
      <form method="POST" action="/login">
        
        @csrf
        
        <label>Name</label>
        <input type="text" name="lname" />
        <br>

        <label>PassWord</label>
        <input type="password" name="lpassword" />
        <br>
        <input type="submit" />
      </form>
    </body>
    </html>