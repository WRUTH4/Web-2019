<?php

// Require database & thông tin chung
require_once 'core/init.php';

// Xoá session
$session->destroy();
header($_DOMAIN); // Trở về trang index

?>