
<?php use Illuminate\Support\Facades\Auth ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Телефонный правочник</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

      <div class="col-md-3 text-end">
      @if(Auth::check())
        <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2" >Logout</button></a>
         
      @else
        <a href="{{route('login')}}"><button type="button" class="btn btn-outline-primary me-2" >Login</button></a>
          
        <a href="{{route('register.create')}}"><button type="button" class="btn btn-primary">Sign-up</button></a>
      @endif
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($people as $person)
    <tr>
      <th scope="row">{{$person->number}}</th>
      <td>{{$person->first_name}}</td>
      <td>{{$person->middle_name}}</td>
      <td>{{$person->last_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </header>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>