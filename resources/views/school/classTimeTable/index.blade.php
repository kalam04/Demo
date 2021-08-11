
<html>
      <head>
           <title>Group Data Add</title>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



      </head>
      <body>
           <div class="container">
                <br />
                <br />
                <h2 align="center">Class Time</h2>

                <div class="form-group">
                     <form action="{{url('class-time-table/search')}}" method="POST" >
                        @csrf

                        <div>
                            <table class="table table-bordered" id="dynamic_field1">
                                <tr>
                                   <td><input type="text" name="class" placeholder="class" class="form-control name_list" required /></td>
                                    <td><input type="text" name="section" placeholder="Section" class="form-control name_list" required /></td>
                                    <td><input type="text" name="subject_group" placeholder="Subject Group" class="form-control name_list" required /></td>
                                    <td><input type="text" name="day" placeholder="Day" class="form-control name_list" required/></td>
                                </tr>
                            </table>

                        </div>

                          <button class="btn btn-primary"> Search </button>
                     </form>
                </div>
           </div>

      </body>
 </html>
 <script>


 $(document).ready(function(){
      var i=1;
      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name=subject[] required>@foreach ($subjects as $subject)<option value="{{$subject->id}}">{{$subject->name}}</option>@endforeach</select></td><td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name=teacher[] required>@foreach ($teachers as $teacher)<option value="{{$teacher->id}}">{{$teacher->name}}</option> @endforeach</select></td><td><input type="text" name="time_form[]" placeholder="Time Form" class="form-control name_list" required/></td><td><input type="text" name="time_to[]" placeholder="Time To" class="form-control name_list" required/></td><td><input type="text" name="room_no[]" placeholder="Room No" class="form-control name_list" required/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });

 });

 </script>
