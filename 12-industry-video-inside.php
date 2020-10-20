<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">วิดีโอ</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="grids">

                <div class="grid lg-25 md-35 sm-100 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="grid lg-75 md-65 sm-100 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'วิดีโอ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2 sm-no-br">
                        โครงการจิตอาสา กระทรวงอุตสาหกรรม เราทำความดี ด้วยหัวใจ
                    </h2>
                    <div class="post-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            สำนักบริหารกลาง
                        </div>
                        <div class="stat">
                            <i class="fas fa-clock"></i>
                            7 เมษายน 2563
                        </div>
                        <div class="stat">
                            <i class="fas fa-eye"></i>
                            17 ครั้ง
                        </div>
                    </div>
                    
                    <div class="ss-video horizontal bradius-0 mt-4 mb-3">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                        <div class="play-container">
                            <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="post-footer border-bottom">
                        <div class="block">
                            <span class="fw-900">TAGS:</span> 
                            <div class="ss-tag">สำนักบริหารกลาง</div>
                        </div>
                        <div class="blick">
                            <a class="btn-social" href="#" tabindex="0">
                                <img src="public/assets/app/images/social/fb.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#" tabindex="0">
                                <img src="public/assets/app/images/social/tw.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#" tabindex="0">
                                <img src="public/assets/app/images/social/ln.png" alt="Social Icon">
                            </a>
                            <a class="btn-social" href="#" tabindex="0">
                                <img src="public/assets/app/images/social/link.png" alt="Social Icon">
                            </a>
                        </div>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">ไฟล์เอกสารที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="table-wrapper mt-1 border-bottom" data-simplebar data-aos="fade-up" data-aos-delay="300">
                        <table class="table table-download">
                            <tbody>
                                <?php for($i=0; $i<3; $i++){?>
                                    <tr>
                                        <td style="min-width:300px;">
                                            <span class="fw-600 color-04 text-lg">
                                                ประกาศกรมอนามัย ฉบับที่ 27/04.pdf
                                            </span>
                                            <br>
                                            <span class="text-sm">ขนาดไฟล์</span>
                                            <span class="fw-600 color-04">1.31 MB</span>
                                            <span class="text-sm">|</span>
                                            <span class="text-sm">จำนวนดาวน์โหลด</span>
                                            <span class="fw-600 color-04">16 ครั้ง</span>
                                        </td>
                                        <td style="min-width:390px;">
                                            <a class="btn btn-sm btn-round custom-btn-sgray btn-toggle" href="#" data-toggle="embed-<?= $i ?>">
                                                Embed <i class="fas fa-code"></i>
                                            </a>
                                            <a class="btn btn-sm btn-round custom-btn-gray" href="#">
                                                แจ้งไฟล์เสีย <i class="far fa-bell"></i>
                                            </a>
                                            <a class="btn btn-sm btn-round custom-btn-tertiary" href="#">
                                                คลิกเพื่อดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="no-padding">
                                            <div class="toggle-target" data-toggle="embed-<?= $i ?>">
                                                <textarea name="message" class="no-bradius" rows="2"></textarea>
                                                <div class="btns mt-0">
                                                    <a class="btn btn-sm custom-btn-tertiary no-bradius width-full" href="#">
                                                        คัดลอกโค้ด
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">วิดีโอที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="grids" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="grid lg-1-3 md-50 sm-50">
                                <div class="post-card post-card-08">
                                    <div class="title-container">
                                        <a class="title h4" href="#">
                                            สุริยะฯ ดันแผนพัฒนาอุตฯ 
                                            เครื่องจักรกลเต็มสูบ มุ่งสนับสนุน
                                            เกษตรแปรรูป ชี้เป็นจุดเริ่มต้นการ
                                            ปฏิรูปโครงสร้างศก
                                        </a>
                                    </div>
                                    <div class="d-flex ai-center jc-space-between stats">
                                        <div class="date">13.08.2563</div>
                                        <div class="d-flex view">
                                            <div class="icon"><i class="far fa-clock"></i></div>
                                            3:05
                                        </div>
                                        <div class="d-flex view">
                                            <div class="icon"><i class="fas fa-eye"></i></div>
                                            268
                                        </div>
                                    </div>
                                </div>
                                <?php if($i%2==0){?>
                                    <div class="ss-video square bradius-0">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="play-container">
                                            <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <a class="ss-img square bradius-0" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                        <div class="socials"></div>
                                    </a>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
