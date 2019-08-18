<?php
    require_once 'functions.php';
    require_once 'db.php';
    require_once 'session.php';         
 
 	$_DOMAIN = 'http://localhost/myfile/admin/';
    
	$db = new db();
	$db->connect();
	$db->set_char('utf8');


	date_default_timezone_set('Asia/Ho_Chi_Minh'); 
	$date_current = '';
	$date_current = date("Y-m-d H:i:sa");

	// Khởi tạo session
	$session = new session();
	$session->start();

	// Kiểm tra session
	if ($session->get() != '')
	{
		$user = $session->get();
	}
	else
	{
		$user = '';
	}

	// Nếu đăng nhập
	if ($user)
	{
	// Lấy dữ liệu tài khoản
	$sql_get_data_user = "SELECT * FROM accounts WHERE username = '$user'";
	if ($db->num_rows($sql_get_data_user))
	{
		$data_user = $db->fetch_assoc($sql_get_data_user, 1);
	}
}

?>