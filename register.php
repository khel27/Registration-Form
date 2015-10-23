<!DOCTYPE html>
<html>
<head>
	<title>Congratulations!</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div id = 'khel'>
<h1> WELCOME </h1>
<h2>La Verdad Christian College</h2>
<div id = 'mikel'>
<?php 

	$fname = $_POST['Firstname'];
	$mname = $_POST['Middlename'];
	$lname = $_POST['Lastname'];
	$gender = $_POST['gender'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$program = $_POST ['program'];
	$studentType = $_POST ['studentType'];
	$address = $_POST ['address'];

 ?>
<table border="1" cellpadding="10">
<tr>
<th colspan="2" id = 'font'>Successfully Saved Registration</th>
</tr>
<tr>
<th>Full Name:</th> 
<td><?php echo $fname." ".$mname." ". $lname; ?><br /></td>
</tr>
<tr>
<th>Gender:</th> 
<td><?php echo $gender; ?><br /></td>
</tr>
<tr>
<th>Birthday:</th> 
<td><?php echo $month." ".$day.",".$year; ?><br /></td>
</tr>
<tr>
<th>Program:</th>
<td><?php echo $program; ?><br /></td>
</tr>
<tr>
<th>Student Type:</th>
<td><?php echo $studentType; ?><br /></td>
</tr>
<tr>
<th>Address:</th>
<td><?php echo $address; ?><br /></td>
</tr>
</table>
</div>
</div>
</body>
</html>