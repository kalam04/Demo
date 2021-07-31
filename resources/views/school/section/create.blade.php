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

    <div class="container">
        {{-- @if (session('status'))
            <h6 class="alert alert-success"> {{section('status')}}</h6>
        @endif --}}
        <div class="card-tools">
            <a href="{{route('section.index')}}" ><button class="btn btn-sm btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Show List</button></a>
         </div>
        <form action="{{url('section')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="sectionFormControlInput" class="form-label">Enter Section Name</label>
                <input type="text" class="form-control" id="section" placeholder="Enter Section Name" name="section_name">
                @error('section_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button class="btn btn-primary">Add </button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
