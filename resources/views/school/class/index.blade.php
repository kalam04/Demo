<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <div class="container">
      <div class="card-tools">
        <a href="{{route('class.create')}}" ><button class="btn btn-sm btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Add Class</button></a>
     </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Class Name</th>
                <th scope="col">Section Name</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($classData as $row)
             <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->name}}</td>
                <td>
                    @foreach ($row->sections as $r)
                    {{$loop->iteration}}.
                    {{$r->name}}<br>
                    @endforeach
                </td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('class.edit', $row->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-pencil-square-o"></i>
                            Edit
                        </a>
                    </div>
                    <div class="btn-group">
                        <form action="{{route('class.destroy',$row)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="{{$row->id}}"  class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>

             @endforeach
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
