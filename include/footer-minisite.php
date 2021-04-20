
<!-- Back to Top -->
<a class="back-to-top active" href="#">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- Footer Minisite -->
<?php if(!isset($footerNoPattern)){?>
    <div class="footer-minisite-pattern">
        <img src="public/assets/app/images/bg/footer-minisite.png" alt="Footer Pattern" />
    </div>
<?php }?>
<nav class="footer-minisite color-black">
    <div class="top-container">
        <div class="container">
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0; $i<7; $i++){?>
                        <div class="slide">
                            <a class="wrapper" href="#">
                                <div class="img-wrapper">
                                    <img src="public/assets/app/images/client/0<?= $i%4+1 ?>.png" alt="Client Logo" />
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>
            <div class="blocks">
                <div class="block left-block">
                    <div class="block-header">
                        <h6 class="sm fw-600">ติดต่อกรมพลังงาน</h6>
                    </div>
                    <div class="blocks">
                        <div class="block">
                            <h6 class="sm fw-500 color-01 mt-2">กระทรวงพลังงาน</h6>
                            <div class="info">
                                <div class="icon">
                                    <em class="fas fa-map-marker-alt"></em>
                                </div>
                                <div class="text-wrapper">
                                    <p>
                                        อาคาร บี ศูนย์เอนเนอร์ยี่ คอมเพล็กซ์ 555/2 ถนนวิภาวดีรังสิต <br>
                                        แขวงจตุจักร เขตจตุจักร กรุงเทพฯ 10900
                                    </p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="icon">
                                    <em class="fas fa-envelope"></em>
                                </div>
                                <div class="text-wrapper">
                                    <p>
                                        อีเมล: 
                                        <a class="color-black h-color-02" href="#">
                                            servicelink@energy.go.th
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <h6 class="sm fw-500 color-01 mt-2">สำนักงานปลัดกระทรวงพลังงาน</h6>
                            <div class="info">
                                <div class="icon">
                                    <em class="fas fa-mobile-alt"></em>
                                </div>
                                <div class="text-wrapper">
                                    <p>
                                        โทรศัพท์:
                                        <a class="color-black h-color-02" href="#">
                                            02-140-6000
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="icon">
                                    <em class="fas fa-fax"></em>
                                </div>
                                <div class="text-wrapper">
                                    <p>
                                        โทรศัพท์:
                                        <a class="color-black h-color-02" href="#">
                                            02-140-6228
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block right-block">
                    <div class="block">
                        <div class="block-header">
                            <p class="fw-500">
                                <em class="fas fa-sitemap color-01 mr-1"></em>
                                แผนผังเว็บไซต์
                            </p>
                        </div>                    
                        <div class="text-wrapper">
                            <a class="btn btn-action btn-color-01 btn-round btn-xs mt-3" href="#">
                            
                            ลงทะเบียนรับข่าวสาร</a>
                        </div>
                        <div class="block-footer mt-5">
                            <p class="mr-1">ติดตามผ่าน</p>
                            <a class="btn btn-social" href="#">
                                <em class="fab fa-facebook-f"></em>
                            </a>
                            <a class="btn btn-social" href="#">
                                <em class="fab fa-line"></em>
                            </a>
                            <a class="btn btn-social" href="#">
                                <em class="fab fa-youtube"></em>
                            </a>
                            <a class="btn btn-social" href="#">
                                <em class="fab fa-instagram"></em>
                            </a>
                            <a class="btn btn-social" href="#">
                                <em class="fab fa-twitter"></em>
                            </a>
                        </div>                                            
                    </div>



                </div>
            </div>
        </div>
    </div>
    <div class="bottom-container">
        <div class="container">
            <div class="blocks">
                <div class="block">
                    <div class="quicklinks">
                        <a class="p xs" href="#">นโยบายเว็บไซต์</a>
                        <span class="sep">|</span>
                        <a class="p xs" href="#">การปฏิเสธความรับผิด</a>
                        <span class="sep">|</span>
                        <a class="p xs" href="#">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</a>
                    </div>
                    <p class="fw-500 mt-2">
                        สงวนลิขสิทธิ์ 2564 กระทรวงพลังงาน
                    </p>
                    <p class="xs">
                        เว็บไซต์นี้รองรับ Internet Explorer เวอร์ชัน 8 ขึ้นไปเท่านั้น
                    </p>
                </div>
                <div class="block d-flex ai-center">
                    <p class="sm fw-500 mr-1">จำนวนผู้เข้าชม</p>
                    <div class="visitor-count">
                        <div>3</div>
                        <div>8</div>
                        <div>4</div>
                        <div>6</div>
                        <div>7</div>
                        <div>1</div>
                        <div>2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
