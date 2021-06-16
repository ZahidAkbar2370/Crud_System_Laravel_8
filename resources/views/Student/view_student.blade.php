<!DOCTYPE html>
<html>
<head>
  <title>View Student</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>

  <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <center><h1>View Student</h1></center>

    <a href="{{url('add-student')}}"><button style="background-color: #04AA6D;color: white;font-weight: bold;margin-bottom: 20px;border: 1px solid #04AA6D;margin-left: 20px;">Add New Student</button></a>

    <table id="customers">

      <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Mobile #</th>
        <th>Email</th>
        <th>Cnic #</th>
        <th>Address</th>
        <th>Action</th>
      </tr>

      @if(!empty($all_students))
        @foreach($all_students as $students)

          <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->first_name}} {{$students->last_name}}</td>
            <td>{{$students->mobile_no}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->cnic_no}}</td>
            <td>{{$students->address}}</td>
            <td>
              <a href="edit-student/{{$students->id}}" style="margin-right: 20px;">Edit</a>

              <a href="delete-student/{{$students->id}}" style="margin-right: 20px;">Delete</a>

              <a href="#" class="viewbtn" >Show</a>
            </td>
            
          </tr>

        @endforeach
      @endif  
      
      
    </table>



    <!-- Start Show Data Model -->
    <!-- modal -->
        <div class="modal fade" id="viewstudentmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 35%;">View Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div style="width: 950px;margin-left:30px;margin-bottom: 20px;">

                <h5>ID:</h5>
                <input type="text" id="view_id" disabled>
                <h5>Full Name:</h5>
                <input type="text" id="view_full_name" disabled>
                <h5>Mobile No:</h5>
                <input type="number" id="view_mobile_no" disabled>
                <h5>Email:</h5>
                <input type="email" id="view__email" disabled>
                <h5>Cnic No:</h5>
                <input type="number" id="view_cnic_no" disabled>
                <h5>Address:</h5>
                <input type="address" id="view__address" disabled>

              </div>
            </div>
          </div>
        </div>
        <!-- Button trigger modal -->
        <!--  -->
        <!-- End Show Selected Data  -->
        <!-- From Table -->
        <script>
          $(document).ready(function() {
            $('.viewbtn').on('click',function(){
            $('#viewstudentmodel').modal('show');
            $tr=$(this).closest('tr');
            var data=$tr.children("td").map(function(){
              return $(this).text();
            }).get();
            console.log(data);
            $('#view_id').val(data[0]);
            $('#view_full_name').val(data[1]);
            $('#view_mobile_no').val(data[2]);
            $('#view__email').val(data[3]);
            $('#view_cnic_no').val(data[4]);
            $('#view__address').val(data[5]);
          });
          });
          
        </script>

</body>
</html>
