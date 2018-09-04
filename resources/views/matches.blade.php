<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<table class="table">
       <thead>
       <tr>
       <th scope="col">Team</th>
       <th scope="col">Team</th>
       <th scope="col">Score</th>
       <th scope="col">Venue</th>
       </tr>
       </thead>
       <tbody>
       <tr>
@foreach ($matches as $match)
    @foreach ($teams as $team)
    @if ($team->id == $match->team_id_one)
    <td>{{$team->name}}<img width="15%" height="20%"  src='/image/{{$team->flag}}'></td>
    @elseif ($team->id == $match->team_id_two)
    <td>{{$team->name}}<img width="15%" height="20%"  src='/image/{{$team->flag}}'></td>
    @endif
    @endforeach
    <td>{{$match->score}}</td>
    <td>{{$match->venue}}</td>
    </tr>
@endforeach
</body>
</html>
