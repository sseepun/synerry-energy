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
            [ 'url' => '#', 'display' => 'กระดานถามตอบ' ],
            [ 'url' => '#', 'display' => 'ถามตอบกรมธุรกิจพลังงาน' ],
        ];
        $breadcrumbTitle = 'กระดานถามตอบ';
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
                                    <a class="tab active" href="#">ถาม-ตอบ กรมธุรกิจพลังงาน</a>
                                    <a class="tab" href="#">ประชาพิจารณ์</a>
                                    <a class="tab" href="#">การบริการของหน่วยงาน</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="d-flex fw-wrap jc-space-between">
                                <h6 class="h5 fw-600 color-01 mr-2">
                                    กระดาน ถาม-ตอบ กรมธุรกิจพลังงาน
                                </h6>
                                <button class="btn btn-action btn-color-01 btn-round btn-sm">
                                    ตั้งกระทู้ใหม่ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </button>
                            </div>
                            <div class="webboard-01 mt-3">

                                <div class="webboard-header color-white bg-02">
                                    <h6 class="fw-600">หมายเลข 5732</h6>
                                </div>
                                <div class="webboard-card">
                                    <div class="info-container">
                                        <div class="profile-icon">
                                            <div class="profile">
                                                <div class="img-fill fit" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <p class="sm fw-400 text-center mt-1">
                                            อนุชิน
                                        </p>
                                    </div>
                                    <div class="text-container">
                                        <div class="toolbar white">
                                            <div class="p sm fw-200 mr-2">
                                                <span class="fw-600">ตั้งกระทู้เมื่อ</span>
                                                <span class="mr-2">อาทิตย์ 17 มกราคม 2564</span>
                                                เวลา 06.00 น.
                                            </div>
                                            <div class="icons p sm fw-500">
                                                <a class="icon mr-3" href="#">
                                                    <em class="fas fa-share mr-1"></em> ตอบ
                                                </a>
                                                <div class="mr-3">ตอบ (10)</div>
                                                <a class="icon like active mr-3" href="#">
                                                    <em class="fas fa-thumbs-up"></em> 20
                                                </a>
                                                <a class="icon dislike" href="#">
                                                    <em class="fas fa-thumbs-up"></em> 8
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-wrapper">
                                            <p class="sm fw-600">
                                                ห้ามเก็บภาชนะบรรจุน้ำมันเชื้อเพลิงไว้ต่ำกว่าระดับพื้นดิน
                                            </p>
                                            <p class="xs fw-500 mt-1">
                                                ในกรณีที่สถานที่เก็บรักษาน้ำมันไวไฟน้อยไม่เกิน 450 ลิตร 
                                                นั้นเก็บอยู่ในห้องเก็บรักษาน้ำมันเชื้อเพลิงที่มีพื้นที่อยู่ต่ำกว่าระดับพื้นดิน 
                                                1.2 เมตร โดยที่ห้องนี้เป็นพื้นที่เชื่อมต่อกับชั้น 1 ของอาคาร 
                                                (เป็นห้องที่อยู่ระดับชั้นพื้นดิน แต่เป็นลักษณะหลุมลึกลงไปจากระดับพื้นดิน 
                                                1.2เมตร โดยที่ไม่ใช่ <br>
                                                <a class="fw-600 color-01 h-color-02" href="#">
                                                    <u>อ่านเพิ่มเติม</u>
                                                </a>
                                            </p>

                                            <p class="md fw-600 mt-3">
                                                ไฟล์แนบ
                                            </p>
                                            <div class="gallery-grids">
                                                <?php foreach(['pdf', 'doc'] as $d){?>
                                                    <div class="grid sm-100">
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

                                            <div class="post-footer-minisite px-0 py-0 no-border">
                                                <div class="block">
                                                    <a class="tag" href="#">โมเดลการพัฒนาชุมชน</a>
                                                    <a class="tag" href="#">กระทรวงพลังงาน</a>
                                                    <a class="tag" href="#">โรงไฟฟ้าชุมชน</a>
                                                    <a class="tag" href="#">Energy for All</a>
                                                    <a class="tag" href="#">น้ำมันไวไฟ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-600 color-01 mt-4">
                                    แสดงความคิดเห็น
                                </h6>
                                <div class="webboard-card chat mt-1">
                                    <div class="info-container">
                                        <div class="profile-icon">
                                            <div class="profile">
                                                <div class="img-fill fit" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <p class="sm fw-400 text-center mt-1">
                                            อนุชิน
                                        </p>
                                    </div>
                                    <div class="text-container">
                                        <div class="text-wrapper">
                                            <form action="/" method="POST">
                                                <div class="form-group">
                                                    <textarea name="message" rows="5" class="form-control no-bradius" required
                                                    placeholder="พิมพ์ความคิดเห็นของคุณ...." title="General Textarea"></textarea>
                                                </div>
                                                <div class="btns mt-2">
                                                    <button type="submit" class="btn btn-action btn-color-01 btn-round btn-sm">
                                                        แสดงความคิดเห็น <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="webboard-header color-white bg-black mt-3">
                                    <h6 class="p lg fw-500">ตอบกระทู้</h6>
                                    <div class="comment">2,063</div>
                                </div>
                                <?php for($i=0; $i<5; $i++){?>
                                    <div class="toolbar">
                                        <div class="p sm fw-200 mr-2">
                                            <span class="fw-600">ตั้งกระทู้เมื่อ</span>
                                            <span class="mr-2">อาทิตย์ 17 มกราคม 2564</span>
                                            เวลา 06.00 น.
                                        </div>
                                        <div class="icons p sm fw-500">
                                            <a class="icon mr-3" href="#">
                                                <em class="fas fa-share mr-1"></em> ตอบ
                                            </a>
                                            <div class="mr-3">ตอบ (10)</div>
                                            <a class="icon like active mr-3" href="#">
                                                <em class="fas fa-thumbs-up"></em> 20
                                            </a>
                                            <a class="icon dislike" href="#">
                                                <em class="fas fa-thumbs-up"></em> 8
                                            </a>
                                        </div>
                                    </div>
                                    <div class="webboard-card white">
                                        <div class="info-container">
                                            <div class="profile-icon">
                                                <div class="profile">
                                                    <div class="img-fill fit" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                                </div>
                                            </div>
                                            <p class="sm fw-400 text-center mt-1">
                                                อนุชิน
                                            </p>
                                        </div>
                                        <div class="text-container">
                                            <div class="text-wrapper">
                                                <p class="xs fw-500">
                                                    สอบถามกฎหมายเกี่ยวกับ LPG ค่ะ <br>
                                                    เนื่องจากสถานประกอบใช้งาน ถัง LPG เพื่อเป็นเชื้อเพลิงรถยก (Forklift) 
                                                    ต้องศึกษาข้อกฎหมายจากกฎกระทรวงฉบับใดบ้างคะ 
                                                    มีกฎกระทรวงสถานที่เก็บรักษาก๊าซปิโตรเลียมเหลวประเภทโรงเก็บ พ.ศ.2560
                                                    อ่านเพิ่มเติม
                                                </p>
                                                <div class="text-right mt-2">
                                                    <a class="p xs fw-500 h-color-02" href="#">
                                                        <em class="fas fa-exclamation-triangle color-02 mr-1"></em>
                                                        รายงานสแปม
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <?php
                                $listFooter = ['pagination', 'pp'];
                                include('component/list-footer-minisite.php');
                            ?>
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
