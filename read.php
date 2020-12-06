<?php 
		
	require_once('./db.php');

	//template
	$sql = 'SELECT * FROM users WHERE user_id = ?';

	// prepared statement
	$stmt = mysqli_stmt_init($conn);

	// peparation
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		echo  "Failed";
	}
	else
	{
		$user_id = 2;
		// binding parameters
		//echo "Success";
		mysqli_stmt_bind_param($stmt,'i',$user_id);

		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row['user_name'];
		}
	}

 ?>