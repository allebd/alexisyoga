<?php
	if(!isset($_SESSION)) 
	{
		session_start();
		  
		session_set_cookie_params(2*7*24*60*60);
	}
	
	//Function to check if user has logged in
	function logged_in()
	{
		return isset($_SESSION['is_logged_in']);
		
	}

	//Function if user not logged in redirect to home page
	function confirm_logged_in()
	{
		if(!logged_in())
		{
			header("Location:index.php");
		}
	}

?>
