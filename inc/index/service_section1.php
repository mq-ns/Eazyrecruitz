<!-- service-section -->
<section page="inc/index/service_section1.php" class="service-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-6.png);"></div>
    <div class="anim-icon">
        <div class="icon-1" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
        <div class="icon-2"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="top-title">Solutions We Provide</span>
            <h2>Inspiring Staffing Solutions</h2>
            <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
        </div>
        <?php
        $services = [
            [
                'image' => 'assets/images/service/service-1.jpg',
                'icon' => 'assets/images/icons/icon-4.png',
                'title' => 'Temporary',
                'link' => 'temprory-staffing.php',
                'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
            ],
            [
                'image' => 'assets/images/service/service-2.jpg',
                'icon' => 'assets/images/icons/icon-5.png',
                'title' => 'Direct Hire',
                'link' => 'direct-hire.php',
                'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
            ],
            [
                'image' => 'assets/images/service/service-3.jpg',
                'icon' => 'assets/images/icons/icon-6.png',
                'title' => 'Contract',
                'link' => 'contract-hire.php',
                'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
            ],
        ];
        ?>

        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
            <?php foreach ($services as $item) {
                $item_image = $item['image'];
                $item_icon = $item['icon'];
                $item_title = $item['title'];
                $item_link = $item['link'];
                $item_description = $item['description'];
            ?>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?= $item_image ?>" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <figure class="icon-box"><img src="<?= $item_icon ?>" alt=""></figure>
                                    <h4><?= $item_title ?></h4>
                                </div>
                                <div class="link"><a href="<?= $item_link ?>">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p><?= $item_description ?></p>
                                <a href="<?= $item_link ?>"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- service-section end -->