<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="card-tools">
            <a href="{{route('office.index')}}" ><button class="btn btn-sm btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Show List</button></a>
         </div>
        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$office_data->id}}">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter office Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="of" value="{{$office_data->office_name}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter office Address</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="ofAdd" value="{{$office_data->office_address}}"s>
              </div>
              <div  class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                <input class="p-2 border bg-light" type="file" class="form-control" name="image_file" id="file"/>
                <img class="p-2 border bg-light" src={{asset("Image/".$office_data->image)}} width="100px" height="100px">
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
