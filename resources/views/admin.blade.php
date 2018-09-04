<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <center><h2>Ajout d'un joueur </h2></center><br/>
      <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Team">Team:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Team">nationality:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Team">position:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Rank">Rank:</label>
              <input type="number" class="form-control" name="number">
            </div>
          </div>
          <br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="photo" >    
         </div>
        </div>
        <center><div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        </center>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>

     <!--<h1>Ajoutez un joueur</h1>

{!! Form::open(['action' => 'PlayerController@store']) !!}
{!! Form::label('photo', 'photo')!!}
{!! Form::file ('photo')!!}
{!! Form::label('name', 'name')!!}
{!! Form::text ('name')!!}
{!! Form::label('nationality', 'nationality')!!}
{!! Form::text ('nationality')!!}
{!! Form::label('team', 'team')!!}
{!! Form::text ('team')!!}
{!! Form::label('position', 'position')!!}
{!! Form::text ('position')!!}
{!! Form::label('rank', 'rank')!!}
{!! Form::number('rank')!!}

{!! Form::submit('Submit')!!}

</body>-->