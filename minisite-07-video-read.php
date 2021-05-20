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
            [ 'url' => '#', 'display' => 'วิดีทัศน์' ],
            [ 'url' => '#', 'display' => 'วิดีทัศน์เกี่ยวกับองค์กร' ],
        ];
        $breadcrumbTitle = 'วิดีทัศน์';
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
                                    <a class="tab active" href="#">วิดีทัศน์เกี่ยวกับองค์กร</a>
                                    <a class="tab" href="#">วิดีทัศน์กิจกรรม</a>
                                    <a class="tab" href="#">วิดีทัศน์ CSR</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="post-content sm">
                                <h6 class="h5 fw-500 lh-sm color-01 text-center sm-no-br">
                                    รัฐมนตรีว่าการกระทรวงพลังงาน ได้เข้าร่วมและรับเชิญเป็นหนึ่งในผู้กล่าวนำในการประชุม 
                                    LNG Producer-Consumer Conference ครั้งที่ 8 <br>
                                    ที่กรุงโตเกียว ประเทศญี่ปุ่น
                                </h6>
                                <div class="mt-3 mb-3">
                                    <?php include('component/post-header.php'); ?>
                                </div>
                                <div class="post-video width-full">
                                    <div class="wrapper">
                                        <video class="fit" controls="">
                                            <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mb-3">
                                <?php
                                    $postFooter = ['tags'];
                                    include('component/post-footer-minisite.php');
                                ?>
                            </div>

                            <h6 class="fw-600 color-01 mt-4 pt-1">::: ไฟล์วิดีโอดาวน์โหลด :::</h6>
                            <div class="gallery-grids mt-1">
                                <?php foreach(['vdo', 'vdo', 'vdo', 'vdo'] as $d){?>
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
                            
                            <h6 class="fw-600 color-01 mt-4 pt-2">::: EMBED :::</h6>
                            <div class="mt-2 pb-4">
                                <textarea name="message" class="adaptive p xs d-block fgray width-full no-bradius" rows="4" data-copy="1"><iframe id="inlineFrameExample" title="Inline Frame Example" width="300" height="200" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik"></iframe></textarea>
                                <div class="btns text-center">
                                    <a class="btn btn-action btn-color-01 width-full no-bradius" data-copy="1" href="#">
                                        คัดลอกโค๊ด
                                    </a>
                                </div>
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
                                    <div class="title color-01">ELATED VIDEOS</div>
                                    <div class="desc color-black">วิดีทัศน์ที่เกี่ยวข้อง</div>
                                </div>
                            </div>
                            <div class="grids mt-2">
                                <?php for($i=0; $i<3; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                <div class="hover-container">
                                                    <div class="icon">
                                                        <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                    </div>
                                                </div>
                                                <div class="video-info">
                                                    <div class="duration">10:20:08</div>
                                                    <em class="fas fa-play-circle"></em>
                                                </div>
                                            </a>
                                            <div class="text-container">
                                                <div class="ss-stat jc-space-between">
                                                    <div class="stat">
                                                        <em class="far fa-clock mr-1"></em> 8 มกราคม 2020
                                                    </div>
                                                    <div class="stat">
                                                        <em class="far fa-eye mr-1"></em> 178
                                                    </div>
                                                </div>
                                                <a class="title p md fw-600" href="#">
                                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                </a>
                                                <div class="arrow">
                                                    <em class="far fa-arrow-alt-circle-right"></em>
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
