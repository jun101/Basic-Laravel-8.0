<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>

<div class="contaner">


  <div class="col-lg-10 p-2">
      <form class="row g-3" method="POST" action="{{route('student.store')}}">
          @csrf
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="inputEmail4" value="{{old('email')}}">
              {!! $errors->first('email', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>
          <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="inputPassword4" value="{{old('password')}}">
              {!! $errors->first('password', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>

          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nom</label>
              <input type="text" name="lastname" class="form-control" id="inputEmail4" value="{{old('lastname')}}">
              {!! $errors->first('lastname', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>
          <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Prenom</label>
              <input type="text" name="firstname" class="form-control" id="inputPassword4" value="{{old('firstname')}}">
              {!! $errors->first('firstname', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>



          <div class="col-md-6">
              <label for="inputCity" class="form-label">Date de Naissance</label>
              <input type="date" name="dob" class="form-control" id="inputCity" value="{{old('dob')}}">
              {!! $errors->first('dob', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>
          <div class="col-md-6">
              <label for="inputState" class="form-label">Sexe</label>
              <select id="inputState" class="form-select" name="sex">
                  <option selected>Choose...</option>
                  <option {{ (old('sex'))=="M"?'selected':''}} value="M">Masculin</option>
                  <option {{ (old('sex'))=="F"?'selected':''}} value="F">Feminin</option>
                  <option {{ (old('sex'))=="Other"?'selected':''}} value="Other">Other</option>
              </select>
              {!! $errors->first('sex', '<div class="text-danger"><small>:message</small></div>') !!}
          </div>
          <div class="col-12">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                      Check me out
                  </label>
              </div>
          </div>
          <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
      </form>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
