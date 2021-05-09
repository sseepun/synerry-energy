<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ERROR 404' ],
        ];
        $breadcrumbTitle = 'Oops!';
        $breadcrumbDesc = 'This Page is Not Found.';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding">
        <div class="container text-center">
            <div class="row bg-404 pb-5" style="background-image:url('public/assets/app/images/bg/404.jpg');background-size: contain;
                background-repeat:no-repeat;">
                <h4 class="fw-700">Oops! This Page is Not Found.</h4>
                <p>The requested page does not exist. </p>
                    <div class="btns mt-2 mt-md-4">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                            กลับไปหน้าแรก
                        </button>
                    </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
