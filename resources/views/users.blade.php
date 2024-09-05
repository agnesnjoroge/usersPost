<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Users</title>
    </head>
    <body>
      <h2>All Users</h2>
          
      @foreach($users as $user)
       <centre><h3> User {{$user->id}}</h3></centre>
       <ul>
         <li>Name: {{$user->name}}</li>
         <li>Email: {{$user->email}}</li>
         <li>Password: {{$user->password}}</li>
       </ul>

  @endforeach
    </body>
    </html>