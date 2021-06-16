<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>

	<style type="text/css">
		input{
		  width: 45%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		}
		button{
			width: 25%;
			padding: 12px 20px;
		  	margin: 8px 0;
		  	box-sizing: border-box;
		  	background-color: Blue;
		  	color: White;
		}
	</style>
</head>
<body>
<center>
	<h1>Edit Student</h1>

	<form action="{{URL::to('update-student',$edit_student->id)}}" method="post">
		@csrf
	  <input type="text"  name="first_name" required="" placeholder="First Name" value="{{$edit_student->first_name}}">

	  <input type="text" name="last_name" required="" placeholder="Last Name" value="{{$edit_student->last_name}}">

	  <input type="number" name="mobile_no" required="" placeholder="Mobile No" value="{{$edit_student->mobile_no}}"> 

	  <input type="email" name="email" required="" placeholder="Email Address" value="{{$edit_student->email}}"> 

	  <input type="number"  name="cnic_no" required="" placeholder="Cnic No" value="{{$edit_student->cnic_no}}">

	  <input type="text" name="address" required="" placeholder="Address" value="{{$edit_student->address}}">

	  <button type="submit">Update Student</button>
	  
	</form>
</center>
</body>
</html>
