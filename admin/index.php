<?php 
    require_once 'config/connect.php'; 
    require_once 'header.php';

	if ($user)
	{
		require_once 'sidebar.php';
		require_once 'content.php';
	}	
	else
	{	    
	    require_once 'signin.php';
	}
	
    require_once 'footer.php'; 
?>