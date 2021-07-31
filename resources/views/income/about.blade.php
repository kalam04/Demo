<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>about</h1>
    <h3>Our todo list</h3>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Create At</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($todos as $k )
          <tr>

            <td>{{$k->id}}</td>
            <td>{{$k->name}}</td>
            <td>{{$k->created_at}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>


    <form action="/todo" method="POST">
        @csrf
        <label for="fname">Income Head</label><br><br>

        <input type="text" name="name"><br><br>
        <label for="fname">Income Head</label><br><br>
        <input type="text" name="description"><br><br>
        <button class="btn btn-primary">Add </button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
