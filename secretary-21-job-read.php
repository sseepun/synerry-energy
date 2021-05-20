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
            [ 'url' => '#', 'display' => 'ประกาศรับสมัครงาน' ],
        ];
        $breadcrumbTitle = 'ประกาศรับสมัครงาน';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-16.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h6 class="h4 fw-500 lh-sm color-black">
                ประกาศ กำหนดวัน เวลา สถานที่สอบและระเบียบเกี่ยวกับการสอบแข่งขันเพื่อบรรจุและแต่งตั้ง
                บุคคลเข้ารับราชการในตำแหน่งเจ้าพนักงานการเงินและบัญชีปฏิบัติงาน
            </h6>
            <div class="mt-2 pb-2">
                <?php include('component/post-header.php'); ?>
            </div>
            <div class="ss-icon-title border-top border-bottom bcolor-mgray pb-2">
                <em class="far fa-file-alt"></em>
                <div class="text-wrapper">
                    <h6 class="h5 sm fw-600 color-black">
                        ไฟล์แนบ
                    </h6>
                    <div class="scroll-x-wrapper mt-2" data-simplebar>
                        <table class="table">
                            <tbody>
                                <?php for($i=0; $i<3; $i++){?>
                                    <tr>
                                        <td style="min-width:380px;">
                                            <p class="md fw-600 color-01">
                                                ประกาศ กำหนดวัน เวลา สถานที่สอบ
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
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
