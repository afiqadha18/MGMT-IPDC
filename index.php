<?php

function putPage($page) {
    // put a list of allowed pages here
    $allowed = array('index', 'equipment-management-hksc', 'page2');

    $page = trim($page);
    $page = (in_array($page, $allowed)) ? $page : 'home';

    echo @file_get_contents('.\pages\\' . $page . '.php');
}

function getTitle() {
    $uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri ,'equipment-management')) {
        $pageTitle = "Equipment Management";
        return $pageTitle;
    } else if (strpos($uri ,'equipment-backup')) {
        $pageTitle = "Equipment Backup";
        return $pageTitle;
    } else if (strpos($uri ,'account')) {
        $pageTitle = "My Account";
        return $pageTitle;
    } else if (strpos($uri ,'radius-accounting')) {
        $pageTitle = "Radius Accounting";
        return $pageTitle; 
    } else {
        return "Home";
    }
    return "Erro";
}

function setActive() {
    
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>IPDC a-Hub | <?php echo getTitle(); ?></title>
        <link rel="icon" type="image/x-icon" href="./assets/fav.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body>
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="p-4 pt-5">
                    <a href="#" class="img logo mb-5" style="background-image: url(./images/user.png);"></a>
                    <ul class="list-unstyled components mb-5">
                        <li id="sideHome" class="active">
                            <a href="?r=index">Home</a>
                        </li>
                        <li>
                        <a href="#EquipmentListSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Equipment Management</a>
                            <ul class="collapse list-unstyled" id="EquipmentListSub">
                                <li>
                                    <a href="?r=equipment-management-hksc">Hong Kong SC</a>
                                </li>
                                <li>
                                    <a href="#">Singapore SC</a>
                                </li>
                                <li>
                                    <a href="#">Taiwan SC</a>
                                </li>
                                <li>
                                    <a href="#">Ashburn USA SC</a>
                                </li>
                                <li>
                                    <a href="#">Frankfurt SC</a>
                                </li>
                                <li>
                                    <a href="#">Equipment Group</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#RadiusSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Radius Accounting</a>
                            <ul class="collapse list-unstyled" id="RadiusSub">
                                <li>
                                    <a href="#">Manage Users</a>
                                </li>
                                <li>
                                    <a href="#">by Equipment Group</a>
                                </li>
                                <li>
                                    <a href="#">by Scrubbing Centre</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="#EquipmentBackupSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Equipment Backup</a>
                            <ul class="collapse list-unstyled" id="EquipmentBackupSub">
                                <li>
                                    <a href="#">Hong Kong SC</a>
                                </li>
                                <li>
                                    <a href="#">Singapore SC</a>
                                </li>
                                <li>
                                    <a href="#">Taiwan SC</a>
                                </li>
                                <li>
                                    <a href="#">Ashburn USA SC</a>
                                </li>
                                <li>
                                    <a href="#">Frankfurt SC</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="#MyAccountSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">My Account</a>
                            <ul class="collapse list-unstyled" id="MyAccountSub">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <div class="footer">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i><br> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a> <br> for <a href="https://www.ipdc.asia/" target="_blank"> IPDC Solutions Pte Ltd. </a>
                        </p>
                    </div> -->
                </div>
            </nav>
            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-highlight">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li type="button "id="sideHome" class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Equipment Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Radius Accounting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Equipment Backup</a>
                                </li>
                                <li class="nav-item logout">
                                    <a class="nav-link" href="#">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content-body">
                <?php  
                    $uri = $_SERVER['REQUEST_URI'];
                    if ($uri == '/'){
                        putPage('index');
                    } else {
                        putPage($_GET['r']);
                    }
                ?>
                </div>
                <div class="footer">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i><br> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a> for <a href="https://www.ipdc.asia/" target="_blank"> IPDC Solutions Pte Ltd. </a>
                        </p>
                    </div>
            </div>
        </div>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/main.js"></script>
        <?php
            // date_default_timezone_set("Asia/Singapore");
            // echo date('d-M-Y H:i:s', time());
            
        ?>
    </body>
</html>