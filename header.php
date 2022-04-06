<?php
if (strpos($_SERVER['HTTP_HOST'], "localhost") !== FALSE) {
    define('SITE_DIRECTORY', "/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
} else {
    define('SITE_DIRECTORY', "deepansh/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
}
define('SITE_PROTOCOL', "http://"); //$_root_path

define('SITE_URL', SITE_PROTOCOL . $_SERVER['HTTP_HOST'] . '/' . SITE_DIRECTORY);  //Site URL with Protocol
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo SITE_URL; ?>/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/index_page.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/html_day_2_assignment.css">
    <script src="<?php echo SITE_URL; ?>/css/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo SITE_URL; ?>/css/jquery_cdn/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="<?php echo SITE_URL; ?>/index.php"><img src="<?php echo SITE_URL; ?>/image/logo/radix_logo.jpg" class="logo" height="50" alt="logo"> RadixTraining</a>
            <button class="navbar-toggler  bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/Html/index.php">HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/Css_pages/index.php">CSS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/Bootstrap/index.php">BOOTSTRAP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/JavaScript/index.php">JAVASCRIPT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/jquery/index.php">JQUERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo SITE_URL; ?>/Php/index.php">PHP</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light bg-primary text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>