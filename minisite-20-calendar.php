<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    
    <div class="intro-02 with-tag section-bg lazy-bg" data-src="public/assets/app/images/bg/46.jpg">
        <div class="container">
            <p class="tag color-white" data-aos="fade-up" data-aos-delay="0">
                เหนือสุดในสยาม ชายแดนสามแผ่นดิน ถื่นวัฒนธรรมล้านนา <br>
                ล้ำค่าพระธาตุดอยตุง ผดุงวัฒนธรรม รสล้ำข้าวสาร หอมหวานลิ้นจี่ สตรีโสภา <br>
                ชาเลิศรส สัปปะรดนางแล แหล่งแพร่ปลาบึก
            </p>
        </div>
    </div>

    <section data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <?php
                $breadcrumb = [
                    [ 'url' => '#', 'name' => 'หน้าแรก' ],
                    [ 'url' => '#', 'name' => 'ปฏิทินกิจกรรม' ],
                ];
                $dateTime = [
                    'date' => 'วันจันทร์, 24 สิงหาคม 2563',
                    'time' => '08:27'
                ];
                include_once('component/breadcrumb-02.php');
            ?>
        </div>
    </section>

    <section class="section-padding section-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-center color-white">ไฮไลท์ - ปฏิทินกิจกรรม</h3>
            <div class="grids pt-2 pb-4">
                <?php for($i=0; $i<3; $i++){?>
                    <div class="grid lg-1-3 md-50 sm-100">
                        <a class="post-card post-card-09" href="#">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                <div class="hover-container">
                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                </div>
                                <div class="calendar-tag">
                                    <h6>27</h6>
                                    <p>08/2020</p>
                                </div>
                            </div>
                            <div class="wrapper bg-color-white">
                                <div class="stats mt-2">
                                    <div class="d-flex view">
                                        <div class="icon color-blue text-2xs mr-2">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <span class="color-black fw-500">
                                            thaibfconference.com
                                        </span>
                                    </div>
                                    <div class="d-flex view">
                                        <div class="icon color-blue text-2xs mr-2">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <span class="color-black fw-500">
                                            5-8 กรกฎาคม 2563
                                        </span>
                                    </div>
                                </div>
                                <div class="title-container">
                                    <div class="title h4 my-2">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ 
                                        หลักสูตร "การยกระดับมาตรฐาน...
                                    </div>
                                </div>
                                <div class="post-stats-02">
                                    <div class="block"></div>
                                    <div class="btn-float">อ่านเพิ่ม</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="ss-search-container" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <form action="" method="GET">
                <div class="ss-search">
                    <input type="text" name="keyword" placeholder="ค้นหาปฏิทินกิจกรรม" autocomplete="off" required />
                    <button type="submit">
                        <img src="public/assets/app/images/icon/search-white-02.png" alt="Search Icon" />
                    </button>
                    <div class="suggestion">
                        <div class="scroll-wrapper" data-simplebar>
                            <?php for($i=0; $i<8; $i++){?>
                                <a class="item" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                    <div class="text">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ปร
                                        กิจ หลักสูตร “การยกระดับมาตรฐาน...
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="section-padding bg-color-gray" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <h3 class="text-center color-02 mb-3">ปฏิทินกิจกรรม</h3>
            <?php include_once('component/list-header.php'); ?>

            <div class="grids pt-2 pb-4">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="grid xl-25 lg-1-3 md-50 sm-100">
                        <a class="post-card post-card-09" href="#">
                            <div class="ss-img bradius-0">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/01.jpg"></div>
                                <div class="hover-container">
                                    <img src="public/assets/app/images/icon/search-02.png" alt="Hover Image" />
                                </div>
                                <div class="calendar-tag">
                                    <h6>27</h6>
                                    <p>08/2020</p>
                                </div>
                            </div>
                            <div class="wrapper bg-color-white">
                                <div class="stats mt-2">
                                    <div class="d-flex view">
                                        <div class="icon color-blue text-2xs mr-2">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <span class="color-black fw-500">
                                            thaibfconference.com
                                        </span>
                                    </div>
                                    <div class="d-flex view">
                                        <div class="icon color-blue text-2xs mr-2">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <span class="color-black fw-500">
                                            5-8 กรกฎาคม 2563
                                        </span>
                                    </div>
                                </div>
                                <div class="title-container">
                                    <div class="title h4 my-2">
                                        วิทยากรการฝึกอบรมการยกระดับผู้ประกอบการสู่มาตรฐานการบริหารจัดการธุรกิจ 
                                        หลักสูตร "การยกระดับมาตรฐาน...
                                    </div>
                                </div>
                                <div class="post-stats-02">
                                    <div class="block"></div>
                                    <div class="btn-float">อ่านเพิ่ม</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
            
            <?php include_once('component/list-footer.php'); ?>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>