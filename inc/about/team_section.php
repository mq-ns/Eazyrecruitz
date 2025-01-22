<!-- team-section -->
<section page="inc/about/team_section.php" class="team-section bg-color-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 experience-column">
                <div id="content_block_5">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="top-title">Team Behind Us</span>
                            <h2>Our Experience & Team</h2>
                        </div>
                        <div class="text">
                            <p>Obligations of business it will frequently occur that pleasures have to be repudiated &
                                annoyances accepted the wise man therefore always hold in these matters to this
                                principle of selection.</p>
                        </div>
                        <?php
                        $progressBars = [
                            [
                                'percent' => '52%',
                                'label' => 'Temporary',
                            ],
                            [
                                'percent' => '78%',
                                'label' => 'Contract',
                            ],
                            [
                                'percent' => '65%',
                                'label' => 'Direct Hire',
                            ],
                            [
                                'percent' => '89%',
                                'label' => 'Payrolling',
                            ],
                        ];
                        ?>

                        <div class="progress-inner">
                            <?php foreach ($progressBars as $item){ ?>
                                <?php
                                // 提前赋值
                                $percent = $item['percent'];
                                $label = $item['label'];
                                ?>
                                <div class="progress-box">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="<?= $percent ?>">
                                            <div class="count-text"><?= $percent ?></div>
                                        </div>
                                    </div>
                                    <h6><?= $label ?></h6>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="link"><a href="index.php"><i class="flaticon-right-arrow"></i>Meet All Team
                                Members</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated"
                        data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="team-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/team/team-1.jpg" alt="">
                                    <span class="singature">Our Champ</span>
                                    <div class="share-box">
                                        <p><i class="fas fa-share-alt"></i>Share</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="index.php">Garrett Barnie</a></h3>
                                    <span class="designation">Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/team/team-2.jpg" alt="">
                                    <span class="singature">Our Champ</span>
                                    <div class="share-box">
                                        <p><i class="fas fa-share-alt"></i>Share</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="index.php">Isaac Herman</a></h3>
                                    <span class="designation">VP, Finance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                    <span class="singature">Our Champ</span>
                                    <div class="share-box">
                                        <p><i class="fas fa-share-alt"></i>Share</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="index.php">Joel Lou</a></h3>
                                    <span class="designation">Senior Consultant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->