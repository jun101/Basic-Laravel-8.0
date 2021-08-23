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
      <table class="table table-striped">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Email</th>
              <th scope="col">Sexe</th>
              <th scope="col">DOB</th>
              <th scope="col">Action</th>

          </tr>
          </thead>
          <tbody>
          @php
              $i=1;
          @endphp
          @foreach($students as $student)

              <tr>
                  <th scope="row">{{$i}}</th>
                  <td>{{$student->lastname}}</td>
                  <td>{{$student->firstname}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->sex}}</td>
                  <td>{{$student->date()}}</td>
                  <td>
                      <a href="{{route('student.edit',$student)}}">Modifier</a>
                      <form action="{{route('student.destroy',$student)}}" method="POST">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">

                          <button type="submit">Supprimer</button>
                      </form>
                  </td>

              </tr>
              @php
                  $i++;
              @endphp
          @endforeach
          </tbody>
      </table>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
