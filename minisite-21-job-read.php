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
            [ 'url' => '#', 'display' => 'ประกาศสมัครงาน' ],
        ];
        $breadcrumbTitle = 'ประกาศสมัครงาน';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-minisite section-padding pt-0" style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow lg"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger"><div></div><div></div><div></div></div>
                                    </a>
                                    <a class="tab active" href="#">หน่วยงานในสังกัด</a>
                                    <a class="tab" href="#">หน่วยงานภายนอกที่เกี่ยวข้อง</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <div class="ss-card ss-card-17 cols-3">
                                <div class="wrapper color-black">
                                    <div class="info-container">
                                        <div class="info">
                                            <p class="sm fw-600">ตำแหน่งงาน</p>
                                            <p class="lg fw-600 color-01 lh-xs">
                                                ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)
                                            </p>
                                        </div>
                                        <div class="info">
                                            <div class="ss-stat my-0">
                                                <div class="stat my-0">
                                                    <em class="far fa-clock color-01 mr-2"></em> 
                                                    <span class="fw-500">22 มกราคม  2564</span>
                                                </div>
                                            </div>
                                            <p class="sm fw-500">
                                                จำนวน 
                                                <span class="fw-600 color-01 text-xl mx-1">10</span> 
                                                ตำแหน่ง
                                            </p>
                                        </div>
                                        <div class="info">
                                            <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                                สมัครงาน <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grids">
                                <div class="grid xl-70 lg-2-3 sm-100 color-black">
                                    <p class="md fw-600">คุณสมบัติที่จำเป็น</p>
                                    <ul class="pl-4 mt-1">
                                        <li class="p sm pt-1 pl-1">เพศชาย อายุ 35 ปี ขึ้นไป</li>
                                        <li class="p sm pt-1 pl-1">วุฒิการศึกษา ปริญญาตรี วิศวกรเครื่องกล</li>
                                        <li class="p sm pt-1 pl-1">มีประสบการณ์ในการทำงานด้านเครื่องกล ไม่ต่ำกว่า 10 ปี</li>
                                        <li class="p sm pt-1 pl-1">สามารถถอดแบบและประมาณราคาได้</li>
                                        <li class="p sm pt-1 pl-1">มีทักษะในการบริหารโครงการและบริหารเวลาได้เป็นอย่างดี</li>
                                        <li class="p sm pt-1 pl-1">สามารถแก้ไขปัญหาที่เกิดขึ้นได้อย่างมีประสิทธิภาพ</li>
                                        <li class="p sm pt-1 pl-1">มีใบอนุญาตประกอบวิชาชีพ (จะได้รับพิจารณาเป็นพิเศษ)</li>
                                        <li class="p sm pt-1 pl-1">สามารถควบคุมดูแลการดำเนินงานของโครงการทุกโครงการให้เป็นไปตามแผน</li>
                                        <li class="p sm pt-1 pl-1">ให้คำแนะนำและแก้ปัญหาอย่างสร้างสรรค์เกี่ยวกับปัญหา / ข้อบกพร่องที่เกิดขึ้น</li>
                                        <li class="p sm pt-1 pl-1">ดูแลและให้คำปรึกษาพนักงานและประสานงานกับผู้มีส่วนร่วม</li>
                                        <li class="p sm pt-1 pl-1">มีทักษะในการติดต่อสื่อสารและมีมนุษยสัมพันธ์ที่ดี</li>
                                    </ul>
                                    <p class="md fw-600 mt-3 pt-1">หน้าที่และความรับผิดชอบ:</p>
                                    <p class="sm mt-1">
                                        ควบคุมดูแลโครงการที่ได้รับมอบหมายให้สามารถปฏิบัติงานได้อย่างมีประสิทธิภาพ 
                                        ตั้งแต่การบริหารจัดการบุคคลประจำ โครงการ การบริหารจัดการในงาน งบประมาณค่าใช้จ่าย 
                                        รวมถึงวัสดุอุปกรณ์และแรงงานที่ต้องใช้ในโครงการให้เป็นไปตามแผนที่กำหนด
                                    </p>
                                </div>
                                <div class="grid xl-30 lg-1-3 sm-100">
                                    <div class="px-3 py-3 bg-11 border bcolor-11">
                                        <p class="md fw-600 color-01">ข้อมูลตำแหน่งงาน</p>
                                        <p class="fw-600 mt-2">ประเภทงาน:</p>
                                        <p class="sm fw-400 lh-xs">งานประจำ</p>
                                        <p class="fw-600 mt-2">เงินเดือน:</p>
                                        <p class="sm fw-400 lh-xs">20,000 - 35,000 บาท</p>
                                        <p class="fw-600 mt-2">ประสบการณ์:</p>
                                        <p class="sm fw-400 lh-xs">0-3 ปี</p>
                                        <p class="fw-600 mt-2">เพศ:</p>
                                        <p class="sm fw-400 lh-xs">ชายหรือหญิง</p>
                                    </div>
                                    <div class="px-3 py-3 bg-12 border bcolor-12 color-white">
                                        <p class="md fw-500">สอบถามเพิ่มเติม</p>
                                        <p class="sm fw-200 lh-md mt-1">
                                            หัวหน้าฝ่ายทรัพยากรบุคคล <br>
                                            ฝ่ายทรัพยากรบุคคล <br>
                                            โทรศัพท์ <a class="color-white h-color-02" href="#">02-1234567</a> <br>
                                            อีเมล์ <a class="color-white h-color-02" href="#">HR@energy.go.th</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-video mt-4 pt-2">
                                <div class="wrapper">
                                    <video class="fit" controls="">
                                        <source src="public/assets/app/video/01.mp4" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <h6 class="fw-600 color-01 mt-5">::: ไฟล์เอกสารที่เกี่ยวข้อง :::</h6>
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
                            <div class="btns text-center border-top bcolor-11 mt-3 pt-3">
                                <a class="btn btn-action btn-color-01 btn-round" href="#">
                                    สมัครงาน <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                </a>
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
