<?php 
	$fname = $_GET['Firstname'];
	$mname = $_GET['Middlename'];
	$lname = $_GET['Lastname'];
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Step 2</title>
</head>
<body>
<form method="GET" action="Step3.php">
<div>
	<h1>&nbsp;Student Registration (Step 2 of 6)</h1>
	<table border="1" cellpadding="5">
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Lastname Name</th>

		</tr>
		<tr>
			<td> <input type = "text" name = "Firstname" value="<?php echo $fname; ?>" size="20" placeholder = "First Name"></td>
			<td> <input type = "text" name= "Middlename" value="<?php echo $mname; ?>" size="20"placeholder = "Middle Name"></td>
			<td> <input type = "text" name = "Lastname" value="<?php echo $lname; ?>" size="20" placeholder = "Last Name"></td>
		</tr>
		<tr>
			<th colspan="3">GENDER</th>
		</tr>
		<tr>
			<td>Gender</td>
			<?php if ($gender == "Male"): ?>
			<td><input type="radio" name = "gender"  value="Male" checked/> Male</td>
			<td><input type="radio"  name = "gender" value="Female"> Female</td>
			<?php else: ?>
			<td><input type="radio" name = "gender"  value="Male" > Male</td>
			<td><input type="radio"  name = "gender" value="Female" checked/> Female</td>
			<?php endif; ?>
		</tr>

		<tr>
			<td colspan="3" align="right">
				<input type="Submit" value="Proceed to Step 3 >>">
			</td>
		</tr>

	</table>
</div>
</body>
</html>