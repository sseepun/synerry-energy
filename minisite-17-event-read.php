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
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
            [ 'url' => '#', 'display' => 'กิจกรรมรวมทั้งหมด' ],
        ];
        $breadcrumbTitle = 'ปฏิทินกิจกรรม';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab" href="#">สัมนาวิชาการ</a>
                                    <a class="tab" href="#">กิจกรรมเพื่อสังคม</a>
                                    <a class="tab active" href="#">นิทรรศการประชาสัมพันธ์</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="post-content sm">
                                <h6 class="h5 fw-500 lh-sm color-01 text-center sm-no-br">
                                    กระทรวงพลังงาน เร่งเครื่อง พลังงานเพื่อทุกคน <br>
                                    (Energy for All) ปี2563
                                </h6>
                                <div class="mt-3 mb-3">
                                    <div class="ss-stat style-calendar my-0">
                                        <div class="stat">
                                            <em class="far fa-calendar color-01 mr-2"></em> 
                                            <span class="p sm fw-400">12 เมษายน 2564</span>
                                        </div>
                                        <div class="stat">
                                            <em class="far fa-clock color-01 mr-2"></em> 
                                            <span class="p sm fw-400">12.45 - 15.00</span>
                                        </div>
                                        <div class="stat width-full">
                                            <em class="fas fa-map-marker-alt color-01 mr-2"></em>
                                            <span class="p sm fw-400">
                                                618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <img class="img" src="public/assets/app/images/content/10.jpg" alt="Post Content Image" />
                            </div>
                            <div class="post-content">
                                <h6 class="fw-300 color-01">
                                    “ทูตพลังงานรวมพลังพัฒนาและอนุรักษ์พลังงานสู่ความยั่งยืน รุ่นที่ 1” 
                                    จากสำนักงานพลังงานจังหวัดสมุทรปราการ สำนักงานปลัดกระทรวงพลังงาน
                                </h6>
                                <p class="mt-3 pt-1 lh-lg">
                                    เมื่อวันที่ 13 กันยายน 2562 สำนักงาน ก.พ.ร. จัดพิธีมอบรางวัลเลิศรัฐ ประจำปี พ.ศ. 2562 
                                    เพื่อเชิดชูหน่วยงานภาครัฐที่มีผลงานโดดเด่นกว่า 200 ผลงาน  โดยมี นายวิษณุ เครืองาม รองนายกรัฐมนตรี 
                                    เป็นประธานในพิธีมอบรางวัลเลิศรัฐ ประจำปี 2562 ในปีนี้มีหน่วยงานภาครัฐที่ได้รับรางวัลกว่า 219 ผลงาน 
                                    จากทั้งหมดที่ส่งเข้าประกวด 1,043 ผลงาน
                                </p>
                            </div>
                            <div class="mt-2 mb-3">
                                <?php
                                    $postFooter = ['tags'];
                                    include('component/post-footer-minisite.php');
                                ?>
                            </div>

                            <h6 class="fw-600 color-01 mt-4 pt-1">::: แผนที่ GOOGLE MAP :::</h6>
                            <div class="map-container adaptive mt-2">
                                <div class="fit img-fill" style="background-image:url('public/assets/app/images/misc/map-minisite.jpg');"></div>
                            </div>

                            <h6 class="fw-600 color-01 mt-4 pt-2">::: ไฟล์เอกสารที่เกี่ยวข้อง :::</h6>
                            <div class="gallery-grids mt-1">
                                <?php foreach(['pdf', 'doc'] as $d){?>
                                    <div class="grid lg-50 sm-100 mt-2">
                                        <div class="ss-file-01">
                                            <div class="icon-container">
                                                <div class="img-container">
                                                    <div class="img-wrapper">
                                                        <img src="public/assets/app/images/icon/file-<?= $d ?>.png" alt="File Icon" />
                                                    </div>
                                                </div>
                                                <p class="xs fw-200">
                                                    <span class="fw-600">0.78</span> MB
                                                </p>
                                            </div>
                                            <div class="text-container">
                                                <p class="fw-500 lh-sm color-black">
                                                    โครงการสนับสนุนการลงทุนติดตั้งใช้งาน
                                                    ระบบอบแห้งพลังงานแสงอาทิตย์
                                                </p>
                                                <div class="p xs mt-2">
                                                    <a class="color-01 h-color-02 fw-600 mr-3" href="#">
                                                        <em class="fas fa-arrow-circle-down mr-1"></em> 
                                                        ดาวน์โหลด ( <span class="color-black">109</span> )
                                                    </a>
                                                    <a class="color-gray h-color-02 fw-500" data-toggle="modal" data-target="#warning-file" href="#">
                                                        <em class="fas fa-exclamation-triangle color-02 mr-1"></em>
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>

                            <div class="list-control ss-border color-black mt-4">
                                <a class="list-btn color-black h-color-02" href="#">
                                    <div class="btn btn-social btn-color-06 mr-2">
                                        <em class="fas fa-arrow-left"></em>
                                    </div>
                                    <div class="text p sm lh-sm">
                                        ก.พลังงานแจงไม่ได้ยกเลิกส่งเสริม‘พลังงานชุมชน’
                                    </div>
                                </a>
                                <div class="list-icon color-01">
                                    <em class="fas fa-th-large"></em>
                                </div>
                                <a class="list-btn color-black h-color-02" href="#">
                                    <div class="text p sm lh-sm">
                                        B10 ดีเซลพื้นฐานใหม่ ช่วยเกษตรกรไทย
                                        ใส่ใจสิ่งแวดล้อม
                                    </div>
                                    <div class="btn btn-social btn-color-06 ml-2">
                                        <em class="fas fa-arrow-right"></em>
                                    </div>
                                </a>
                            </div>

                            <div class="ss-icon-title-02">
                                <div class="text-icon color-01">R</div>
                                <div class="text-wrapper">
                                    <div class="title color-01">ELATED EVENTS</div>
                                    <div class="desc color-black">กิจกรรมที่เกี่ยวข้อง</div>
                                </div>
                            </div>
                            <div class="grids mt-2">
                                <?php for($i=0; $i<3; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/event-0<?= $i%3+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <a class="title p md fw-600" href="#">
                                                    โครงการอบรม เรื่อง การจัดทำระบบบัญชีข้อมูล (Data Catalog) 
                                                    เพื่อนำไปสู่การเปิดเผยข้อมูลภาครัฐ (Open Data)
                                                </a>
                                                <div class="ss-stat style-calendar mt-2 mb-0">
                                                    <div class="stat">
                                                        <em class="far fa-calendar mr-2"></em> 
                                                        <span class="fw-500">12 เมษายน 2564</span>
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-2"></em> 
                                                        <span class="fw-500">12.45 - 15.00</span>
                                                    </div>
                                                    <div class="stat">
                                                        <em class="fas fa-map-marker-alt mr-2"></em>
                                                        <span class="fw-500">
                                                            618 ถนนนิคมมักกะสัน <br>
                                                            เเขวงมักกะสัน เขตราชเทวี <br>
                                                            กรุงเทพมหานคร
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
