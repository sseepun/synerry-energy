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
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        $breadcrumbTitle = 'แจ้งเรื่องร้องเรียน';
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
                                    <a class="tab active" href="#">แจ้งเรื่องร้องเรียน</a>
                                    <a class="tab" href="#">ติดต่อหน่วยงาน</a>
                                    <a class="tab" href="#">คำถามที่พบบ่อย (FAQ)</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg-75 md-70 sm-100">

                            <div class="grids no-gap border bcolor-sgray">
                                <div class="grid lg-10 md-20 sm-100 mt-0 bg-mgray">
                                    <p class="fw-500 text-center color-white bg-02 px-1 py-2">
                                        หมายเลข
                                    </p>
                                    <p class="h6 fw-600 text-center color-black px-1 py-2">
                                        32
                                    </p>
                                </div>
                                <div class="grid lg-90 md-80 sm-100 mt-0">
                                    <div class="grids no-gap">
                                        <div class="grid xl-80 lg-75 sm-100 mt-0">
                                            <div class="px-3 py-3">
                                                <p class="sm fw-300">
                                                    <span class="fw-600 mr-1">แจ้งโดย</span> 
                                                    สมโภช แก้วคุ้ม
                                                </p>
                                                <p class="fw-600 mt-3">
                                                    ไบโอดีเซลจากน้ำมันที่ใช้แล้ว
                                                </p>
                                                <p class="sm fw-300">
                                                    ต้องการทราบหน่วยของราคาขายส่งของก๊าซ NGV ในตลาดโลก 
                                                    หากเป็นน้ำมันดิบ ราคาขายส่ง จะเป็นดอลลาร์ต่อบาร์เรล
                                                </p>
                                                <div class="border-top bcolor-sgray mt-3 pt-3 pb-2">
                                                    <h6 class="p fw-600">ไฟล์แนบ</h6>
                                                    <div class="gallery-grids">
                                                        <?php for($j=0; $j<2; $j++){?>
                                                            <div class="grid sm-100 mt-1">
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
                                        <div class="grid xl-20 lg-25 sm-100 mt-0 border-left bcolor-sgray">
                                            <div class="text-center px-2 py-3 border-bottom bcolor-sgray">
                                                <a class="btn btn-action btn-color-01 btn-round btn-xs px-2">
                                                    ปิดเรื่องร้องเรียน <em class="far far fa-arrow-alt-circle-right text-xl ml-1"></em>
                                                </a>
                                            </div>
                                            <div class="px-2 py-3">
                                                <p class="xs fw-600">
                                                    <em class="far fa-eye color-01 mr-1"></em> 98
                                                </p>
                                                <p class="xs fw-600 mt-1">
                                                    <em class="far fa-clock color-01 mr-1"></em>
                                                    22 มกราคม 2020
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="chat-container minisite mt-4">
                                <div class="chat-content" data-simplebar>
                                    <?php for($i=0; $i<2; $i++){?>
                                        <div class="chat-date">วันที่ 11/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ใน e-PP เวอร์ชั่นใหม่ ทางกนอ: ได้ยกเลิกเรื่องการมอบอำนาจ 
                                                    เพื่อขอสิทธิ์ใช้งานเพิ่มเติมทั้งหมด คงไว้แต่ User หลักของผู้ประกอบการ 
                                                    ซึ่งในระบบใหม่จะเรียกว่า Master User ซึ่งหากผู้ประกอบการรายใด 
                                                    ต้องการสร้าง User เพิ่มในระบบ สามารถบริหารจัดการ User/Password 
                                                    และสิทธิ์การเข้าใช้งานโปรแกรมได้ด้วยตัวเองโดยไม่จำกัด User ใช้งาน
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    อยากให้ กนอ. ช่วยสนับสนุนศูนย์ฝึกอาชัพ อบรมเทคนิคเฉพาะทาง 
                                                    เป็นคอร์สสัมนา เกี่ยวกับสินค้าที่จะทำธุรกิจครับ เพราะว่าโรงงานในนิคมของ 
                                                    กนอ. นั้นมีแต่บริษัทชั้นนำของประเทศ อยากให้ช่วยส่งเสริมแนะนำ SME
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-02.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ข้อมูลผู้ติดต่อ ยังต้องกรอกใหม่ทุกคำขอเหมือนเดิมได้หรือไม่
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat-date">วันที่ 12/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/misc/profile-01.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p sm fw-300">
                                                    ทางเราได้รับเรื่องร้องเรียน และอยู่ระหว่างการดำนเนินการแล้วค่ะ
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <form action="/" method="POST">
                                <div class="message-wrapper mt-4">
                                    <input type="text" class="form-control md no-bradius" placeholder="พิมพ์ข้อความ..." required title="General Text Input" />
                                    <button class="btn btn-action btn-color-01">
                                        <em class="fas fa-paper-plane"></em>
                                    </button>
                                </div>
                            </form>
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
