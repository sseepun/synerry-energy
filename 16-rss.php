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
            [ 'url' => '#', 'display' => 'RSS Feed' ],
        ];
        $breadcrumbTitle = 'RSS Feed';
        $breadcrumbBg = 'public/assets/app/images/bg/03.jpg';
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
            <div class="mt-3 pt-2" data-aos="fade-up" data-aos-delay="450">
                <div class="border-top bcolor-sgray">
                    <?php for($i=0; $i<10; $i++){?>
                        <div class="border-bottom bcolor-sgray">
                            <div class="ss-card ss-card-01">
                                <div class="icon-container">
                                    <div class="icon">
                                        <em class="zmdi zmdi-rss"></em>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <a class="title p fw-600" href="#">
                                        ประกาศกระทรวงพลังงาน NO GIFT POLICY “งดรับ งดให้ ของขวัญ ของกำนัลทุกชนิด”
                                    </a>
                                    <?php if($i%2==0){?>
                                        <p class="sm fw-200 color-gray">
                                            ประกาศกระทรวงพลังงาน NO GIFT POLICY “งดรับ งดให้ ของขวัญ ของกำนัลทุกชนิด”
                                        </p>
                                    <?php }?>
                                    <h6 class="p sm fw-600 color-01 mt-1">
                                        20.01.2564
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
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
