<!DOCTYPE html>
<html>
<head>
	<title>Step 1</title>
</head>
<body>
<form method="GET" action="Step2.php">
<div>
	<h1>&nbsp;Student Registration (Step 1 of 6)</h1>
	<table border="1" cellpadding="5">
		<tr>
			<th colspan="3">NAME</th>
		</tr>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Lastname Name</th>

		</tr>
		<tr>
			<td> <input type = "text" name = "Firstname" size="20" placeholder = "First Name"></td>
			<td> <input type = "text" name= "Middlename" size="20"placeholder = "Middle Name"></td>
			<td> <input type = "text" name = "Lastname" size="20" placeholder = "Last Name"></td>
		</tr>
		<td colspan="3" align="right">
				<input type="Submit" value="Proceed to step 2 >>">
			</td>
	</table>
</div>	
</form>
</body>
</html>