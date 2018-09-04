<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <style>
    html, body {
                background-image:url(images/wackbox.jpg);
            }
            .navbar navbar-expand-lg navbar-light bg-light
            {
              background-color:black;
            }
    </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">Wackbet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('TaskController@index')}}">Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('TeamController@index')}}">Teams</a>
      </li>
    </ul>
  </div>
</nav>
       <table class="table table-dark">
       <thead>
       <tr>
       <th scope="col">Team</th>
       <th scope="col">Country</th>
       <th scope="col">Flag</th>
       <th scope="col">Rank</th>
       <th scope="col">Stats</th>
       <th scope="col">Playin ?</th>
       </tr>
       </thead>
       <tbody>
       <tr>
       @foreach($teams as $team)
       <th scope="row">{{$team->name}}</th>
       <td>{{$team->country}}</td>
       <td><img width="15%" height="20%" src ='/image/{{$team->flag}}'></td>
       <td>{{$team->rank}}</td>
       <td>
       <a href='http://localhost:8000/Teams/Stats/{{$team->id}}'>Check Stats Here</a>
       </td>
       <td>
       <a href='http://localhost:8000/Matches/{{$team->id}}'>Check Matches Here</a>
       </td>
       </tr>
       @endforeach
</html>
