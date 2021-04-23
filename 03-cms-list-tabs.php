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
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbBg = 'public/assets/app/images/bg/04.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <?php
                $categories = [
                    'ข่าวประชาสัมพันธ์', 'กิจกรรมพลังงานจังหวัด', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร',
                    'เรื่องเด่นประเด็นดัง', 'ข่าวจัดซื้อจัดจ้าง', 'ประกาศรับสมัครงาน'
                ];
            ?>
            <div class="tab-container">
                <div class="tabs tabs-01">
                    <?php foreach($categories as $j=>$k){?>
                        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                            <?= $k ?>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php foreach($categories as $j=>$k){?>
                        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                            <?php
                                $listHeader = [
                                    'search', 'category', 'order', 'icon-grid', 'icon-rss',
                                    'order_options' => [
                                        'เรียงลำดับข้อมูล', 'รายการล่าสุด', 'รายการเก่าที่สุด',
                                        'เป็นที่นิยม', 'เริ่มต้นใหม่'
                                    ]
                                ];
                                include('component/list-header.php');
                            ?>
                            <div class="mt-4">
                                <?php for($i=0; $i<12; $i++){?>
                                    <div class="ss-card ss-card-07">
                                        <div class="img-container">
                                            <a class="ss-img adaptive-list" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-container">
                                            <a class="title p md fw-600" href="#">
                                                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                            </a>
                                            <div class="ss-stat">
                                                <div class="stat">
                                                    8 มกราคม 2020
                                                </div>
                                                <div class="stat">
                                                    <em class="far fa-eye mr-1"></em> 178
                                                </div>
                                            </div>
                                            <p class="xs desc">
                                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                HR Forum 2020, Big Data
                                            </p>
                                            <div class="arrow">
                                                <em class="far fa-arrow-alt-circle-right"></em>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <?php
                                $listFooter = [
                                    'total', 'pagination', 'pp',
                                    'pp_options' => [12, 24, 36, 48, 60, 72, 84, 96]
                                ];
                                include('component/list-footer.php');
                            ?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
