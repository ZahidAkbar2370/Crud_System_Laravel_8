<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<center>
	<h1>Add Student</h1>

	<form action="{{URL::to('save-student')}}" method="post">
		@csrf
	  <input type="text"  name="first_name" required="" placeholder="First Name">

	  <input type="text" name="last_name" required="" placeholder="Last Name">

	  <input type="number" name="mobile_no" required="" placeholder="Mobile No"> 

	  <input type="email" name="email" required="" placeholder="Email Address"> 

	  <input type="number"  name="cnic_no" required="" placeholder="Cnic No">

	  <input type="text" name="address" required="" placeholder="Address">

	  <button type="submit" class="add_button">Add Student</button>
	</form>
</center>
</body>
</html>
