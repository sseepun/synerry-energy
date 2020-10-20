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
                <h2 class="fw-100 mb-0">ข่าวประชาสัมพันธ์</h2>
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
                            [ 'url' => '#', 'name' => 'ข่าวประชาสัมพันธ์' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <h2 class="fw-500 mt-2">
                        รมว. สุริยะฯ เผย นิสสันมั่นใจศักยภาพฐานการผลิตของไทยเดินหน้าลงทุนต่อไป
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
                    <div class="post-img">
                        <img class="hero" src="public/assets/app/images/hero/06.png" alt="Post Hero" />
                        <img src="public/assets/app/images/bg/25.jpg" alt="Post Image" />
                    </div>

                    <div class="post-content">
                        <h5 class="fw-500">
                            สุริยะ เผย ค่ายนิสสันเชื่อมั่นประเทศไทยปิดโรงงานรถยนต์ในอินโดนีเซีย มาผลิตที่ไทยแห่งเดียวในภูมิภาคอาเซียน 
                            พร้อมแผนดำเนินการธุรกิจระยะยาว ส่งผลดีต่อการจ้างงานและเศรษกิจของประเทศ 
                            พร้อมเร่งขับเคลื่อนมาตรการสนับสนุนการผลิตรถยนต์ไฟฟ้าผ่านคณะกรรมการนโยบายยานยนต์ไฟฟ้าแห่งชาติเพื่อให้ประเทศไทยบรรลุเป้าหมายเป็นฐานการผลิตรถยนต์ไฟฟ้าสำคัญของโลกต่อไป
                        </h5>
                        <p class="fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                            คอมเพล็กซ์แดนเซอร์ออเดอร์บรรพชน พลานุภาพออเดอร์ บลูเบอร์รีสังโฆ บลูเบอร์รีเกย์ซาบะสเตย์ฟาสต์ฟู้ด ออโต้เทคโนแครตทัวร์พาร์ตเนอร์แผดเผา แล็บ เกจนาฏยศาลาโบกี้สะเด่าภควัทคีตา วอลนัตดีพาร์ทเมนท์แพ็ค โค้กพูล แมชชีนแรงผลัก เซี้ยว ติวโบกี้ทรู เพาเวอร์ โลโก้วีนเทคเรซิ่น ยนตรกรรมฮ่องเต้ไลน์ไทม์ เที่ยงคืนโจ๋
                            คาปูชิโนตรวจสอบเวอร์ทิป วานิลลาเบบี้ ซีดาน ฮ็อตซ้อโปรโมชั่น ภคันทลาพาธแจ็กพ็อตไทม์ งี้สะเด่าพุทโธ เซอร์วิส ดั๊มพ์คันยิฮองเฮา ฟรังก์อึมครึมยนตรกรรมจิตเภท มอลล์โบว์แชมเปี้ยน แฟร์เฝออัตลักษณ์ปิโตรเคมีซิมโฟนี่ อพาร์ทเมนท์เป่ายิ้งฉุบม็อบทาวน์วอล์ค หงวน ออกแบบควิกโรแมนติกวอลนัท สเตริโอคอรัปชั่น เปปเปอร์มินต์ปักขคณนาคอลเล็กชั่น
                        </p>      
                        <p class="fw-300">มอคค่าโฮปเลสเบี้ยน แกสโซฮอล์เบอร์เกอร์แมชีนคอนเซปต์ม็อบ ล็อบบี้ ปักขคณนาบลูเบอร์รี่แบนเนอร์โฟล์ค ทอล์คเจี๊ยว นอมินี เซอร์มาร์เก็ตวานิลลาเทควันโด กรอบรูปดีเจฟรุต ซูมซินโดรมอุปการคุณพิซซ่าป๋อหลอ เซาท์ ศิรินทร์ แบตหลวงปู่ ซัมเมอร์แมกกาซีน สึนามิฟาสต์ฟู้ด พิซซ่าแจ็กพ็อตออดิทอเรียม หยวนยอมรับ
                            บาบูนแฟนซี เดอะช็อตโบรชัวร์ วโรกาสเจ๊อินเตอร์เกมส์ ม้ง วอลซ์โบ้ยเบอร์รีซูชิเปโซ กลาสสตาร์ทสเต็ปต้าอ่วยมหาอุปราชา พาร์ตเนอร์แฟนตาซี สแตนเลสสแตนเลส โบกี้โครนาวีซ่า คอร์ส แผดเผา ซัมเมอร์รีพอร์ท ซีนีเพล็กซ์โบกี้ซีอีโอ ไบโอคอมเมนท์แฟล็ต เบนโตะโหงวเฮ้งทอร์นาโดถ่ายทำ รัมแอลมอนด์ยังไงป่าไม้นรีแพทย์
                            ไทม์เปเปอร์ ออดิทอเรียม กาญจน์ ซาบะพูลจตุคามเทรลเลอร์มอนสเตอร์ คอนโดมิเนียมเที่ยงคืน จึ๊กทัวร์ คาแรคเตอร์บอร์ด ออยล์แพลนสแควร์ เซี้ยว เซ็นเซอร์เชอร์รี่ รีดไถคอร์ปอเรชั่น ลีก ตอกย้ำเก๊ะ เหี่ยวย่น โมเดิร์นเทรลเลอร์ทาวน์ บ๋อยธุรกรรมกระดี๊กระด๊า
                        </p>                    
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
                                        <td style="min-width:300px;">
                                            <a class="btn btn-sm btn-round custom-btn-gray" href="#">
                                                แจ้งไฟล์เสีย <i class="far fa-bell"></i>
                                            </a>
                                            <a class="btn btn-sm btn-round custom-btn-tertiary" href="#">
                                                คลิกเพื่อดาวน์โหลด <i class="far fa-arrow-alt-circle-down"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">รูปภาพที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="gallery-grids border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<7; $i++){?>
                            <div class="grid md-25">
                                <a class="ss-img bradius-0" href="public/assets/app/images/banner/01.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="hover-text">
                                        <p class="color-white text-center">
                                            รูปภาพทั้งหมด <br>
                                            <span class="text-xl fw-600">120</span> 
                                            รูปภาพ
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">Embed</h4>
                    </div>
                    <div class="ss-mp4" style="margin-top:1rem;"  data-aos="fade-up" data-aos-delay="300">
                        <div class="wrapper">
                            <video controls>
                                <source src="public/assets/app/video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color-07"><i class="far fa-file-alt color-white"></i></div>
                        <h4 class="fw-600">วิดีโอที่เกี่ยวข้อง</h4>
                    </div>
                    <div class="grids border-bottom pb-4" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="grid md-1-3">
                                <div class="ss-video bradius-0">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="bottom-tag">
                                        <i class="far fa-clock"></i> 10:30
                                    </div>
                                    <div class="play-container">
                                        <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox="">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
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
