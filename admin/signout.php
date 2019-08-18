<?php

// Require database & thông tin chung
require_once 'config/connect.php';	

// Xoá session
$session->destroy();
header($_DOMAIN); // Trở về trang index

?>