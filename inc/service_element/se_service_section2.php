<!-- service-section -->
<section page="inc/service_element/se_service_section2.php" class="service-section">
    <div class="auto-container">
        <div class="row clearfix">
            <?php
            // 服务项数据
            $services = [
                [
                    'image' => 'assets/images/service/service-1.jpg',
                    'icon' => 'assets/images/icons/icon-4.png',
                    'title' => 'Temporary',
                    'link' => 'temprory-staffing.php',
                    'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                ],
                [
                    'image' => 'assets/images/service/service-2.jpg',
                    'icon' => 'assets/images/icons/icon-5.png',
                    'title' => 'Direct Hire',
                    'link' => 'direct-hire.php',
                    'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                ],
                [
                    'image' => 'assets/images/service/service-3.jpg',
                    'icon' => 'assets/images/icons/icon-6.png',
                    'title' => 'Contract',
                    'link' => 'contract-hire.php',
                    'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                ]
            ];

            // 遍历并生成服务项
            foreach ($services as $service) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?= $service['image'] ?>" alt=""></figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="<?= $service['icon'] ?>" alt=""></figure>
                                        <h4><?= $service['title'] ?></h4>
                                    </div>
                                    <div class="link"><a href="<?= $service['link'] ?>">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p><?= $service['description'] ?></p>
                                    <a href="<?= $service['link'] ?>"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>
<!-- service-section end -->