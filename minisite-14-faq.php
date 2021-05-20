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
            [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
        ];
        $breadcrumbTitle = 'คำถามที่พบบ่อย';
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
                                    <a class="tab active" href="#">คำถามที่พบบ่อย</a>
                                    <a class="tab" href="#">ติดต่อหน่วยงาน</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">

                            <h6 class="h5 fw-500 color-01">คำถามที่พบบ่อย</h6>
                            <div class="faq-02 mt-2">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="faq <?php if($i==0)echo 'active'; ?>">
                                        <div class="question">
                                            <div class="ftag text-center">
                                                <p class="sm fw-400 lh-xs">คำถาม</p>
                                                <p class="h4 fw-500 lh-xs"><?= $i ?></p>
                                            </div>
                                            <div class="text-container">
                                                <h6 class="p fw-600">
                                                    น้ำมันแก๊สโซฮอลล์91ใช้แทนเบนซิน91ได้เลยหรือไม่ 
                                                    ทำไมตามสถานีบริการน้ำมันไม่ค่อยมี 
                                                    ที่ขอนแก่นหาเติมได้ที่ไหน
                                                </h6>
                                                <div class="stat">
                                                    <p class="xs fw-500">
                                                        <em class="far fa-eye color-01 mr-1"></em> 98
                                                    </p>
                                                </div>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                                            <div class="wrapper">
                                                <div class="ftag">
                                                    <p class="sm fw-400 lh-xs">คำตอบ</p>
                                                </div>
                                                <div class="content">
                                                    <p>
                                                        <span class="color-01">
                                                            โครงการของรัฐ ที่สนับสนุนการใช้พลังงานทดแทนภาคครัวเรือน ในส่วนของชีวมวล น่าจะเป็น 
                                                            การสนับสนุนส่งเสริมการใช้เตาหุงต้มประสิทธิภาพสูง เตานึ่งขนมจีน
                                                        </span> 
                                                        เตานึ่งก้อนเชื้อเห็ด และ เตาแก๊สชีวมวล เข้าใจว่าศูนย์ทดลองพลังงานภูมิภาคมีเจ้าหน้าที่ฝึกอบรมการปั้นเตา 
                                                        และมีแบบเตา คงต้องทำหนังสือขอมาในส่วนของแสงอาทิตย์ มี ระบบทำน้ำร้อน ตู้อบแห้งผลผลิตการเกษตร 
                                                        สูบน้ำ และไฟฟ้าแสงสว่าง ซึ่งจะต้องอยู่ในพื้นที่ที่ไม่มีไฟฟ้าเข้าถึงเท่านั้น 
                                                        การสนับสนุนใช้พลังงานทดแทนภาคครัวเรือนโดยหน่วยงานภาครัฐ ปัจจุบันมีมาตรการส่งเสริมหลายด้านและหลายเทคโนโลยีด้วยกัน 
                                                        โดยเฉพาะอย่างยิ่งการนำชีวมวลมาใช้ประโยชน์ ผลิตพลังงานภายในครัวเรือนหรือชุมชน 
                                                        ปัจจุบันกรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานได้ส่งเสริมทั่วประเทศ โดยหน่วยงานที่ตั้งอยู่ในภูมิภาค 
                                                        ซึ่งสังกัดสำนักถ่ายทอดและเผยแพร่เทคโนโลยี (สถผ.) เป็นกลไกหลัก..
                                                    </p>
                                                    <p class="fw-600 mt-2">
                                                        สนใจทราบรายละเอียดเพิ่มเติม ลองติดต่อไปที่ 0 2223 0021-9 ต่อ 1268
                                                    </p>
                                                    <div class="border-top bcolor-sgray mt-3 pt-2 pb-2">
                                                        <div class="gallery-grids">
                                                            <?php for($j=0; $j<2; $j++){?>
                                                                <div class="grid lg-50 sm-100 mt-2">
                                                                    <div class="ss-file-01">
                                                                        <div class="icon-container">
                                                                            <div class="img-container">
                                                                                <div class="img-wrapper">
                                                                                    <img src="public/assets/app/images/icon/file-pdf.png" alt="File Icon" />
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
                                                    </div>
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
                            
                            <div class="contact-02">
                                <img class="img-float" src="public/assets/app/images/misc/car.png" alt="Float Image" />
                                <h6 class="h5 fw-500 color-01">แบบฟอร์มติดต่อ</h6>
                                <p class="color-black sm-no-br mt-1">
                                    หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ <br>
                                    ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                                </p>
                                <p class="xs color-black">
                                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                                    <span class="text-danger">*</span> 
                                </p>
                                <div class="mt-4">
                                    <form action="/" method="POST">
                                        <div class="grids">
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">เลือกหน่วยงาน <span class="text-danger">*</span></label>
                                                    <div class="select-wrapper">
                                                        <select name="department" class="form-control no-bradius fgray" required>
                                                            <option value="">เลือกหน่วยงาน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control no-bradius fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone" class="form-control no-bradius fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-50 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">อีเมล <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control no-bradius fgray" required title="General Text Input" />
                                                </div>
                                            </div>
                                            <div class="grid sm-100 mt-0">
                                                <div class="form-group">
                                                    <label class="p fw-400 color-black">ข้อความ <span class="text-danger">*</span></label>
                                                    <div class="border-top-2 bcolor-01">
                                                        <textarea name="message" rows="5" class="form-control no-bradius fgray" required title="General Textarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex ai-center jc-space-between fw-wrap mt-1 pb-1">
                                            <div class="captcha-container mt-3">
                                                <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                            </div>
                                            <div class="btns width-auto mt-3">
                                                <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                                    แสดงความคิดเห็น <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                                </button>
                                                <button type="reset" class="btn btn-action btn-color-02 btn-round">
                                                    ยกเลิก <em class="far fa-times-circle ml-1"></em>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

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
