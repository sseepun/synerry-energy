<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'วารสารออนไลน์' ],
        ];
        $breadcrumbTitle = 'วารสารออนไลน์';
        $breadcrumbBg = 'public/assets/app/images/bg/07.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black">
                วารสารนโยบายพลังงาน ฉบับที่ 125 เมษายน - พฤษภาคม 2561 
            </h6>
            <div class="mt-2 mb-3">
                <?php include('component/post-header.php'); ?>
            </div>
            <div class="book-container">
                <div class="wow-book" id="wow-book">
                    <?php for($i=0; $i<4; $i++){?>
                        <div><img class="img" src="public/assets/app/images/content/0<?= $i+6 ?>.jpg" alt="Page <?= $i ?>" /></div>
                    <?php }?>
                </div>
            </div>
            <div class="post-content">
                <h6 class="fw-500">
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
            <div class="mb-3">
                <?php
                    $postFooter = ['icon-social'];
                    include('component/post-footer.php');
                ?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="far fa-file-alt"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ดาวน์โหลดวารสาร
                    </h6>
                    <?php if(false){?>
                        <div class="scroll-x-wrapper mt-2" data-simplebar>
                            <table class="table table-lg border-top bcolor-sgray">
                                <tbody>
                                    <?php
                                        foreach([
                                            'pdf', 'word', 'video', 'powerpoint',
                                            'image', 'excel', 'code'
                                        ] as $i=>$d){
                                    ?>
                                        <tr>
                                            <td class="va-baseline pr-0">
                                                <a class="ticon bg-0<?= $i%5+2 ?>" href="#">
                                                    <em class="far fa-file-<?= $d ?>"></em>
                                                </a>
                                            </td>
                                            <td style="min-width:380px;">
                                                <a class="title-wrap p md fw-600 h-color-01" href="#">
                                                    ประกาศสำนักงานปลัดกระทรวงพลังงานเรื่อง ประกาศผู้ชนะการเสนอราคา 
                                                    ซื้อวัสดุสำนักงาน จำนวน 3 รายการ
                                                </a>
                                                <p class="sm fw-200 color-gray ws-nowrap mt-1">
                                                    วันที่
                                                    <span class="fw-500 color-01">30/03/2564</span>
                                                    <span class="sep"></span>
                                                    ขนาดไฟล์
                                                    <span class="fw-500 color-01">1.31 MB</span>
                                                    <span class="sep"></span>
                                                    จำนวนดาวน์โหลด
                                                    <span class="fw-500 color-01">16 ครั้ง</span>
                                                    <span class="sep"></span>
                                                    <a class="color-gray h-color-01 btn-popup-toggle" data-popup="file-report" href="#">
                                                        <em class="fas fa-exclamation-circle text-xs color-01 mr-05"></em>
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </p>
                                            </td>
                                            <td style="min-width:130px;">
                                                <div class="d-flex ai-center jc-end">
                                                    <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                                        ดาวน์โหลด
                                                        <em class="far fa-arrow-alt-circle-down ml-1"></em>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    <?php }else{?>
                        <div class="scroll-x-wrapper mt-2" data-simplebar>
                            <table class="table">
                                <tbody>
                                    <?php for($i=0; $i<1; $i++){?>
                                        <tr>
                                            <td style="min-width:380px;">
                                                <p class="md fw-600 color-01">
                                                    รางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562.pdf
                                                </p>
                                                <p class="sm fw-200 color-gray mt-1">
                                                    ขนาดไฟล์
                                                    <span class="fw-500 color-01">1.31 MB</span>
                                                    <span class="sep"></span>
                                                    จำนวนดาวน์โหลด
                                                    <span class="fw-500 color-01">16 ครั้ง</span>
                                                    <span class="sep"></span>
                                                    <a class="color-gray h-color-01 btn-popup-toggle" data-popup="file-report" href="#">
                                                        <em class="fas fa-exclamation-circle text-xs color-01 mr-05"></em>
                                                        แจ้งไฟล์เสีย
                                                    </a>
                                                </p>
                                            </td>
                                            <td style="min-width:130px;">
                                                <div class="d-flex ai-center jc-end">
                                                    <a class="btn btn-action btn-color-02 btn-round btn-sm" href="#">
                                                        ดาวน์โหลด 
                                                        <em class="far fa-arrow-alt-circle-down ml-1"></em>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="far fa-images"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        วารสารที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids mt-2">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-02">
                            <div class="text-container">
                                <a class="title p md fw-600" href="#">
                                    วารสารนโยบายพลังงาน ฉบับที่ 128
                                    มกราคม-กันยายน 2563 
                                </a>
                                <div class="ss-stat mb-0 jc-space-between">
                                    <div class="stat mr-0">
                                        1 เมษายน 2564
                                    </div>
                                    <div class="stat mr-0">
                                        <em class="fas fa-download mr-1"></em> 159K
                                    </div>
                                    <div class="stat mr-0">
                                        <em class="far fa-eye mr-1"></em> 178
                                    </div>
                                </div>
                            </div>
                            <a class="ss-img vertical" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%4+6 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </section>
    
    <?php include_once('component/popup-file-report.php'); ?>
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    
    <script src="public/assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
