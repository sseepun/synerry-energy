<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-secretary.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-01.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
     <?php include('component/warning-file-modal.php'); ?>
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black">
                สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม 
                ประจำปี พ.ศ. 2562
            </h6>
            <div class="mt-2 mb-3">
                <?php include('component/post-header.php'); ?>
            </div>
            <img class="img bradius-round" src="public/assets/app/images/content/10.jpg" alt="Post Content Image" />
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
                <p class="mt-3 pt-1 lh-lg">
                    โดยสำนักงานปลัดกระทรวงพลังงาน ส่งผลงาน “ทูตพลังงานรวมพลังพัฒนาและอนุรักษ์พลังงานสู่ความยั่งยืน 
                    รุ่นที่ 1” จากสำนักงานพลังงานจังหวัดสมุทรปราการ และได้รับรางวัลเลิศรัฐ สาขาการบริหารราชการแบบมีส่วนร่วม 
                    ประเภทรางวัล สัมฤทธิผลประชาชนมีส่วนร่วม (Effective Change) ระดับดี
                </p>
                <p class="mt-3 pt-1 lh-lg">
                    สำหรับผลงานที่ได้รับรางวัลเลิศรัฐในปีนี้ แบ่งเป็น 3 สาขาได้แก่ 
                    สาขาบริการภาครัฐมอบให้แก่หน่วยงานรัฐที่มีผลการพัฒนาคุณภาพการให้บริการประชาชนด้วยบริการที่สะดวกรวดเร็ว 
                    โปร่งใส เป็นธรรม และเป็นที่พึงพอใจ จำนวน 123 รางวัล 
                    สาขาคุณภาพการบริหารจัดการภาครัฐมอบให้แก่หน่วยงานรัฐที่มีการพัฒนาคุณภาพการบริหารจัดการได้ทัดเทียมมาตรฐานสากลจำนวน 
                    24 รางวัล และสาขาการบริหารราชการแบบมีส่วนร่วมมอบให้แก่หน่วยงานรัฐที่มีความมุ่งมั่นตั้งใจในการพัฒนาประสิทธิภาพการบริหารราชการบนพื้นฐานความรับผิดชอบ 
                    และการมีส่วนร่วมของประชาชน จำนวน 66 รางวัล
                </p>
            </div>
            <div class="mt-2 mb-3">
                <?php
                    $postFooter = ['icon-social'];
                    include('component/post-footer.php');
                ?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="far fa-file-alt"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ไฟล์เอกสารที่เกี่ยวข้อง
                    </h6>
                    <div class="scroll-x-wrapper mt-2" data-simplebar>
                        <table class="table">
                            <tbody>
                                <?php for($i=0; $i<3; $i++){?>
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
                                                <a class="color-gray h-color-01" data-toggle="modal" data-target="#warning-file" href="#">
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
                </div>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="far fa-images"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        รูปภาพที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="gallery-grids pt-2 pb-3">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="grid lg-25 md-1-3">
                        <a class="ss-img horizontal bradius-round" href="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" data-fancybox="gallery">
                            <img class="d-none" src="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" alt="Image Fancybox Preview" />
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-code"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        Embed
                    </h6>
                </div>
            </div>
            <div class="post-video pt-2 pb-3">
                <div class="wrapper">
                    <video class="fit" controls="">
                        <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-film"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        วิดีโอที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids pb-3">
                <?php for($i=0; $i<3; $i++){?>
                    <div class="grid lg-1-3 sm-50">
                        <a class="ss-img bradius-round" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>

            <div class="ss-icon-title border-top bcolor-mgray">
                <em class="fas fa-book"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ข่าวที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids mt-2">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-04">
                            <a class="ss-img square" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <div class="card-tag">ข่าวประชาสัมพันธ์</div>
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
                                <div class="arrow">
                                    <em class="far fa-arrow-alt-circle-right"></em>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
