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
            [ 'url' => '#', 'display' => 'การให้บริการ' ],
            [ 'url' => '#', 'display' => 'ดาวน์โหลดเอกสาร' ],
        ];
        $breadcrumbTitle = 'ดาวน์โหลดเอกสาร';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-03.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-padding section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = ['search', 'category', 'order'];
                    include('component/list-header.php');
                ?>
            </div>

            <?php for($j=0; $j<2; $j++){?>
                <div class="border-bottom-3 bcolor-mgray" data-aos="fade-up" data-aos-delay="450">
                    <h6 class="fw-600 mt-4 mb-2 pt-3">
                        แผนงานโครงการงบประมาณรายจ่ายประจำปี
                    </h6>
                    <div class="scroll-x-wrapper" data-simplebar>
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
                                            <div class="ticon bg-0<?= $i%5+2 ?>">
                                                <em class="far fa-file-<?= $d ?>"></em>
                                            </div>
                                        </td>
                                        <td style="min-width:380px;">
                                            <p class="md fw-600">
                                                ประกาศสำนักงานปลัดกระทรวงพลังงานเรื่อง ประกาศผู้ชนะการเสนอราคา 
                                                ซื้อวัสดุสำนักงาน จำนวน 3 รายการ
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
            <?php }?>

            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
