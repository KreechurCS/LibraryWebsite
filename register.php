<!DOCTYPE html>
<html>
<body>

		<?php

		include("config.php");
		
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$FirstName = $_POST['FirstName'];
		$Surname = $_POST['SurName'];
		$AddressLine1 = $_POST['AddressLine1'];
		$AddressLine2 = $_POST['AddressLine2'];
		$City = $_POST['City'];
		$Telephone = $_POST['telephone'];
		$Mobile = $_POST['Mobile'];

		$sql = "INSERT INTO users (Username,Password,FirstName,SurName,AddressLine1,AddressLine2,City,Telephone,Mobile)
		VALUES ('$Username','$Password','$FirstName','$Surname','$AddressLine1', '$AddressLine2','$City', '$Telephone', '$Mobile')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			echo "<br>";
			header("location: login.html");
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		?>
		<a href="login.html"> Click here to return to login</a>
</body>
</html>