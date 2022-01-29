<?php
	session_start();
	 // The Varibale To No - NavBar  
	 // $Nonavbar = '';

	// start function 4
		if(isset($_SESSION['username']))
		{
			$pageTitle = 'Dashboard'; 

			include 'int.php';

			echo 'hello '.$_SESSION['username'];
			
			include $tpl . 'footer.php';
			
		}
		
		else
		{
			header('Location: index.php');
			exit();
		}
	// end function 4