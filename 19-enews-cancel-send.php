<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'ยกเลิกการรับข่าวสาร' ],
        ];
        $breadcrumbTitle = 'ยกเลิกการรับข่าวสาร';
        $breadcrumbBg = 'public/assets/app/images/bg/09.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="450">
                <h6 class="h4 lg fw-600 text-center">
                    แบบฟอร์มยกเลิกการรับข่าวสาร 
                </h6>
                <p class="md text-center mt-1">
                    ระบบได้ทำการยกเลิกการสมัครรับจดหมายของคุณเรียบร้อยแล้ว
                </p>
            </div>
            <div class="ss-box mt-4 pt-1" data-aos="fade-up" data-aos-delay="600">
                <div class="btns text-center">
                    <a class="btn btn-action btn-color-01 btn-round" href="#">
                        กลับไปยังหน้าแรก 
                        <em class="far fa-arrow-alt-circle-right ml-1"></em>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
