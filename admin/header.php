<!DOCTYPE html>
<?php if(!defined('ADMIN_PATH')) define('ADMIN_PATH', ''); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ucwords('Admin site - Khoa Công Nghệ Thông Tin - Trường Đại Học Thuỷ Lợi')?></title>   
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="<?php echo ADMIN_PATH; ?>css/style.css">   
    <link rel="stylesheet" href="<?php echo ADMIN_PATH; ?>bootstrap/css/bootstrap.min.css"/> 
    <script src="<?php echo ADMIN_PATH; ?>js/jquery.min.js"></script>          
</head>
<body>
    <?php  

    if (!$user)
    {
        echo
        '
          <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    
    else
    {
        echo
        '
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
 
    ?>