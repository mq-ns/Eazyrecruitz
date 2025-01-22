<!-- pricing-section -->
<section page="inc/overview/pricing_section1.php" class="pricing-section overview-page">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-41.png);"></div>
    <div class="auto-container">
        <div class="sec-title">
            <span class="top-title">Our Pricing & Plans</span>
            <h2>Impressive Pricing & Plans</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-15">Standard</li>
                    <li class="tab-btn" data-tab="#tab-16">Premium</li>
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-15">
                    <?php
                    $pricingBlocks = [
                        [
                            'icon' => 'assets/images/icons/icon-35.png',
                            'title' => 'Temporary Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$10k',
                            'fee' => 'Average Percentage Fee 15% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-36.png',
                            'title' => 'Contract Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$15k',
                            'fee' => 'Average Percentage Fee 20% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => true,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-37.png',
                            'title' => 'Direct Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$18k',
                            'fee' => 'Average Percentage Fee 25% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-38.png',
                            'title' => 'Training for Employee',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$20k',
                            'fee' => 'Average Percentage Fee 30% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                    ];
                    ?>

                    <div class="row clearfix">
                        <?php foreach ($pricingBlocks as $block) {
                            $icon = $block['icon'];
                            $title = $block['title'];
                            $salary = $block['salary'];
                            $price = $block['price'];
                            $fee = $block['fee'];
                            $link = $block['link'];
                            $popular = $block['popular'];
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one<?= $popular ? ' popular' : ''; ?>">
                                    <div class="inner-box">
                                        <?php if ($popular) { ?>
                                            <div class="popular-tag">Popular</div>
                                        <?php } ?>
                                        <figure class="icon-box"><img src="<?= $icon; ?>" alt=""></figure>
                                        <h3><?= $title; ?></h3>
                                        <span class="text"><?= $salary; ?></span>
                                        <h2><span class="symble"></span><?= $price; ?> <span class="text">/ Role</span></h2>
                                        <p><?= $fee; ?></p>
                                        <a href="<?= $link; ?>">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="tab" id="tab-16">
                    <?php
                    $pricingBlocks = [
                        [
                            'icon' => 'assets/images/icons/icon-35.png',
                            'title' => 'Temporary Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$10k',
                            'fee' => 'Average Percentage Fee 15% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-36.png',
                            'title' => 'Contract Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$15k',
                            'fee' => 'Average Percentage Fee 20% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => true,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-37.png',
                            'title' => 'Direct Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$18k',
                            'fee' => 'Average Percentage Fee 25% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-38.png',
                            'title' => 'Training for Employee',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$20k',
                            'fee' => 'Average Percentage Fee 30% / Candidate',
                            'link' => 'index-2.php',
                            'popular' => false,
                        ],
                    ];
                    ?>

                    <div class="row clearfix">
                        <?php foreach ($pricingBlocks as $block) {
                            $icon = $block['icon'];
                            $title = $block['title'];
                            $salary = $block['salary'];
                            $price = $block['price'];
                            $fee = $block['fee'];
                            $link = $block['link'];
                            $popular = $block['popular'];
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one<?= $popular ? ' popular' : ''; ?>">
                                    <div class="inner-box">
                                        <?php if ($popular) { ?>
                                            <div class="popular-tag">Popular</div>
                                        <?php } ?>
                                        <figure class="icon-box"><img src="<?= $icon; ?>" alt=""></figure>
                                        <h3><?= $title; ?></h3>
                                        <span class="text"><?= $salary; ?></span>
                                        <h2><span class="symble"></span><?= $price; ?> <span class="text">/ Role</span></h2>
                                        <p><?= $fee; ?></p>
                                        <a href="<?= $link; ?>">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing-section end -->