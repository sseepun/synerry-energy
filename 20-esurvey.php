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
            [ 'url' => '#', 'display' => 'เกี่ยวกับกระทรวง' ],
            [ 'url' => '#', 'display' => 'แบบสอบถาม' ],
        ];
        $breadcrumbTitle = 'แบบสอบถาม';
        $breadcrumbBg = 'public/assets/app/images/bg/20.jpg';
        include('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="300">
                <?php
                    $listHeader = [
                        'search', 'category', 'order',
                        'order_options' => [
                            'เก่าที่สุด - ใหม่ที่สุด', 'ใหม่ที่สุด - เก่าที่สุด', 'เปิดดูมากสุด'
                        ]
                    ];
                    include('component/list-header.php');
                ?>
            </div>
            <div class="mt-3 pt-2" data-aos="fade-up" data-aos-delay="450">
                <div class="survey-01 border-top bcolor-sgray">
                    <?php for($i=0; $i<10; $i++){?>
                        <div class="border-bottom bcolor-sgray">
                            <div class="survey <?php if($i==0)echo 'active'; ?>">
                                <div class="header">
                                    <div class="icon-container">
                                        <div class="icon">
                                            <em class="fas fa-file-alt"></em>
                                        </div>
                                    </div>
                                    <div class="text-container">
                                        <h6 class="p lg fw-500">
                                            คุณคิดว่า “energy.go.th” ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ
                                        </h6>
                                        <a class="p sm fw-300 color-01 h-color-02 survey-toggle" href="#">
                                            <em class="fas fa-chart-bar mr-1"></em> 
                                            รายงานผลความคิดเห็น 
                                            <em class="fas fa-chevron-right ml-1"></em>
                                        </a>
                                    </div>
                                    <div class="btns">
                                        <a class="btn btn-action btn-color-01 btn-round btn-xs" href="#">
                                            <em class="far fa-edit mr-1"></em> ทำแบบสอบถาม
                                        </a>
                                    </div>
                                </div>
                                <div class="body" <?php if($i==0)echo 'style="display:block;"'; ?>>
                                    <div class="wrapper">
                                        <div class="chart-container">
                                            <div class="chart"></div>
                                            <div class="labels">
                                                <div class="label">
                                                    <div class="dot" style="background:#fa6121;"></div>
                                                    <p class="xs">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</p>
                                                </div>
                                                <div class="label">
                                                    <div class="dot" style="background:#627894;"></div>
                                                    <p class="xs">เว็บไซต์ทำงานไม่สมบูรณ์</p>
                                                </div>
                                                <div class="label">
                                                    <div class="dot" style="background:#dbe8f9;"></div>
                                                    <p class="xs">หาข้อมูลไม่พบ หรือพบยาก</p>
                                                </div>
                                                <div class="label">
                                                    <div class="dot" style="background:#a0aec1;"></div>
                                                    <p class="xs">เว็บไซต์รกเกินไป</p>
                                                </div>
                                                <div class="label">
                                                    <div class="dot" style="background:#ffb739;"></div>
                                                    <p class="xs">เว็บไซต์ทำงานช้า</p>
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
            <div data-aos="fade-up" data-aos-delay="0">
                <?php
                    $listFooter = [
                        'total', 'pagination', 'pp',
                        'pp_options' => [12, 24, 36, 48, 60, 72, 84, 96]
                    ];
                    include('component/list-footer.php');
                ?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'donut'
            },
            series: [23.1, 7.7, 30.8, 23.1, 15.4],
            legend: {
                show: false
            },
            colors: ['#fa6121', '#627894', '#dbe8f9', '#a0aec1', '#ffb739'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        background: '#ffffff',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: -5
                            },
                            value: {
                                show: true,
                                fontFamily: 'Sukhumvit',
                                fontWeight: 400,
                                fontSize: '26px',
                                color: '#5a5a5c',
                                offsetY: 5
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: '',
                                fontSize: '30px',
                                fontWeight: 400,
                                fontFamily: 'Sukhumvit',
                                color: '#5a5a5c',
                                formatter: function(w, d){
                                    return '';
                                }
                            }
                        }
                    }
                }
            }
        }
        $('.chart').each(function(){
            var apexChart = new ApexCharts($(this)[0], options);
            apexChart.render();
        });
    </script>
</body>
</html>
