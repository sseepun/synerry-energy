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
            [ 'url' => '#', 'display' => 'คล้งภาพ' ],
            [ 'url' => '#', 'display' => 'ภาพข่าวประชาสัมพันธ์' ],
        ];
        $breadcrumbTitle = 'คล้งภาพ';
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
                                    <a class="tab active" href="#">ภาพข่าวประชาสัมพันธ์</a>
                                    <a class="tab" href="#">ภาพงานอีเว้นท์</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="post-content sm">
                                <h6 class="h5 fw-500 lh-sm color-01 text-center sm-no-br">
                                    สุดยอดคนพลังงานสาขา “โครงการพลังงาน 4 ภาค”
                                </h6>
                                <div class="mt-3 mb-3">
                                    <?php include('component/post-header.php'); ?>
                                </div>
                                <img class="img" src="public/assets/app/images/bg/minisite-06.jpg" alt="Post Content Image" />
                            </div>
                            <div class="post-content">
                                <h6 class="fw-300 color-01">
                                    มหกรรมตลาดนัดพลังงานชุมชน เดินหน้าจัดกิจกรรมมาถึงครั้งที่ 3 โดยจัดขึ้นที่ภาคใต้ 
                                    กระทรวงพลังงาน เดินสายมอบรางวัล "สุดยอดคนพลังงาน" ต่อเนื่อง
                                </h6>
                                <p class="mt-3 pt-1 lh-lg">
                                    โดยมอบรางวัลระดับจังหวัด 14 จังหวัด คัดเข้ารอบระดับภาค 5 จังหวัด 12 รางวัล 
                                    ใน 4 สาขา เผยชาวใต้ตื่นตัวเรื่องพลังงาน รอลุ้นเป็นกำลังใจผู้ชนะคว้ารางวัลระดับประเทศ 
                                    นายกณพงศ์ เทพากรณ์ ผู้อำนวยการสำนักส่งเสริมการมีส่วนร่วมของประชาชน 
                                    สำนักงานปลัดกระทรวงพลังงาน เปิดเผยว่า ในโอกาสครบรอบการดำเนินโครงการพลังงานชุมชน 
                                    10 ปี กระทรวงพลังงานได้จัดกิจกรรมพิเศษมอบรางวัล "สุดยอดคนพลังงาน" และครั้งนี้เป็นครั้งที่ 
                                    3 ที่จัดขึ้นในภาคใต้ มอบรางวัลระดับจังหวัด และระดับภาค เพื่อเตรียมคัดเลือกสุดยอดคนพลังงานในดับประเทศต่อไป 
                                    "การดำเนินโครงการพลังงานชุมชนตลอด 10 ปี ได้สร้างการมีส่วนร่วมกับชุมชนจำนวน 1,676 แห่ง 
                                    สร้างโอกาสพัฒนาต่อยอดสู่วิสาหกิจชุมชนลดใช้พลังงานกว่า 188 กลุ่ม
                                </p>
                            </div>
                            <div class="mt-2 mb-3">
                                <?php
                                    $postFooter = ['tags'];
                                    include('component/post-footer-minisite.php');
                                ?>
                            </div>
                            
                            <h6 class="fw-600 color-01 mt-4 pt-2">::: รูปภาพที่เกียวข้อง :::</h6>
                            <div class="gallery-grids mt-2">
                                <div class="grid sm-40">
                                    <a class="ss-img square" href="public/assets/app/images/content/01.jpg" data-fancybox="gallery">
                                        <img class="d-none" src="public/assets/app/images/content/01.jpg" alt="Image Fancybox Preview" />
                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/01.jpg');"></div>
                                        <div class="hover-container">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid sm-60 mt-0">
                                    <div class="gallery-grids">
                                        <?php for($i=1; $i<7; $i++){?>
                                            <div class="grid sm-1-3 xs-50">
                                                <a class="ss-img square" href="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" data-fancybox="gallery">
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
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="gallery-grids">
                                        <?php for($i=0; $i<5; $i++){?>
                                            <div class="grid sm-20 xs-50">
                                                <a class="ss-img square" href="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" data-fancybox="gallery">
                                                    <img class="d-none" src="public/assets/app/images/content/0<?= $i%5+1 ?>.jpg" alt="Image Fancybox Preview" />
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                    <?php if($i==4){?>
                                                        <div class="hover-container op-100">
                                                            <p class="md color-white text-center">
                                                                <span class="h4 fw-500 lh-xs">40</span>
                                                                <br> ภาพ
                                                            </p>
                                                        </div>
                                                    <?php }else{?>
                                                        <div class="hover-container">
                                                            <div class="icon">
                                                                <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            
                            <h6 class="fw-600 color-01 mt-4 pt-2 pb-4">::: EMBED :::</h6>
                            <div class="mt-2">
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
                                    <div class="title color-01">ELATED PHOTOS</div>
                                    <div class="desc color-black">คลังภาพที่เกี่ยวข้อง</div>
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
                                                        <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                    </div>
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
