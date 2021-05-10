
<!-- Topnav Minisite -->
<nav class="topnav-minisite">
    <div class="container">
        <div class="blocks">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo-text-square.png" alt="Website Logo" />
                <div class="text-container">
                    <h6>สำนักงานพลังงาน</h6>
                    <p>สุราษฎร์ธานี</p>
                </div>
            </a>
            <div class="right-container">
                <div class="option-container">
                    <div class="blocks">
                        <div class="block">
                            <span class="text">ขนาดตัวอักษร</span>
                            <a class="btn font-size-btn btn-circle" href="#" data-size="-1">-</a>
                            <a class="btn font-size-btn btn-circle" href="#" data-size="0">ก</a>
                            <a class="btn font-size-btn btn-circle" href="#" data-size="1">+</a>
                        </div>
                        <div class="block">
                            <span class="text">ความตัดกันของสี</span>
                            <a class="btn theme-btn btn-circle" href="#" data-theme="0">C</a>
                            <a class="btn theme-btn btn-circle" href="#" data-theme="1">C</a>
                            <a class="btn theme-btn btn-circle" href="#" data-theme="2">C</a>
                        </div>
                        <div class="block">
                            <span class="text">เปลี่ยนภาษา</span>
                            <a class="btn flag-btn btn-circle active" href="#">
                                <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
                            </a>
                            <a class="btn flag-btn btn-circle" href="#">
                                <div class="flag-icon" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
                            </a>
                        </div>
                        <div class="block">
                             <a class="btn flag-btn  active" href="#">
                                <span class="text">เข้าสู่ระบบ</span>
                                <i class="fas fa-user" style="color:#FE4D01"></i>
                             </a> 
                        </div>
                                             
                    </div>
                </div>
                <div class="bottom-container">
                    <div class="menu-container hide-mobile" id="topnav-menu">
                        <?php
                            foreach([
                                'เกี่ยวกับหน่วยงาน', 'นโยบายและข้อมูลพลังงาน', 'ข้อมูลพลังงาน', 
                                'ข่าวประกาศ', 'ข่าวประกาศ', 'ข้อมูลรายงาน', 'ติดต่อ'
                            ] as $i=>$d){
                        ?>
                            <div class="menu has-children">
                                <a href="#" data-dropdown="<?= $i ?>">
                                    <?= $d ?>
                                </a>

                                <div class="submenu-dropdown <?php
                                    if($i>4)echo 'anchor-right';
                                    else if($i>2)echo 'anchor-middle';
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
                    <div class="icon-container">
                        <a class="option global-search-toggle" href="#">
                            <em class="zmdi zmdi-search"></em>
                        </a>
                        <a class="option sidenav-toggle show-mobile" href="#">
                            <div class="hamburger">
                                <div></div><div></div><div></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

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
                <div class="block">
                     <a class="btn flag-btn  active" href="#">
                        <span class="text" style="font-size:0.8rem;">เข้าสู่ระบบ</span>
                     </a> 
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
        <div class="container">
            <div class="btn-container global-search-toggle">
                <em class="zmdi zmdi-search"></em>
            </div>
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
        </div>
    </div>
</div>
