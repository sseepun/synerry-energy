<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/wow_book/wow_book/wow_book.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'วารสารออนไลน์' ],
            [ 'url' => '#', 'display' => 'วารสารรายเดือน' ],
        ];
        $breadcrumbTitle = 'วารสารออนไลน์';
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
                                    <a class="tab active" href="#">วารสารรายเดือน</a>
                                    <a class="tab" href="#">วารสารฉบับพิเศษ</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">
                            <div class="post-content sm">
                                <h6 class="h5 fw-500 lh-sm color-01 text-center sm-no-br">
                                    Energy Plus ฉบับเดือน กรกฎาคม – กันยายน 2556
                                </h6>
                                <div class="mt-3 mb-3">
                                    <?php include('component/post-header.php'); ?>
                                </div>
                                <div class="book-container minisite">
                                    <div class="wow-book" id="wow-book">
                                        <?php for($i=0; $i<4; $i++){?>
                                            <div><img class="img" src="public/assets/app/images/content/0<?= $i+6 ?>.jpg" alt="Page <?= $i ?>" /></div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">
                                <p class="lh-lg">
                                    ในขณะที่การใช้พลังงานนั้นไม่มีที่ท่าว่าจะลดลงแต่อย่างใด มีแต่ความต้องการปริมาณน้ำมันที่สูงขึ้น 
                                    ทั้งการใช้งานเพื่อการค้า การอยู่อาศัย เป็นแหล่งพลังงานต่างๆ สถานการณ์เช่นนี้ทำให้ประทศต่างๆ 
                                    ต้องมุ่งศึกษาและใช้พลังงานทดแทนแบบใหม่ เพื่อกดแทนการใช้น้ำมันจากรายงานมีโอกาสที่จะหมดจากโลกนี้ไปในอีก 
                                    50 ปีข้างหน้า พลังงานตัวหนึ่งที่เราสามารถหยิบจับมาใช้ปล่าได้โดยไม่มีค่ใช้จ่ายใดๆ เลยคือ พลังงานแสงอาทิดย์ 
                                    ซึ่งการจะปลี่ยนพลังงานแสงอาทิตย์ให้อยู่ในรูปแสงแดดกลายเป็นพลังงานได้นั้นเราทำผ่านอุปกรณ์ที่เรียกว่า 
                                    Solar Cell สิ่งประดิษฐ์ทางอิเล็กทรอนิกส์ ที่สร้างจากสารกึ่งตัวนำซึ่งสามารถเปลี่ยน 
                                    พลังงานแสงอาทิตย์ให้เป็นพลังงานไพฟ้าได้โดยตรง
                                </p>
                            </div>
                            <div class="mt-3 mb-3">
                                <?php
                                    $postFooter = ['tags'];
                                    include('component/post-footer-minisite.php');
                                ?>
                            </div>

                            <h6 class="fw-600 color-01 mt-4 pt-1">::: ไฟล์เอกสารที่เกี่ยวข้อง :::</h6>
                            <div class="gallery-grids mt-1 pb-4">
                                <?php foreach(['pdf', 'pdf'] as $d){?>
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
                                                    Energy Plus ฉบับเดือน กรกฎาคม – กันยายน 2556
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
                                    <div class="title color-01">ELATED BOOKS</div>
                                    <div class="desc color-black">วารสารที่เกี่ยวข้อง</div>
                                </div>
                            </div>
                            <div class="grids mt-2">
                                <?php for($i=0; $i<3; $i++){?>
                                    <div class="grid xl-1-3 lg-50 sm-50">
                                        <div class="ss-card ss-card-06">
                                            <a class="ss-img square" href="#">
                                                <div class="img-bg mag-bg"></div>
                                                <div class="mag-container">
                                                    <img src="public/assets/app/images/content/0<?= $i%4+6 ?>.jpg" alt="Magazine Cover" />
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
                                                    Energy Plus ฉบับเดือน ตุลาคม – ธันวาคม 2556 
                                                </a>
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
