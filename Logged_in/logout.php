<!DOCTYPE html>
<html>
<body>

		<?php

		include("config.php");
		
		session_start();
		if(session_destroy())
		{
			header("location: \library/login.html");
		}
		mysqli_close($conn);
		?>
</body>
</html>