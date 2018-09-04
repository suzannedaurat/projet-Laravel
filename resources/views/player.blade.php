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
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Nationality</th>
        <th>Team</th>
        <th>Position</th>
        <th>Rank</th>
        @if (Auth::user() && Auth::user()->type == 'admin')
        <th colspan="2">Action</th>
      </tr>
      @endif
    </thead>
    <tbody>    
      @foreach($players as $player)
      <tr>
        <td>{{$player->id}}</td>
        <td><img width="15%" height="20%" src="/images/{{$player->photo}}"/></td>
        <td>{{$player['name']}}</td>
        <td>{{$player['nationality']}}</td>
        <td>{{$player['team']}}</td>
        <td>{{$player['position']}}</td>
        <td>{{$player['rank']}}</td>
        @if (Auth::user() && Auth::user()->type == 'admin')
      <td><a href="{{action('TaskController@edit', $player['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('TaskController@destroy', $player['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>   
        @endif

      @endforeach  
    </tbody>
  </table>
  </div>

  </body>
</html>
