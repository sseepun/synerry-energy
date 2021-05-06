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
            [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
        ];
        $breadcrumbTitle = 'คำถามที่พบบ่อย';
        $breadcrumbBg = 'public/assets/app/images/bg/secretary-05.jpg';
        include('component/breadcrumb-secretary.php');
    ?>
    <?php include('component/warning-file-modal.php'); ?>
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = ['search', 'category'];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="faq-01 round mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="450">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="faq <?php if($i==0)echo 'active'; ?>">
                        <div class="question">
                            <div class="ftag">Q</div>
                            <h6 class="p lg fw-500">
                                ปิโตรเลียมในประเทศไทย มีมากจริงหรือ ?? 
                            </h6>
                            <div class="arrow"></div>
                        </div>
                        <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                            <div class="wrapper">
                                <div class="ftag">A</div>
                                <div class="content">
                                    <p>
                                        เป็นหน้าที่ที่กระทรวงพลังงานที่จะต้องผลักดันอยู่แล้วเพื่อให้มีเชื้อเพลิงใช้อย่างต่อเนื่องและราคาที่เป็นธรรม 
                                        แต่ขึ้นกับการตัดสินใจของผู้ลงทุนด้วย การลงทุนเชิงพาณิชย์ต้องใช้เงินลงทุนสูงประกอบกับผลผลิตวัตถุดิบยังไม่มากพอคงจะต้องรอเวลาระยะหนึ่งแต่ปัจจุบันก็มีโรงงานขนาดใหญ่เกิดขึ้นแล้วหลายแห่ง 
                                        ขณะเดียวกันเราก็มุ่งเน้นให้ชุมชนช่วยเหลือตัวเองได้ในระดับหนึ่ง
                                    </p>
                                    <?php if(true){?>
                                        <div class="scroll-x-wrapper mt-3">
                                            <table class="table table-lg border-bottom bcolor-sgray">
                                                <tbody>
                                                    <?php
                                                        foreach([
                                                            'pdf', 'word', 'video', 'powerpoint',
                                                            'image', 'excel', 'code'
                                                        ] as $j=>$k){
                                                    ?>
                                                        <tr>
                                                            <td class="va-baseline pr-0">
                                                                <div class="ticon bg-0<?= $j%5+2 ?>">
                                                                    <em class="far fa-file-<?= $k ?>"></em>
                                                                </div>
                                                            </td>
                                                            <td style="min-width:380px;">
                                                                <p class="title-wrap md fw-600">
                                                                    ประกาศสำนักงานปลัดกระทรวงพลังงานเรื่อง ประกาศผู้ชนะการเสนอราคา 
                                                                    ซื้อวัสดุสำนักงาน จำนวน 3 รายการ
                                                                </p>
                                                                <p class="sm fw-200 color-gray ws-nowrap mt-1">
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
                                    <?php }else{?>
                                        <div class="scroll-x-wrapper mt-3">
                                            <table class="table">
                                                <tbody>
                                                    <?php for($j=0; $j<2; $j++){?>
                                                        <tr>
                                                            <td class="va-baseline pr-0">
                                                                <h6 class="color-02">
                                                                    <em class="far fa-file-pdf"></em>
                                                                </h6>
                                                            </td>
                                                            <td style="min-width:380px;">
                                                                <p class="md fw-600">
                                                                    นโยบายควบคุมราคาก๊าซปิโตรเลียมเหลว (LPG)
                                                                </p>
                                                                <p class="sm fw-200 color-gray mt-1">
                                                                    ขนาดไฟล์
                                                                    <span class="fw-500 color-black">1.31 MB</span>
                                                                    <span class="sep"></span>
                                                                    จำนวนดาวน์โหลด
                                                                    <span class="fw-500 color-black">16 ครั้ง</span>
                                                                    <span class="sep"></span>
                                                                    <a class="color-01 h-color-02" data-toggle="modal" data-target="#warning-file" href="#">
                                                                        <em class="fas fa-exclamation-circle text-xs mr-05"></em>
                                                                        แจ้งไฟล์เสีย
                                                                    </a>
                                                                </p>
                                                            </td>
                                                            <td style="min-width:130px;">
                                                                <div class="d-flex ai-center jc-end">
                                                                    <a class="btn btn-action btn-color-03 btn-round btn-sm" href="#">
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
                    </div>
                <?php }?>
            </div>
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>

    <section class="section-pattern-01" style="background-image:url('public/assets/app/images/bg/pattern-01.png');">
        <div class="container">
            <div class="section-padding border-top-2 bcolor-sgray">
                <div class="ss-box lg">
                    <div data-aos="fade-up" data-aos-delay="0">
                        <h6 class="h4 lg fw-600 color-black text-center">
                            แบบฟอร์มติดต่อเรา
                        </h6>
                        <p class="lg text-center sm-no-br mt-1">
                            หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ <br>
                            ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด 
                        </p>
                    </div>
                    <p class="color-gray text-center mt-2 pt-1" data-aos="fade-up" data-aos-delay="150">
                        กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                        <span class="text-danger">*</span> 
                    </p>
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
                        <form action="/" method="POST">
                            <div class="grids">
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p color-gray">เลือกหน่วยงาน <span class="text-danger">*</span></label>
                                        <div class="select-wrapper">
                                            <select name="department" class="form-control round" required>
                                                <option value="">เลือกหน่วยงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p color-gray">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control round" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p color-gray">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control round" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-50 mt-0">
                                    <div class="form-group">
                                        <label class="p color-gray">อีเมล <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control round" required title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="form-group">
                                        <label class="p color-gray">ข้อความ <span class="text-danger">*</span></label>
                                        <textarea name="message" rows="5" class="form-control round" required title="General Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ai-center jc-space-between fw-wrap mt-1 pb-1">
                                <div class="captcha-container mt-3">
                                    <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                </div>
                                <div class="btns width-auto mt-3">
                                    <button type="submit" class="btn btn-action btn-color-01 btn-round">
                                        ส่งข้อความ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                    </button>
                                    <button type="reset" class="btn btn-action btn-color-02 btn-round">
                                        ล้างข้อมูล <em class="far fa-times-circle ml-1"></em>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-secretary.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
