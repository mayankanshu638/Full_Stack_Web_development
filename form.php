<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$course=$_POST['course'];
$Interest=$_POST['Interest'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNMENT 3</title>
	<style >
		*{
			background-color: #E0FFFF;
		}
	</style>
</head>
<body>
	<h1>ENTER YOUR DETAILS</h1>
	<form method="post" action="form.php">
		Name <input type="text" name="name" placeholder="Name" required><br><br>
		Email <input type="Email" name="email" placeholder="EmailID" required><br><br>
		Contact <input type="text" name="contact" maxlength="10" minlength="10" placeholder="Contact Number" required><br><br>
		City <input type="text" name="city" placeholder="City" required><br><br>
		Course <input type="text" name="course" placeholder="Course" required><br><br>
		Interest In Languages:
		C Language<input type="checkbox" name="Interest" value="C Language">
		C++ Language<input type="checkbox" name="Interest" value="C++ Language">
		JAVA Language<input type="checkbox" name="Interest" value="JAVA Language">
		Python Language<input type="checkbox" name="Interest" value="Python Language"><br><br>
		<input type="submit" ><br><br>
		<table border="2px" style="border-collapse: collapse;">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>City</th>
				<th>Course</th>
				<th>Interest</th>
			</tr>
			<tr>
				<th><?php echo "$name" ?></th>
				<th><?php echo "$email" ?></th>
				<th><?php echo "$contact" ?></th>
				<th><?php echo "$city" ?></th>
				<th><?php echo "$course" ?></th>
				<th><?php echo "$Interest" ?></th>
			</tr>
		</table>
	</form>
</body>
</html>