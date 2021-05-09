
<!-- Topnav -->
<nav class="topnav">
    <div class="blocks">
        <div class="block">
            <a class="logo ss-page-btn" href="01-home.php#0" data-page="0">
                <img src="public/assets/app/images/logo-white.png" alt="Website Logo" />
            </a>
            <div class="menu-container" id="topnav-menu">
                <?php
                    foreach([
                        'อัพเดทข่าวพลังงาน', 'สถิติพลังงาน', 'ข่าวสารพลังงานจังหวัด', 
                        'ข่าวประกาศ', 'สื่อมัลติมีเดีย', 'หน่วยงานที่เกี่ยวข้อง'
                    ] as $i=>$d){
                ?>
                    <div class="menu">
                        <a class="ss-page-btn" href="01-home.php#<?= $i+1 ?>" data-page="<?= $i+1 ?>">
                            <div class="num">0<?= $i+1 ?></div>
                            <?= $d ?>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="block">
            <a class="option topnav-dropdown-toggle" href="#">
                <div class="hamburger">
                    <div></div><div></div><div></div>
                </div>
            </a>
            <a class="option global-search-toggle" href="#">
                <em class="zmdi zmdi-search"></em>
            </a>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Topnav Option -->
<div class="topnav-option" style="background-image:url('public/assets/app/images/bg/topnav-option.jpg');">
    <div class="container">
        <div class="blocks">
            <div class="block">
                <span class="text">ขนาดตัวอักษร</span>
                <a class="btn font-size-btn btn-circle" href="#" data-size="-1">-</a>
                <a class="btn font-size-btn btn-circle circular shadow" href="#" data-size="0">ก</a>
                <a class="btn font-size-btn btn-circle" href="#" data-size="1">+</a>
            </div>
            <div class="block">
                <span class="text">ความตัดกันของสี</span>
                <a class="btn theme-btn btn-circle circular shadow" href="#" data-theme="0">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="1">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="2">C</a>
            </div>
            <div class="block">
                <div class="flag-wrapper circular shadow">
                    <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                    <div class="text">ไทย</div>
                    <em class="fas fa-chevron-down"></em>
                </div>
                <div class="dropdown">
                    <div class="flag-wrapper">
                        <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                        <div class="text">อังกฤษ</div>
                    </div>
                </div>
            </div>
            <div class="block">
                <a class="btn btn-circle circular" href="#">
                    <em class="fab fa-facebook-f"></em>
                </a>
                <a class="btn btn-circle circular" href="#">
                    <em class="fab fa-youtube"></em>
                </a>
                <a class="btn btn-circle circular" href="#">
                    <em class="fas fa-sitemap"></em>
                </a>
            </div>
            <div class="block">
                <div class="flag-wrapper circular shadow" style="width:7rem;">
                    <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/user.png');"></div>
                    <div class="text">เข้าสู่ระบบ</div>
                    <em class="fas fa-chevron-down"></em>
                </div>
                <div class="dropdown">
                    <div class="flag-wrapper"style="width:7rem;">
                        <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/user.png');"></div>
                        <div class="text">ออกจากระบบ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Topnav Dropdown -->
<div class="topnav-dropdown">
    <div class="wrapper">
        <div class="close-filter topnav-dropdown-toggle"></div>
        <div class="content-container">
            <div class="scroll-y-wrapper" data-simplebar>

                <!-- Topnav Dropdown Menu -->
                <div class="sitemap-01">
                    <div class="grids">
                        <div class="grid lg-1-3 md-50 sm-100 mt-0">

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-01.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        หน้าหลัก
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">อัพเดทข่าวพลังงานสถิติพลังงาน</a></li>
                                    <li><a href="#">ข่าวสารพลังงานจังหวัด</a></li>
                                    <li><a href="#">ข่าวประกาศ</a></li>
                                    <li><a href="#">สื่อมัลติมีเดีย</a></li>
                                    <li><a href="#">หน่วยงานที่เกี่ยวข้อง</a></li>
                                </ul>
                            </div>

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-02.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        เกี่ยวกับกระทรวง
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">ประวัติกระทรวงพลังงาน</a></li>
                                    <li><a href="#">วิสัยทัศน์ พันธกิจ และตราสัญลักษณ์</a></li>
                                    <li><a href="#">ผู้บริหารระดับสูง</a></li>
                                    <li><a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง (CIO)</a></li>
                                    <li><a href="#">โครงสร้างส่วนราชการ</a></li>
                                    <li><a href="#">อำนาจหน้าที่</a></li>
                                    <li><a href="#">เจตจำนงสุจริตของผู้บริหาร</a></li>
                                    <li><a href="#">การมีส่วนร่วมของผู้บริหาร</a></li>
                                    <li><a href="#">แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a></li>
                                    <li><a href="#">กฎหมาย/พรบ.ด้านพลังงาน</a></li>
                                    <li><a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a></li>
                                    <li><a href="#">สำนักงานพลังงานจังหวัด</a></li>
                                    <li><a href="#">ข้อมูลพลังงาน</a></li>
                                    <li><a href="#">นโยบายพลังงาน</a>
                                        <ul>
                                            <li><a href="#">นโยบายด้านพลังงานของรัฐบาล</a></li>
                                            <li><a href="#">คำแถลงนโยบายของคณะรัฐมนตรี</a></li>
                                            <li><a href="#">ยุทธศาสตร์ด้านพลังงาน</a></li>
                                            <li><a href="#">มติคณะ กพช./กบง.</a></li>
                                            <li><a href="#">แผนการบริหารราชการแผ่นดิน</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="grid lg-1-3 md-50 sm-100 mt-0">

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-03.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        แผน/ผลการดำเนินงาน
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">แผนการดำเนินงาน</a></li>
                                    <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a>
                                        <ul>
                                            <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a></li>
                                            <li><a href="#">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ 6 เดือน</a></li>
                                            <li><a href="#">รายงานผลการใช้จ่ายงบประมาณประจำปี</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">ข้อมูลรายงาน</a></li>
                                    <li><a href="#">รายงานประจำปี</a>
                                        <ul>
                                            <li><a href="#">รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน</a></li>
                                            <li><a href="#">รายงานผลการดำเนินงานของกระทรวง</a></li>
                                            <li><a href="#">รายงานการเงินสำนักงานปลัดกระทรวงพลังงาน</a></li>
                                            <li><a href="#">รายงานต้นทุนต่อหน่วยผลผลิต</a></li>
                                            <li><a href="#">รายงานงบทดลอง</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">การป้องกันการทุจริต</a>
                                        <ul>
                                            <li><a href="#">แผนปฏิบัติการป้องกันการทุจริต</a></li>
                                            <li><a href="#">รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต รอบ 6 เดือน</a></li>
                                            <li><a href="#">รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</a></li>
                                            <li><a href="#">การประเมินความเสี่ยงการทุจริตประจำปี</a></li>
                                            <li><a href="#">การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</a></li>
                                            <li><a href="#">มาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></li>
                                            <li><a href="#">การดำเนินการตามมาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-04.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        ติดต่อเรา
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">ติดต่อเรา</a></li>
                                    <li><a href="#">แผนผังเว็บไซต์</a></li>
                                </ul>
                            </div>
                        
                        </div>
                        <div class="grid lg-1-3 md-50 sm-100 mt-0">

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-05.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        การให้บริการ
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">คู่มือหรือมาตรฐานการปฏิบัติงาน</a></li>
                                    <li><a href="#">คู่มือหรือมาตรฐานการให้บริการ</a></li>
                                    <li><a href="#">ข้อมูลเชิงสถิติการให้บริการ</a></li>
                                    <li><a href="#">รายงานผลการสำรวจความพึงพอใจการให้บริการ</a></li>
                                    <li><a href="#">E-Service</a></li>
                                    <li><a href="#">การมีส่วนร่วมของประชาชน</a></li>
                                    <li><a href="#">Q&A</a></li>
                                    <li><a href="#">การแจ้งเรื่องร้องเรียน</a>
                                        <ul>
                                            <li><a href="#">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></li>
                                            <li><a href="#">ช่องทางแจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></li>
                                            <li><a href="#">ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบประจำปี</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="sitemap">
                                <div class="header">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/sitemap-06.png" alt="Sitemap Icon" />
                                    </div>
                                    <h6 class="p md fw-600 color-black">
                                        ข่าว/ประกาศ
                                    </h6>
                                </div>
                                <ul>
                                    <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
                                    <li><a href="#">กิจกรรมพลังงานจังหวัด</a></li>
                                    <li><a href="#">ข่าวสารรัฐมนตรี</a></li>
                                    <li><a href="#">ข่าวสารผู้บริหาร</a></li>
                                    <li><a href="#">เรื่องเด่นประเด็นดัง</a></li>
                                    <li><a href="#">ข่าวจัดซื้อจัดจ้าง</a>
                                        <ul>
                                            <li><a href="#">แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ</a></li>
                                            <li><a href="#">ประกาศจัดซื้อจัดจ้าง สป.พน.</a></li>
                                            <li><a href="#">ประกาศจัดซื้อจัดจ้างพลังงานจังหวัด</a></li>
                                            <li><a href="#">สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a></li>
                                            <li><a href="#">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">ประกาศรับสมัครงาน</a>
                                        <ul>
                                            <li><a href="#">รับสมัครงาน</a></li>
                                            <li><a href="#">นโยบายการบริหารทรัพยากรบุคคล</a></li>
                                            <li><a href="#">การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a></li>
                                            <li><a href="#">หลักเกณฑ์การบริหารและการพัฒนาทรัพยากรบุคคล</a></li>
                                            <li><a href="#">รายงานผลการบริหารและการพัฒนาทรัพยากรบุคคลประจำปี</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="btn-container topnav-dropdown-toggle">
            <div class="hamburger active">
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
</div>

<!-- Global Search Container -->
<div class="global-search-container">
    <div class="wrapper">
        <div class="close-filter global-search-toggle"></div>
        <div class="content-container">
            <div class="ss-box-lg">
                <form action="/" method="GET">
                    <h6 class="h4 lg fw-600 color-black text-center">
                        กรุณาระบุคำค้นหาที่ท่านต้องการ
                    </h6>
                    <div class="form-group mt-1">
                        <div class="search-wrapper">
                            <input type="text" class="round width-full" name="keywords" placeholder="ค้นหา" required title="General Text Input" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="btn-container global-search-toggle">
            <div class="hamburger active">
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
</div>
