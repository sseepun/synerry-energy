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
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = [
                        'search', 'category', 'order',
                        'order_options' => [
                            'เก่าที่สุด - ใหม่ที่สุด', 'ใหม่ที่สุด - เก่าที่สุด', 'เปิดดูมากสุด'
                        ]
                    ];
                    include('component/list-header.php');
                ?>
            </div>
            <div data-aos="fade-up" data-aos-delay="450">
                <div class="scroll-x-wrapper mt-4 pt-2" data-simplebar>
                    <table class="table table-lg border-top border-bottom bcolor-sgray">
                        <tbody>
                            <?php for($i=0; $i<10; $i++){?>
                                <tr>
                                    <td class="va-baseline pr-0">
                                        <div class="ticon bg-0<?= $i%5+2 ?>">
                                            <em class="far fa-file-pdf"></em>
                                        </div>
                                    </td>
                                    <td style="min-width:380px;">
                                        <p class="md fw-600">
                                            ประกาศ กำหนดวัน เวลา สถานที่สอบและระเบียบเกี่ยวกับการสอบแข่งขันเพื่อบรรจุและแต่งตั้งบุคคลเข้ารับราชการใน
                                            ตำแหน่งเจ้าพนักงานการเงินและบัญชีปฏิบัติงาน
                                        </p>
                                        <p class="sm fw-200 color-gray mt-1">
                                            <span class="fw-500 color-01">ประกาศที่ 254/2563</span>
                                            <span class="sep"></span>
                                            ขนาดไฟล์
                                            <span class="fw-500 color-01">1.31 MB</span>
                                            <span class="sep"></span>
                                            จำนวนดาวน์โหลด
                                            <span class="fw-500 color-01">16 ครั้ง</span>
                                        </p>
                                    </td>
                                    <td style="min-width:130px;">
                                        <div class="text-center">
                                            <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                                <em class="far fa-edit mr-1"></em> สมัครออนไลน์ 
                                            </a>
                                        </div>
                                        <div class="text-center mt-2">
                                            <a class="p sm color-01 h-color-02" href="#">
                                                <em class="fas fa-exclamation-circle text-xs color-01 mr-05"></em>
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = [
                        'total', 'pagination', 'pp',
                        'pp_options' => [12, 24, 36, 48, 60, 72, 84, 96]
                    ];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
