<!-- solutions-problems -->
<section page="inc/overview/solutions_problems1.php" class="solutions-problems">
    <div class="auto-container">
        <div class="upper-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <h2>Realistic & <br />Common sense <br />Solutions to HR Problems</h2>
                        <p>Long established fact that reader will be distracted the readable of pages when looking at its layout.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <?php
                        $columns = [
                            [
                                'icon' => 'assets/images/icons/icon-54.png',
                                'title' => 'Understand Your <br />Needs',
                                'description' => 'Indignation and dislike men who beguiled demoralized.',
                                'link' => 'overview.php',
                                'link_text' => 'Start Discuss',
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-55.png',
                                'title' => 'Find the Perfect Candidate',
                                'description' => 'Business it will frequently occur pleasures repudiated.',
                                'link' => 'overview.php',
                                'link_text' => 'Post a Job',
                            ],
                        ];
                        ?>

                        <div class="row clearfix">
                            <?php
                            foreach ($columns as $column) {
                                $icon = $column['icon'];
                                $title = $column['title'];
                                $description = $column['description'];
                                $link = $column['link'];
                                $link_text = $column['link_text'];
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <figure class="icon-box"><img src="<?= $icon; ?>" alt=""></figure>
                                        <h3><?= $title; ?></h3>
                                        <p><?= $description; ?></p>
                                        <a href="<?= $link; ?>"><i class="flaticon-right-arrow"></i><?= $link_text; ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-box">
            <?php
            $carouselItems = [
                [
                    'image' => 'assets/images/resource/solutions-1.jpg',
                    'icon' => 'assets/images/icons/icon-56.png',
                    'title' => 'Customized Staffing Solutions and Relationship Building.',
                    'link' => 'overview.php',
                    'number' => '01',
                ],
                [
                    'image' => 'assets/images/resource/solutions-2.jpg',
                    'icon' => 'assets/images/icons/icon-57.png',
                    'title' => 'Full-Service Recruiting & Solutions.',
                    'link' => 'overview.php',
                    'number' => '02',
                ],
                // 可添加更多项
            ];
            ?>

            <div class="two-column-carousel owl-carousel owl-theme owl-dot-style-two owl-nav-none">
                <?php
                foreach ($carouselItems as $item) {
                    $image = $item['image'];
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $link = $item['link'];
                    $number = $item['number'];
                ?>
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?= $image; ?>" alt="">
                            </figure>
                            <div class="lower-content">
                                <h3><?= $title; ?></h3>
                            </div>
                            <div class="side-content">
                                <div class="content-box">
                                    <span><?= $number; ?>.</span>
                                    <figure class="icon-box">
                                        <img src="<?= $icon; ?>" alt="">
                                    </figure>
                                </div>
                                <div class="overlay-box">
                                    <span><?= $number; ?>.</span>
                                    <a href="<?= $link; ?>"><i class="flaticon-right-arrow-angle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- solutions-problems end -->