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
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
        $breadcrumbBg = 'public/assets/app/images/bg/22.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = [
                        'search', 'category', 'order',
                        'order_options' => [
                            'เก่าที่สุด - ใหม่ที่สุด', 'ใหม่ที่สุด - เก่าที่สุด', 'เปิดดูมากสุด'
                        ]
                    ];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="d-flex ai-center jc-space-between fw-wrap">
                    <h6 class="h5 sm fw-600 ws-nowrap mr-3">
                        กิจกรรมในสัปดาห์นี้
                    </h6>
                    <div class="btns width-auto my-1">
                        <a class="btn btn-action btn-color-04 btn-sm btn-round" href="#">
                            กิจกรรมในเดือนนี้ <em class="far fa-calendar-alt ml-1"></em>
                        </a>
                        <a class="btn btn-action btn-color-01 btn-sm btn-round" href="#">
                            กิจกรรมทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                        </a>
                    </div>
                </div>

                <?php for($i=0; $i<12; $i++){?>
                    <div class="ss-card ss-card-09">
                        <div class="ss-date-container">
                            <div class="ss-date clip-path-01">
                                <div class="date">22</div>
                                <div class="month">มกราคม</div>
                                <div class="year">2564</div>
                            </div>
                        </div>
                        <div class="img-container">
                            <a class="ss-img adaptive-list clip-path-01" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-container">
                            <a class="title p md fw-600" href="#">
                                งานสัมมนาและนิทรรศการ "เปิดประสบการณ์ เทคนิค การผลิตไฟฟ้าจากพลังงานทดแทน
                            </a>
                            <div class="ss-stat">
                                <div class="stat">
                                    <em class="far fa-calendar-alt icon-round mr-1"></em>
                                    22 มกราคม 2564
                                </div>
                                <div class="stat">
                                    <em class="far fa-clock icon-round mr-1"></em>
                                    8.00-17.30 น.
                                </div>
                                <div class="stat">
                                    <em class="fas fa-map-marker-alt icon-round mr-1"></em>
                                    ศูนย์การประชุมแห่งชาติสิริกิติ์
                                </div>
                            </div>
                            <p class="xs desc">
                                กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                HR Forum 2020, Big Data
                            </p>
                            <div class="btns mt-3">
                                <a class="btn btn-action btn-color-01 btn-xs btn-round" href="#">
                                    รายละเอียดเพิ่มเติม
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
