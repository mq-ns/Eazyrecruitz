<!-- industries-section -->
<section page="inc/index/industries_section1.php" class="industries-section bg-color-1">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-7.png);"></div>
    <div class="auto-container">
        <div class="tabs-box">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-12 col-sm-12 btn-column">
                    <div class="sec-title light">
                        <span class="top-title">Our Service areas</span>
                        <h2>Industries Hiring</h2>
                    </div>
                    <div class="tab-btn-box">
                        <?php
                        $tabs = [
                            [
                                'icon' => 'assets/images/icons/icon-10.png',
                                'title' => 'Logistics & Services',
                                'data_tab' => '#tab-3',
                                'active' => true,
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-11.png',
                                'title' => 'Hospitality',
                                'data_tab' => '#tab-4',
                                'active' => false,
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-12.png',
                                'title' => 'Manufacturing',
                                'data_tab' => '#tab-5',
                                'active' => false,
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-13.png',
                                'title' => 'Education & Government',
                                'data_tab' => '#tab-6',
                                'active' => false,
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-14.png',
                                'title' => 'Software/IT',
                                'data_tab' => '#tab-7',
                                'active' => false,
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-15.png',
                                'title' => 'Front Line Support',
                                'data_tab' => '#tab-8',
                                'active' => false,
                            ],
                        ];
                        ?>

                        <ul class="tab-btns tab-buttons clearfix">
                            <?php foreach ($tabs as $tab) {
                                $tab_icon = $tab['icon'];
                                $tab_title = $tab['title'];
                                $tab_data_tab = $tab['data_tab'];
                                $tab_active = $tab['active'] ? 'active-btn' : '';
                            ?>
                                <li class="tab-btn <?= $tab_active ?>" data-tab="<?= $tab_data_tab ?>">
                                    <figure class="icon-box"><img src="<?= $tab_icon ?>" alt=""></figure>
                                    <h3><?= $tab_title ?></h3>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-sm-12 content-column">
                    <?php
                    $tabs_content = [
                        [
                            'id' => 'tab-3',
                            'image' => 'assets/images/resource/industries-1.jpg',
                            'title' => 'Logistics & Services Industries',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => true,
                        ],
                        [
                            'id' => 'tab-4',
                            'image' => 'assets/images/resource/industries-2.jpg',
                            'title' => 'Hospitality',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => false,
                        ],
                        [
                            'id' => 'tab-5',
                            'image' => 'assets/images/resource/industries-3.jpg',
                            'title' => 'Manufacturing',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => false,
                        ],
                        [
                            'id' => 'tab-6',
                            'image' => 'assets/images/resource/industries-4.jpg',
                            'title' => 'Education & Government',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => false,
                        ],
                        [
                            'id' => 'tab-7',
                            'image' => 'assets/images/resource/industries-5.jpg',
                            'title' => 'Software/IT',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => false,
                        ],
                        [
                            'id' => 'tab-8',
                            'image' => 'assets/images/resource/industries-6.jpg',
                            'title' => 'Front Line Support',
                            'description' => '26 Jobs in 10 Different Companies',
                            'link' => 'index.html',
                            'active' => false,
                        ],
                    ];
                    ?>

                    <div class="tabs-content">
                        <?php foreach ($tabs_content as $tab) {
                            $tab_id = $tab['id'];
                            $tab_image = $tab['image'];
                            $tab_title = $tab['title'];
                            $tab_description = $tab['description'];
                            $tab_link = $tab['link'];
                            $tab_active = $tab['active'] ? 'active-tab' : '';
                        ?>
                            <div class="tab <?= $tab_active ?>" id="<?= $tab_id ?>">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="<?= $tab_image ?>" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <h2><?= $tab_title ?></h2>
                                            <span><?= $tab_description ?></span>
                                        </div>
                                        <div class="line"></div>
                                        <div class="link"><a href="<?= $tab_link ?>"><i class="flaticon-right-arrow-angle"></i></a></div>
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
<!-- industries-section end -->