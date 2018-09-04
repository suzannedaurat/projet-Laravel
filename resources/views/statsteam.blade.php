<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StatsTeams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
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
<div>
<div>
@foreach($teams as $team)
@if($team->id == $stats->team_id)
       <table class="table table-dark">
       <thead>
       <tr>
       <th scope="col">Team</th>
       <th scope="col">Country</th>
       <th scope="col">Rank</th>
       <th scope="col">Won</th>
       <th scope="col">Lost</th>
       </tr>
       </thead>
       <tbody>
       <tr>
       <th scope="row">{{$team->name}}</th>
       <td>{{$team->country}}</td>
       <td>{{$team->rank}}</td>
       <td>{{$stats->won}}</td>
       <td>{{$stats->lost}}</td>
       </tr>
       <br>
       @endif
       @endforeach
       </div>
</body>
</html>
