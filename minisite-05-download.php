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
            [ 'url' => '#', 'display' => 'ดาวน์โหลดเอกสาร' ],
            [ 'url' => '#', 'display' => 'แบบฟอร์มคำร้อง' ],
        ];
        $breadcrumbTitle = 'ดาวน์โหลดเอกสาร';
        $breadcrumbDesc = 'ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ';
        $breadcrumbBg = 'public/assets/app/images/bg/minisite-01.jpg';
        include('component/breadcrumb-minisite.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-minisite section-padding pt-0"
        style="background-image:url('public/assets/app/images/bg/pattern-02.png');">
        <div class="container">
            <div class="ss-box full-grid position-relative" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-box-shadow"></div>
                <div class="box-content">
                    <div class="grids">
                        <div class="grid lg-25 md-30 sm-100 mt-0">
                            <div class="tab-container">
                                <div class="tabs tabs-02">
                                    <a class="tab tab-header" href="#">
                                        เมนู <div class="hamburger">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </a>
                                    <a class="tab active" href="#">แบบฟอร์มคำร้อง</a>
                                    <a class="tab" href="#">แผนโครงการ</a>
                                    <a class="tab" href="#">รายงานประจำปี</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100 mt-3">
                            <?php
                                $listHeader = ['total', 'order', 'icon-rss'];
                                include('component/list-header-minisite.php');
                            ?>
                            <h6 class="h5 fw-500 color-01">กระดาน ถาม-ตอบ กรมธุรกิจพลังงาน</h6>
                            <?php for($i=0; $i<3; $i++){?>
                            <div class="mt-4 pt-2">
                                <h6 class="fw-600">แบบฟอร์มคำร้อง</h6>
                                <div class="border-top bcolor-mgray mt-3">
                                    <?php
                                            foreach([
                                                'pdf', 'doc', 'xls', 'ppt', 
                                                'jpg', 'gif', 'png', 'zip'
                                            ] as $d){
                                        ?>
                                    <div class="ss-file-02">
                                        <div class="icon-container">
                                            <div class="img-container">
                                                <div class="img-wrapper">
                                                    <img src="public/assets/app/images/icon/file-<?= $d ?>.png"
                                                        alt="File Icon" />
                                                </div>
                                            </div>
                                            <p class="xs fw-200">
                                                <span class="fw-600">0.78</span> MB
                                            </p>
                                        </div>
                                        <div class="block">
                                            <div class="text-container">
                                                <div class="wrapper">
                                                    <p class="sm fw-100">20 กุมภาพันธ์ 2564</p>
                                                    <p class="fw-500 lh-sm color-black">
                                                        โครงการสนับสนุนการลงทุนติดตั้งใช้งานระบบอบแห้งพลังงานแสงอาทิตย์
                                                    </p>
                                                </div>
                                            </div>
                                            <a class="btn-container" href="#">
                                                <div class="fw-600 color-01">
                                                    <em class="fas fa-arrow-circle-down color-01 mr-1"></em>
                                                    ดาวน์โหลด ( <span class="color-black">109</span> )
                                                </div>
                                            </a>
                                            <a class="btn-container">
                                                <div class="fw-500" data-toggle="modal" data-target="#warning-file">
                                                    <em class="fas fa-exclamation-triangle color-02 mr-1"></em>
                                                    แจ้งไฟล์เสีย
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <?php }?>
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
