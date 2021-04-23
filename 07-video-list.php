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
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'วิดีโอ' ],
        ];
        $breadcrumbTitle = 'วิดีโอ';
        $breadcrumbBg = 'public/assets/app/images/bg/06.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = [
                        'search', 'category', 'order', 'icon-grid', 'icon-rss',
                        'order_options' => [
                            'เก่าที่สุด - ใหม่ที่สุด', 'ใหม่ที่สุด - เก่าที่สุด', 'เปิดดูมากสุด'
                        ]
                    ];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="mt-4" data-aos="fade-up" data-aos-delay="450">
                <?php for($i=0; $i<12; $i++){?>
                    <div class="ss-card ss-card-07">
                        <div class="img-container">
                            <a class="ss-img adaptive-list" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container init-transparent op-100">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                    </div>
                                </div>
                                <div class="time-tag">3:15</div>
                            </a>
                        </div>
                        <div class="text-container">
                            <a class="title p md fw-600" href="#">
                                รายการเดินหน้าประเทศไทย ดีเซล B20 รหัสความสุข
                            </a>
                            <div class="ss-stat">
                                <div class="stat">
                                    1 เมษายน 2564
                                </div>
                                <div class="stat">
                                    <em class="far fa-eye mr-1"></em> 178
                                </div>
                            </div>
                            <div class="arrow">
                                <em class="far fa-arrow-alt-circle-right"></em>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = [
                        'total', 'pagination', 'pp',
                        'pp_options' => [12, 24, 36, 48, 60, 72, 84, 96]
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
