<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <!-- Page 0 -->
    <div class="ss-page active" data-page="0">
        <section class="banner-02">
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<4; $i++){?>
                        <div class="slide" style="background-image:url('public/assets/app/images/banner/04.jpg');">
                            <div class="container">
                                <img class="img-text animate" src="public/assets/app/images/misc/text-02.png" alt="Banner Image Text" style="--delay:.75s;" />
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="bullet">
                    <div class="arrows">
                        <div class="arrow arrow-prev">
                            <img src="public/assets/app/images/icon/arrow-left.png" alt="Arrow Icon" />
                        </div>
                        <div class="arrow arrow-next">
                            <img src="public/assets/app/images/icon/arrow-right.png" alt="Arrow Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="intro-03 pos-main">
            <div class="wrapper">
                <div class="intro-cards">
                    <div class="intro-card clip-path-01 bg-02" data-aos="fade-up" data-aos-delay="0">
                        <div class="wrapper color-black">
                            <img class="img-pattern" src="public/assets/app/images/icon/give.png" alt="Image Pattern" />
                            <h6 class="p sm fw-600">ราคาหุ้น</h6>
                            <p class="xs fw-600 margin-01">ราคาล่าสุด</p>
                            <p class="h3 fw-600 lh-2xs">39.25</p>
                        </div>
                    </div>
                    <div class="intro-card clip-path-01 bg-01" data-aos="fade-up" data-aos-delay="150">
                        <div class="wrapper color-white">
                            <img class="img-pattern" src="public/assets/app/images/icon/fire.png" alt="Image Pattern" />
                            <h6 class="p sm fw-500">ราคาเชื้อเพลิง</h6>
                            <p class="xs fw-600 margin-01">PTTNGV</p>
                            <p class="h3 fw-600 lh-2xs">15.31</p>
                        </div>
                    </div>
                    <a class="intro-card" href="#" data-aos="fade-up" data-aos-delay="300">
                        <div class="wrapper color-white">
                            <div class="img-bg clip-path-01" style="background:#413a3e;"></div>
                            <img class="img-content" src="public/assets/app/images/misc/rep-02.png" alt="Image Content" />
                            <div class="position-relative text-center">
                                <p class="fw-400 margin-03 lh-sm">
                                    <span class="text-xl fw-300">อัพเดทข้อมูลทันใจ</span> 
                                    <br> สมัครรับข่าวสารจากเรา
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="intro-card" href="#" data-aos="fade-up" data-aos-delay="450">
                        <div class="wrapper color-white">
                            <div class="img-bg clip-path-01" style="background-image:url('public/assets/app/images/misc/card-01.jpg');"></div>
                            <img class="img-content" src="public/assets/app/images/misc/rep-03.png" alt="Image Content" />
                            <div class="position-relative text-center">
                                <p class="fw-400 margin-02 lh-sm">
                                    ขณะนี้เจ้าหน้าที่ <span class="fw-600 color-01">Online</span> 
                                    เชิญสอบถามข้อมูลได้เลยค่ะ
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="sep"></div>
                    <div class="intro-card lg bcolor-white bg-white" data-aos="fade-up" data-aos-delay="300">
                        <div class="wrapper">
                            <h6 class="p fw-600">พลังงานอัพเดท</h6>
                            <p class="xs fw-500 lh-xs op-40">02.04.2563</p>
                            <p class="xs fw-400 mt-2">
                                กระทรวงพลังงาน 
                                <span class="color-01">เชิญชวนให้ประชาชนร่วมกันดูแลตัวเอง</span>
                                ด้วยการหยุดอยู่บ้าน สร้างร่างกายแข็งแรง
                            </p>
                            <div class="slide-container mt-2">
                                <div class="slides">
                                    <?php for($i=0; $i<3; $i++){?>
                                        <div class="slide">
                                            <div class="ss-img horizontal-02 no-hover">
                                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                <div class="top-desc p xs fw-500 color-white bg-01">
                                                    สำนักงานปลัดกระทรวงพลังงาน
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="arrows"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 1 -->
    <div class="ss-page" data-page="1">
        <section class="intro-04 section-padding" style="background-image:url('public/assets/app/images/bg/home-01.jpg');">
            <div class="container">
                <?php $categories = ['ประชาสัมพันธ์', 'ข่าวเด่นประเด็นดัง', 'ข่าวสารรัฐมนตรี', 'ข่าวสารผู้บริหาร']; ?>
                <div class="tab-container">
                    <div class="blocks" data-aos="fade-up" data-aos-delay="0">
                        <div class="block">
                            <h6 class="h3 fw-600 color-black">
                                อัพเดทข่าวพลังงาน
                            </h6>
                        </div>
                        <div class="block">
                            <div class="tabs tabs-01">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="block">
                            <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                            </a>
                        </div>
                    </div>
                    <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
                        <?php foreach($categories as $j=>$k){?>
                            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                <div class="grids">
                                    <?php for($i=0; $i<4; $i++){?>
                                        <div class="grid xl-25 lg-1-3 sm-50">
                                            <div class="ss-card ss-card-02">
                                                <div class="text-container">
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                        สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <div class="ss-stat">
                                                        <div class="stat">
                                                            1 เมษายน 2564
                                                        </div>
                                                        <div class="stat">
                                                            <em class="far fa-eye mr-1"></em> 178
                                                        </div>
                                                    </div>
                                                    <p class="xs desc">
                                                        กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                        (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                        HR Forum 2020, Big Data
                                                    </p>
                                                    <a class="arrow" href="#">
                                                        <em class="far fa-arrow-alt-circle-right"></em>
                                                    </a>
                                                </div>
                                                <a class="ss-img square" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%5+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/plus.png" alt="Hover Icon" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 2 -->
    <div class="ss-page" data-page="2">
        <section class="about-04 section-padding">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/home-02.jpg');"></div>
            <div class="container position-relative">
                <h6 class="h3 fw-600 color-black" data-aos="fade-up" data-aos-delay="0">
                    สถิติพลังงาน
                </h6>
                <div class="gallery-grids" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid lg-25 md-1-3 sm-100">

                        <div class="about-box clip-path-01 bg-white height-full">
                            <h6 class="p lg fw-600 lh-xs color-black">
                                ราคาน้ำมันวันนี้
                            </h6>
                            <p class="xs fw-500 color-01">
                                26 พฤศจิกายน 2020
                            </p>
                            <table class="table table-02 table-sm mt-2">
                                <tbody>
                                    <?php for($i=1; $i<10; $i++){?>
                                        <tr>
                                            <td>
                                                <img src="public/assets/app/images/icon/gas-0<?= $i ?>.jpg" alt="Gas Icon" />
                                            </td>
                                            <td class="text-right">
                                                <p class="sm fw-200 color-gray">
                                                    26.76
                                                </p>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <div class="d-flex ai-center jc-space-between color-gray fw-wrap mt-3">
                                <p class="xs fw-500 mr-1">
                                    ( หน่วย : บาท/ลิตร )
                                </p>
                                <a class="btn btn-action btn-color-01 btn-round btn-xs my-1" href="#">
                                    ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid lg-75 md-2-3 sm-100 mt-0">
                        <div class="gallery-grids">
                            <div class="grid sm-100">

                                <div class="about-box clip-path-01 bg-01">
                                    <div class="d-flex ai-center jc-space-between color-white fw-wrap">
                                        <h6 class="p lg fw-600 lh-xs ws-nowrap mr-3">
                                            โครงสร้างราคาน้ำมัน
                                        </h6>
                                        <div class="my-1">
                                            <span class="p xs fw-500 mr-1">
                                                26 พฤศจิกายน 2020
                                            </span>
                                            <a class="btn btn-action btn-color-black btn-round btn-xs" href="#">
                                                ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="scroll-x-wrapper mt-2 pb-2" data-simplebar>
                                        <table class="table table-04 table-sm color-white">
                                            <thead>
                                                <tr>
                                                    <th class="p xs fw-500 color-09 ws-nowrap">UNIT</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">EX-REFIN.</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">TAX</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">M. TAX</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">OIL FUND</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">CONSV. FUND</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">WHOLESALE</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">VAT</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">WS&VAT</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">MARKETING</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">VAT</th>
                                                    <th class="p xs fw-500 text-center ws-nowrap">RETAIL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i=0; $i<9; $i++){?>
                                                    <tr>
                                                        <td class="p xs fw-500 color-09 ws-nowrap">GASOHOL95 E10</td>
                                                        <td class="p xs fw-400 text-center">10.9537</td>
                                                        <td class="p xs fw-400 text-center">5.8500</td>
                                                        <td class="p xs fw-400 text-center">0.5850</td>
                                                        <td class="p xs fw-400 text-center">0.6200</td>
                                                        <td class="p xs fw-400 text-center">0.1000</td>
                                                        <td class="p xs fw-400 text-center">18.1087</td>
                                                        <td class="p xs fw-400 text-center">1.2676</td>
                                                        <td class="p xs fw-400 text-center">19.3763</td>
                                                        <td class="p xs fw-400 text-center">2.1249</td>
                                                        <td class="p xs fw-400 text-center">0.1487</td>
                                                        <td class="p xs fw-400 text-center">21.65</td>
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="grid xl-2-3 lg-60 md-100 sm-100">

                                <div class="about-box clip-path-01 bg-white">
                                    <div class="d-flex ai-center jc-space-between color-black fw-wrap">
                                        <h6 class="p lg fw-600 lh-xs ws-nowrap mr-3">
                                            การใช้ไฟฟ้า ณ ปัจจุบัน
                                        </h6>
                                        <div class="my-1">
                                            <span class="p xs fw-500 color-01 mr-1">
                                                26 พฤศจิกายน 2020
                                            </span>
                                            <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                                ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                            </a>
                                        </div>
                                        <div class="chart-container no-label width-full adaptive-01">
                                            <div class="chart bradius-round"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="grid xl-1-3 lg-40 md-100 sm-100">

                                <div class="about-box clip-path-01 bg-02 height-full">
                                    <h6 class="p lg fw-600 lh-xs color-black">
                                        ฐานะกองทุนน้ำมัน
                                    </h6>
                                    <p class="xs fw-500 color-black">
                                        สิ้นสุด ณ วันที่ 26 พฤศจิกายน 2020
                                    </p>
                                    <table class="table table-03 table-sm color-black mt-2">
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td class="p xs fw-600 text-center pr-0">น้้ามัน</td>
                                                <td class="p xs fw-600 text-center pr-0">LPG</td>
                                                <td class="p xs fw-600 text-center">รวม</td>
                                            </tr>
                                            <tr>
                                                <td class="p xs fw-600 pr-0">สินทรัพย์รวม</td>
                                                <td class="p xs fw-600 text-center pr-0">54,111</td>
                                                <td class="p xs fw-600 text-center pr-0">243</td>
                                                <td class="p xs fw-600 text-center">57,086</td>
                                            </tr>
                                            <tr>
                                                <td class="p xs fw-600 pr-0">หนี้สินรวม</td>
                                                <td class="p xs fw-600 text-center pr-0">17,082</td>
                                                <td class="p xs fw-600 text-center pr-0">7,211</td>
                                                <td class="p xs fw-600 text-center">24,293</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="p xs fw-600 pr-0">ฐานะกองทุนสุทธิ</th>
                                                <th class="p xs fw-600 text-center pr-0" style="color:#009900;">
                                                    39,761
                                                </th>
                                                <th class="p xs fw-600 text-center pr-0" style="color:#f2290a;">
                                                    -6,968
                                                </th>
                                                <th class="p xs fw-600 text-center">32,793</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="btns text-right mt-3">
                                        <a class="btn btn-action btn-color-black btn-round btn-xs" href="#">
                                            ข้อมูลเพิ่มเติม <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 3 -->
    <div class="ss-page" data-page="3">
        <section class="about-03 section-padding" style="background-image:url('public/assets/app/images/bg/home-03.jpg');">
            <div class="container position-relative">
                <h6 class="h3 fw-600 color-white text-right" data-aos="fade-up" data-aos-delay="0">
                    ข่าวสารพลังงานจังหวัด
                </h6>
                <?php $categories = ['กิจกรรมพลังงานจังหวัด', 'จัดซื้อจัดจ้างพลังงานจังหวัด']; ?>
                <div class="tab-container">
                    <div class="tabs tabs-04 right mt-2 mb-2" data-aos="fade-up" data-aos-delay="150">
                        <?php foreach($categories as $j=>$k){?>
                            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                <?= $k ?>
                            </a>
                        <?php }?>
                    </div>
                    <div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
                        <?php foreach($categories as $j=>$k){?>
                            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                <div class="list-header jc-end fw-wrap">
                                    <div class="block bcolor-white mb-2">
                                        <span class="p sm fw-400 color-white mr-1">แสดงข่าวจาก</span>
                                        <div class="select-wrapper">
                                            <select class="sm round">
                                                <option value="">ภาคกลาง</option>
                                            </select>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="sm round">
                                                <option value="">ทั้งหมด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-full"></div>
                                    <div class="block bcolor-white">
                                        <span class="p sm fw-400 color-white mr-1">เรียงลำดับ</span>
                                        <div class="select-wrapper">
                                            <select class="sm round">
                                                <option value="">มาใหม่</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grids">
                                    <?php for($i=0; $i<4; $i++){?>
                                        <div class="grid xl-25 lg-1-3 sm-50">
                                            <div class="ss-card ss-card-02">
                                                <div class="text-container">
                                                    <div class="card-tag">
                                                        สำนักงานพลังงานจังหวัดแม่ฮ่องสอน
                                                    </div>
                                                    <a class="title p md fw-600" href="#">
                                                        สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                                        สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                                    </a>
                                                    <div class="ss-stat">
                                                        <div class="stat">
                                                            1 เมษายน 2564
                                                        </div>
                                                        <div class="stat">
                                                            <em class="far fa-eye mr-1"></em> 178
                                                        </div>
                                                    </div>
                                                    <p class="xs desc">
                                                        กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม (MDES) ร่วมกับ สมาคมผู้ใช้ดิจิทัลไทย 
                                                        (DUGA) กำหนดจัดงานอบรมสัมมนา eGovernment Forum 2020, Digital 
                                                        HR Forum 2020, Big Data
                                                    </p>
                                                    <a class="arrow" href="#">
                                                        <em class="far fa-arrow-alt-circle-right"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="btns mt-4">
                                    <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                        ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 4 -->
    <div class="ss-page" data-page="4">
        <section class="intro-04 section-padding" style="background-image:url('public/assets/app/images/bg/home-04.jpg');">
            <div class="container">
                <?php $categories = ['จัดซื้อจัดจ้าง กระทรวงพลังงาน', 'สมัครงาน']; ?>
                <div class="tab-container">
                    <div class="blocks" data-aos="fade-up" data-aos-delay="0">
                        <div class="block">
                            <h6 class="h3 fw-600 color-white">
                                ข่าวประกาศ
                            </h6>
                        </div>
                        <div class="block">
                            <div class="tabs tabs-01">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="block">
                            <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                            </a>
                        </div>
                    </div>
                    <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
                        <?php foreach($categories as $j=>$k){?>
                            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                <div class="gallery-grids mt-3">
                                    <?php for($i=0; $i<8; $i++){?>
                                        <div class="grid md-50 sm-100">
                                            <div class="ss-card ss-card-11 white clip-path-01 mt-0">
                                                <div class="ss-date-container">
                                                    <div class="ss-date-sm white clip-path-01">
                                                        <div class="date">22</div>
                                                        <div class="month">ม.ค.</div>
                                                        <div class="year">2564</div>
                                                    </div>
                                                </div>
                                                <div class="text-container">
                                                    <a class="title p sm fw-400" href="#">
                                                        <?= $k ?>
                                                        ประกาศสำนักงานปลัดกระทรวงพลังงาน เรื่องประกาศผู้ชนะการเสนอราคา 
                                                        จ้างซ่อมเครื่องถ่ายเอกสารยี่ห้อ RICOH รุ่น AFICIO MP ๓๓๙๑ 
                                                        โดยวิธีเฉพาะเจาะจง
                                                    </a>
                                                </div>
                                                <div class="info-content">
                                                    <div class="h4 color-01 lh-xs">
                                                        <em class="fas fa-cloud-download-alt"></em>
                                                    </div>
                                                    <p class="color-black">
                                                        ดาวน์โหลด <br>
                                                        (PDF, 629.0 KB)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 5 -->
    <div class="ss-page" data-page="5">
        <section class="intro-04 section-padding" style="background-image:url('public/assets/app/images/bg/home-05.jpg');">
            <div class="container">
                <?php $categories = ['Energy Channel', 'สื่อประชาสัมพันธ์', 'แบบสอบถาม', 'คำถามที่พบบ่อย']; ?>
                <div class="tab-container">
                    <div class="blocks" data-aos="fade-up" data-aos-delay="0">
                        <div class="block">
                            <h6 class="h3 fw-600 color-black">
                                สื่อมัลติมีเดีย
                            </h6>
                        </div>
                        <div class="block">
                            <div class="tabs tabs-01">
                                <?php foreach($categories as $j=>$k){?>
                                    <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                                        <?= $k ?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="block">
                            <a class="btn btn-action btn-color-01 btn-round btn-sm" href="#">
                                ดูทั้งหมด <em class="far fa-arrow-alt-circle-right ml-1"></em>
                            </a>
                        </div>
                    </div>
                    <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
                        <?php foreach($categories as $j=>$k){?>
                            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                                <div class="ss-box md mt-3">
                                    <div class="px-2 py-2 bg-white border bcolor-white">
                                        <a class="ss-img" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                            <div class="hover-container">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                </div>
                                            </div>
                                            <div class="short-desc bg-white">
                                                <p class="sm fw-600 color-black lh-xs">
                                                    วีดีทัศน์ "พลังสายธารแห่งพระบารมี"
                                                </p>
                                                <p class="xs fw-600 color-01 lh-xs">
                                                    16 เมษายน 2020
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery-grids mt-4">
                                    <?php for($i=0; $i<6; $i++){?>
                                        <div class="grid lg-1-3 md-50 sm-100 mt-0">
                                            <div class="ss-card ss-card-12 style-main clip-path-01">
                                                <div class="video-container">
                                                    <a class="ss-img square" href="#">
                                                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
                                                        <div class="hover-container op-100">
                                                            <div class="icon">
                                                                <img src="public/assets/app/images/icon/play.png" alt="Hover Icon" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="text-container">
                                                    <a class="title p xs fw-600" href="#">
                                                        <?= $k ?>
                                                        รายการเดินหน้าประเทศไทย ดีเซล B20 รหัสความสุขเกษตรกรปาล์มน้ำมัน
                                                    </a>
                                                    <p class="date fw-600">
                                                        8 เมษายน 2020
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Page 6 -->
    <div class="ss-page" data-page="6">
        <section class="intro-04 section-padding" style="background-image:url('public/assets/app/images/bg/home-06.jpg');">
            <div class="container">
                <h6 class="h3 fw-600 color-black" data-aos="fade-up" data-aos-delay="0">
                    หน่วยงานที่เกี่ยวข้อง
                </h6>
                <div class="gallery-grids mt-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid lg-25 sm-50 mt-0">
                        <a class="ss-img square clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-01.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                กรมพัฒนาพลังงานทดแทน <br>
                                และอนุรักษ์พลังงาน
                            </div>
                        </a>
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-02.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                สำนักงานพลังงานจังหวัด
                            </div>
                        </a>
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-03.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                ศูนย์ปฏิบัติการต่อต้านการทุจริต
                            </div>
                        </a>
                    </div>
                    <div class="grid lg-25 sm-50 mt-0">
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-04.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                สำนักงานคณะกรรมการกำกับ <br>
                                กิจการพลังงาน
                            </div>
                        </a>
                        <a class="ss-img square clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-05.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                สำนักงานนโยบายและแผนพลังงาน
                            </div>
                        </a>
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-06.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                สำนักงานกองทุนน้ำมันเชื้อเพลิง
                            </div>
                        </a>
                    </div>
                    <div class="grid lg-25 sm-50 mt-0">
                        <a class="ss-img clip-path-01 mt-2" href="#" style="padding-top:calc(100% + .5rem);">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-07.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                กรมเชื้อเพลิงธรรมชาติ
                            </div>
                        </a>
                        <a class="ss-img square clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-08.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                กรมธุรกิจพลังงาน
                            </div>
                        </a>
                    </div>
                    <div class="grid lg-25 sm-50 mt-0">
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-09.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-black">
                                ศูนย์ข้อมูลข่าวสารของหน่วยงานภายใต้กำกับกระทรวงพลังงาน
                            </div>
                        </a>
                        <a class="ss-img horizontal clip-path-01 mt-2" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/misc/grid-10.jpg');"></div>
                            <div class="detail-wrapper text-center p md fw-400 color-white">
                                คู่มือสำหรับประชาชน
                            </div>
                        </a>
                        <a class="contact-card-02 bg-01 clip-path-01 mt-2" href="#">
                            <div class="position-relative">
                                <p class="md fw-400 color-white">
                                    ศูนย์เฝ้าระวังวิกฤติพลังงาน
                                </p>
                            </div>
                        </a>
                        <a class="contact-card-02 bg-02 clip-path-01 mt-2" href="#">
                            <div class="position-relative">
                                <p class="fw-400 color-white">
                                    ศูนย์ปฏิบัติการกระทรวงพลังงาน
                                </p>
                            </div>
                        </a>
                        <a class="contact-card-02 bg-04 clip-path-01 mt-2" href="#">
                            <div class="position-relative">
                                <p class="fw-400 color-white">
                                    ศูนย์ข้อมูลด้านพลังงาน
                                </p>
                            </div>
                        </a>
                        <a class="contact-card-02 bg-10 clip-path-01 mt-2" href="#">
                            <div class="position-relative">
                                <p class="fw-400 color-white">
                                    ศูนย์ความร่วมมือด้านพลังงานระหว่างประเทศ
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="popup-container simple active" data-popup="subscribe">
        <div class="wrapper">
            <div class="popup-box border bcolor-white bg-white px-2 py-2">
                <div class="img-container">
                    <img src="public/assets/app/images/misc/popup-01.jpg" alt="Popup Banner">
                </div>
                <div class="d-flex ai-center jc-center mt-2">
                    <div class="form-check sm mr-4">
                        <input type="checkbox" class="form-check-input" id="show-toggle" value="1" title="General Checkbox Input" />
                        <label for="show-toggle">ไม่ต้องแสดงอีก</label>
                    </div>
                    <a class="btn btn-action btn-color-01 btn-round btn-sm btn-popup-toggle px-5" href="#" data-popup="subscribe">
                        <i class="far fa-times-circle color-white mr-1"></i> ปิด
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <?php $footerNoPattern = true; include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script>
        ssPageProcess();
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'area',
                toolbar: { show: false },
                height: '100%'
            },
            stroke: { curve: 'smooth', width: 1 },
            legend: { show: false },
            dataLabels: { enabled: false },
            series: [
                {
                    name: 'Data 1',
                    data: [0, 5, 2, 5, 7, 10, 20, 12, 25, 35, 20, 0]
                },
                {
                    name: 'Data 2',
                    data: [0, 10, 5, 15, 10, 20, 30, 45, 20, 15, 10, 0]
                },
                {
                    name: 'Data 3',
                    data: [0, 2, 5, 5, 3, 15, 35, 10, 5, 10, 15, 0]
                },
            ],
            colors: ['rgba(254,77,1,.7)', 'rgba(255,183,57,.7)', 'rgba(160,232,208,.7)'],
            fill: { type: 'solid' },
            xaxis: {
                categories: [
                    'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN',
                    'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'
                ]
            },
        }
        $('.chart').each(function(){
            var apexChart = new ApexCharts($(this)[0], options);
            apexChart.render();
        });
    </script>
</body>
</html>
