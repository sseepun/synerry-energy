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
            [ 'url' => '#', 'display' => 'ประกาศรับสมัครงาน' ],
        ];
        $breadcrumbTitle = 'ประกาศรับสมัครงาน';
        $breadcrumbBg = 'public/assets/app/images/bg/12.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding" data-aos="fade-up" data-aos-delay="300">
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
                    <?php if(true){?>
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
        </div>
    </section>
    
    <?php include_once('component/popup-file-report.php'); ?>
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
