<?php 
	$fname = $_GET['Firstname'];
	$mname = $_GET['Middlename'];
	$lname = $_GET['Lastname'];
	$gender = $_GET['gender'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Step 3</title>
</head>
<body>
<form method="GET" action="Step4.php">
<div id = "mike">
	<h1>&nbsp;Student Registration (Step 3 of 6)</h1>
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
			<th colspan="3">Birthday</th>
		</tr>

		<tr>
		<td>Month
			<select name="month" >
				<option value="January">January</option>
				<option value="February">February</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>


			</select>
		</td>
			<td>Day
				<select name ="day">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
			</td>

			<td>Year
				<select name ="year">
					<option>1985</option>
					<option>1986</option>
					<option>1987</option>
					<option>1988</option>
					<option>1989</option>
					<option>1990</option>
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3" align="right">
				<input type="Submit" value="Proceed to Step 4 >>">
			</td>
		</tr>

	</table>
</div>
</form>
</body>
</html>