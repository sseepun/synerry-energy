<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข่าว/ประกาศ' ],
            [ 'url' => '#', 'display' => 'คลังภาพ' ],
        ];
        $breadcrumbTitle = 'คลังภาพ';
        $breadcrumbBg = 'public/assets/app/images/bg/05.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = ['search', 'category', 'order', 'icon-grid', 'icon-rss'];
                    include('component/list-header.php');
                ?>
            </div>
            
            <div class="grids mt-2" data-aos="fade-up" data-aos-delay="450">
                <?php for($i=0; $i<12; $i++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-02">
                            <div class="text-container">
                                <a class="title p md fw-600" href="#">
                                    สำนักงานปลัดกระทรวงพลังงานได้รับรางวัลเลิศรัฐ 
                                    สาขาการบริหารราชการแบบมีส่วนร่วม ประจำปี พ.ศ. 2562
                                </a>
                                <div class="ss-stat mb-0 jc-space-between">
                                    <div class="stat mr-0">
                                        8 มกราคม 2020
                                    </div>
                                    <div class="stat mr-0">
                                        <em class="far fa-images mr-1"></em> 15
                                    </div>
                                    <div class="stat mr-0">
                                        <em class="far fa-eye mr-1"></em> 178
                                    </div>
                                </div>
                            </div>
                            <a class="ss-img square" href="#">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%5+1 ?>.jpg');"></div>
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

            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = ['total', 'pagination', 'pp'];
                    include('component/list-footer.php');
                ?>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
