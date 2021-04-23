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
            [ 'url' => '#', 'display' => 'รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง' ],
        ];
        $breadcrumbTitle = 'รวมลิงค์และเว็บไซต์หน่วยงานที่เกี่ยวข้อง';
        $breadcrumbBg = 'public/assets/app/images/bg/10.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = [
                        'search', 'category',
                        'order_options' => [
                            'เรียงลำดับข้อมูล', 'รายการล่าสุด', 'รายการเก่าที่สุด',
                            'เป็นที่นิยม', 'เริ่มต้นใหม่'
                        ]
                    ];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="gallery-grids mt-1" data-aos="fade-up" data-aos-delay="450">
                <?php for($i=0; $i<20; $i++){?>
                    <div class="grid xl-20 lg-25 md-1-3 sm-50 mt-4">
                        <div class="ss-card ss-card-03">
                            <a class="ss-img clip-path-01" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/weblink-0<?= $i%9+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <a class="title p fw-600 text-center" href="#">
                                    กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = [
                        'total', 'pagination', 'pp',
                        'pp_options' => [20, 40, 60, 80, 100]
                    ];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
