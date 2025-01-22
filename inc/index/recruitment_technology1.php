<!-- recruitment-technology -->
<section page="inc/index/recruitment_technology1.php" class="recruitment-technology">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <figure class="image-box js-tilt clearfix"><img src="assets/images/resource/recruitment-1.png" alt=""></figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_4">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="top-title">Recruitment technologies</span>
                            <h2>Solving Recruitment Using Technology</h2>
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
                        </div>
                        <?php
                        $steps = [
                            [
                                'icon' => 'assets/images/icons/icon-7.png',
                                'step_number' => '01',
                                'title' => 'Sourcing the Best',
                                'link' => 'index.html',
                                'description' => 'All the lorem ipsum generators on the Internet tend.',
                                'delay' => '00ms',
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-8.png',
                                'step_number' => '02',
                                'title' => 'Volume Hiring',
                                'link' => 'index.html',
                                'description' => 'On the other hand, we denounce with righteous.',
                                'delay' => '300ms',
                            ],
                            [
                                'icon' => 'assets/images/icons/icon-9.png',
                                'step_number' => '03',
                                'title' => 'Partners in Team Building',
                                'link' => 'index.html',
                                'description' => 'Man therefore always holds in these matters to this.',
                                'delay' => '600ms',
                            ],
                            // 可按需添加更多步骤...
                        ];
                        ?>

                        <div class="inner-box">
                            <?php foreach ($steps as $step) {
                                $step_icon = $step['icon'];
                                $step_number = $step['step_number'];
                                $step_title = $step['title'];
                                $step_link = $step['link'];
                                $step_description = $step['description'];
                                $step_delay = $step['delay'];
                            ?>
                                <div class="single-item wow fadeInRight animated animated" data-wow-delay="<?= $step_delay ?>" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="<?= $step_icon ?>" alt=""></figure>
                                        <h3><span><?= $step_number ?></span><a href="<?= $step_link ?>"><?= $step_title ?><i class="flaticon-right-arrow"></i></a></h3>
                                        <p><?= $step_description ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- recruitment-technology end -->