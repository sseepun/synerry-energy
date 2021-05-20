
<!-- Topnav Secretary -->
<nav class="topnav-secretary <?php if(!empty($topnavClass))echo $topnavClass; ?>">
    <div class="blocks">
        <div class="block ai-unset">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo-white.png" alt="Website Logo" />
                <div class="text-wrapper">
                    <h6>สำนักงานปลัดกระทรวงพลังงาน</h6>
                    <p>SECRETARY OF ENERGY</p>
                </div>
            </a>
            <div class="menu-container hide-mobile" id="topnav-menu">
                <?php
                    foreach([
                        'หน้าแรก', 'เกี่ยวกับกระทรวง', 'การให้บริการ', 
                        'ข่าว/ประกาศ', 'แผน/ผลการดำเนินงาน', 'ติดต่อเรา'
                    ] as $i=>$d){
                ?>
                    <div class="menu has-children">
                        <a href="#" data-dropdown="<?= $i ?>">
                            <div class="num">0<?= $i+1 ?></div>
                            <?= $d ?>
                        </a>

                        <div class="submenu-dropdown <?php
                            if($i>3)echo 'anchor-right';
                            else if($i>1)echo 'anchor-middle';
                        ?>">
                            <div class="submenu-blocks">
                                <div class="submenu-block">
                                    <h6 class="submenu-title p lg fw-600"><?= $d ?></h6>
                                    <div class="submenu">
                                        <a href="#">ประวัติกระทรวงพลังงาน</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">วิสัยทัศน์ พันธกิจ และตราสัญลักษณ์</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ผู้บริหารระดับสูง</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง (CIO)</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">โครงสร้างส่วนราชการ</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">อำนาจหน้าที่</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">เจตจำนงสุจริตของผู้บริหาร</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">การมีส่วนร่วมของผู้บริหาร</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">กฎหมาย/พรบ.ด้านพลังงาน</a>
                                    </div>
                                </div>
                                <div class="submenu-block">
                                    <h6 class="submenu-title p lg fw-600"><?= $d ?></h6>
                                    <div class="submenu">
                                        <a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">สำนักงานพลังงานจังหวัด</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ข้อมูลพลังงาน</a>
                                    </div>
                                    <div class="submenu has-children">
                                        <a href="#">นโยบายพลังงาน</a>
                                        <div class="submenu-block">
                                            <div class="submenu">
                                                <a href="#">นโยบายด้านพลังงานของรัฐบาล</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="#">คำแถลงนโยบายของคณะรัฐมนตรี</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="#">ยุทธศาสตร์ด้านพลังงาน</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="#">มติคณะ กพช./กบง.</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="#">แผนการบริหารราชการแผ่นดิน</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }?>
            </div>
        </div>
        <div class="block">
            <a class="option accessibility-toggle hide-mobile" href="#">
                <em class="zmdi zmdi-male"></em>
            </a>
            <a class="option global-search-toggle" href="#">
                <em class="zmdi zmdi-search"></em>
            </a>
            <a class="sidenav-toggle show-mobile" href="#">
                <div class="hamburger">
                    <div></div><div></div><div></div>
                </div>
            </a>
        </div>
    </div>
</nav>

<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-toggle">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="options">
            <div class="option">
                <div class="icon">ก</div>
                <div class="dropdown">
                    <div class="icon font-size-btn" data-size="-1">-</div>
                    <div class="icon font-size-btn" data-size="0">ก</div>
                    <div class="icon font-size-btn" data-size="1">+</div>
                </div>
            </div>
            <div class="option">
                <div class="icon">C</div>
                <div class="dropdown">
                    <div class="icon theme-btn" data-theme="0">C</div>
                    <div class="icon theme-btn" data-theme="1">C</div>
                    <div class="icon theme-btn" data-theme="2">C</div>
                </div>
            </div>
            <div class="option">
                <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                <div class="dropdown">
                    <a href="#">
                        <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                    </a>
                </div>
            </div>
            <div class="option">
                <div>
                <p>เข้าสู่ระบบ</p>
                </div>
                <div class="dropdown" style="width:5rem;">
                        <p>ออกจากระบบ</p>
                </div>
            </div>
        </div>
        <div class="scroll-wrapper" data-simplebar>
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

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
            <em class="zmdi zmdi-search"></em>
        </div>
    </div>
</div>

<!-- Accessibility Container -->
<div class="accessibility-container">
    <div class="wrapper">
        <div class="blocks">
            <div class="block">
                <span class="text">ขนาดตัวอักษร</span>
                <a class="btn font-size-btn btn-circle" href="#" data-size="-1">-</a>
                <a class="btn font-size-btn btn-circle shadow" href="#" data-size="0">ก</a>
                <a class="btn font-size-btn btn-circle" href="#" data-size="1">+</a>
            </div>
            <div class="block">
                <span class="text">ความตัดกันของสี</span>
                <a class="btn theme-btn btn-circle shadow" href="#" data-theme="0">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="1">C</a>
                <a class="btn theme-btn btn-circle" href="#" data-theme="2">C</a>
            </div>
            <div class="block">
                <div class="flag-wrapper shadow">
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
                <div class="flag-wrapper shadow" style="width:7rem;">
                    <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/user.png');"></div>
                    <div class="text">เข้าสู่ระบบ</div>
                    <em class="fas fa-chevron-down"></em>
                </div>
                <div class="dropdown">
                    <div class="flag-wrapper" style="width:7rem;">
                        <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/user.png');"></div>
                        <div class="text">ออกจากระบบ</div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
