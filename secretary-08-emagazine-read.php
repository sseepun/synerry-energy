<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-secretary.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
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
                        วารสารที่เกี่ยวข้อง
                    </h6>
                </div>
            </div>
            <div class="grids mt-2">
                <?php for($i=0; $i<4; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-04">
                            <a class="ss-img vertical" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%4+6 ?>.jpg');"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <div class="card-tag">ข่าวประชาสัมพันธ์</div>
                                <a class="title p md fw-600" href="#">
                                    วารสารนโยบายพลังงาน ฉบับที่ 128
                                    มกราคม-กันยายน 2563
                                </a>
                                <div class="ss-stat">
                                    <div class="stat mr-0">
                                        8 มกราคม 2020
                                    </div>
                                    <div class="stat mr-0">
                                        <em class="fas fa-download mr-1"></em> 159K
                                    </div>
                                    <div class="stat mr-0">
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
