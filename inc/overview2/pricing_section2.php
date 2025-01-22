<!-- pricing-section -->
<section page="inc/overview2/pricing_section2.php" class="pricing-section overview-page-2 bg-color-2">
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
            $tabs = [
                [
                    'id' => 'tab-15',
                    'active' => true,
                    'pricing' => [
                        [
                            'icon' => 'assets/images/icons/icon-35.png',
                            'title' => 'Temprory Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$5.5k',
                            'fee' => 'Average Percentage Fee 10% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-36.png',
                            'title' => 'Contract Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$6.5k',
                            'fee' => 'Average Percentage Fee 12% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => true,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-37.png',
                            'title' => 'Direct Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$8.5k',
                            'fee' => 'Average Percentage Fee 15% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-38.png',
                            'title' => 'Training for Employee',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$12k',
                            'fee' => 'Average Percentage Fee 20% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                    ],
                ],
                [
                    'id' => 'tab-16',
                    'active' => false,
                    'pricing' => [
                        [
                            'icon' => 'assets/images/icons/icon-35.png',
                            'title' => 'Temprory Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$10k',
                            'fee' => 'Average Percentage Fee 15% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-36.png',
                            'title' => 'Contract Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$15k',
                            'fee' => 'Average Percentage Fee 20% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => true,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-37.png',
                            'title' => 'Direct Recruitment',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$18k',
                            'fee' => 'Average Percentage Fee 25% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                        [
                            'icon' => 'assets/images/icons/icon-38.png',
                            'title' => 'Training for Employee',
                            'salary' => 'Salary Level upto $50k',
                            'price' => '$20k',
                            'fee' => 'Average Percentage Fee 30% / Candidate',
                            'link' => 'index-2.html',
                            'popular' => false,
                        ],
                    ],
                ],
            ];
            ?>

            <div class="tabs-content">
                <?php foreach ($tabs as $tab) { ?>
                    <div class="tab<?= $tab['active'] ? ' active-tab' : ''; ?>" id="<?= $tab['id']; ?>">
                        <div class="row clearfix">
                            <?php foreach ($tab['pricing'] as $pricing) {
                                $icon = $pricing['icon'];
                                $title = $pricing['title'];
                                $salary = $pricing['salary'];
                                $price = $pricing['price'];
                                $fee = $pricing['fee'];
                                $link = $pricing['link'];
                                $popular = $pricing['popular'];
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
                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- pricing-section end -->