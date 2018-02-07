<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Genres</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <h1>Genres</h1>

  <table class="table">
    <tr>
      <th>Genre</th>
      <th></th>
    </tr>

    @foreach($genres as $genre)
    <tr>
      <td>{{$genre->Name}}</td>
      <td><a href="/tracks?genre={{$genre->Name}}">Details</a></td>
    </tr>
    @endforeach

  </table>
  
</body>
</html>