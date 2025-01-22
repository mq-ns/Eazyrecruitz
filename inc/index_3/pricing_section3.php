<!-- pricing-section -->
<section page="inc/index_3/pricing_section3.php" class="pricing-section">
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
            <?php
            $pricing_tabs = [
                'tab-15' => [
                    [
                        'icon' => 'assets/images/icons/icon-35.png',
                        'title' => 'Temprory',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Sourcing', 'Resume Management', 'Candidate Tracking', 'Integrations'],
                        'price' => '5.5k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                    [
                        'icon' => 'assets/images/icons/icon-36.png',
                        'title' => 'Contract',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Matching', 'Security Control', 'Portal Management', 'Assessments'],
                        'price' => '6.5k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                    [
                        'icon' => 'assets/images/icons/icon-37.png',
                        'title' => 'Direct',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Sourcing', 'Resume Management', 'Candidate Tracking', 'Integrations'],
                        'price' => '8.5k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                ],
                'tab-16' => [
                    [
                        'icon' => 'assets/images/icons/icon-35.png',
                        'title' => 'Temprory',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Sourcing', 'Resume Management', 'Candidate Tracking', 'Integrations'],
                        'price' => '9.5k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                    [
                        'icon' => 'assets/images/icons/icon-36.png',
                        'title' => 'Contract',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Matching', 'Security Control', 'Portal Management', 'Assessments'],
                        'price' => '15k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                    [
                        'icon' => 'assets/images/icons/icon-37.png',
                        'title' => 'Direct',
                        'text' => 'Salary Level upto $50k',
                        'features' => ['Candidate Sourcing', 'Resume Management', 'Candidate Tracking', 'Integrations'],
                        'price' => '25k',
                        'price_unit' => '/ Role / Monthly',
                        'link' => 'index-2.php',
                    ],
                ],
            ];
            ?>
            <div class="tabs-content">
                <?php foreach ($pricing_tabs as $tab_id => $items) { ?>
                    <div class="tab<?= $tab_id === 'tab-15' ? ' active-tab' : '' ?>" id="<?= $tab_id ?>">
                        <div class="row clearfix">
                            <?php foreach ($items as $item) {
                                $item_icon = $item['icon'];
                                $item_title = $item['title'];
                                $item_text = $item['text'];
                                $item_features = $item['features'];
                                $item_price = $item['price'];
                                $item_price_unit = $item['price_unit'];
                                $item_link = $item['link'];
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-two">
                                        <div class="inner-box">
                                            <div class="pricing-header centred">
                                                <figure class="icon-box"><img src="<?= $item_icon ?>" alt="<?= $item_title ?>"></figure>
                                                <h3><?= $item_title ?></h3>
                                                <span class="text"><?= $item_text ?></span>
                                            </div>
                                            <ul class="list clearfix">
                                                <?php foreach ($item_features as $feature) { ?>
                                                    <li><?= $feature ?></li>
                                                <?php } ?>
                                            </ul>
                                            <h2><span class="symble">$</span><?= $item_price ?> <span class="text"><?= $item_price_unit ?></span></h2>
                                            <a href="<?= $item_link ?>">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- pricing-section end -->