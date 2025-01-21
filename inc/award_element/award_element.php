<!-- awards-section -->
<?php
$awards = [
    [
        'icon' => 'assets/images/icons/icon-19.png',
        'title' => 'Best of Staffing Talent Award',
        'year' => '2009-2010',
        'award_by' => 'Los Vegas Business Time',
    ],
    [
        'icon' => 'assets/images/icons/icon-19.png',
        'title' => 'Best Companies to Work in Texas',
        'year' => '2012-2013',
        'award_by' => 'Sparks Group',
    ],
];
?>

<section page="inc/award_element/award_element.php" class="awards-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="top-title">Our Excellence</span>
            <h2>Awards & Major Achievements</h2>
            <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 inner-column">
                <div class="inner-block">
                    <?php foreach ($awards as $item): ?>
                        <?php
                        // 提前赋值
                        $icon = $item['icon'];
                        $title = $item['title'];
                        $year = $item['year'];
                        $award_by = $item['award_by'];
                        ?>
                        <div class="single-award-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                    <h3><?= $title ?></h3>
                                </div>
                                <ul class="lower-box">
                                    <li><span>Year</span>:<?= $year ?></li>
                                    <li><span>Award by</span>:<?= $award_by ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                <figure class="image-box js-tilt"><img src="assets/images/resource/award-1.png" alt=""></figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 inner-column">
                <div class="inner-block">
                    <?php foreach ($awards as $item): ?>
                        <?php
                        // 提前赋值
                        $icon = $item['icon'];
                        $title = $item['title'];
                        $year = $item['year'];
                        $award_by = $item['award_by'];
                        ?>
                        <div class="single-award-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                    <h3><?= $title ?></h3>
                                </div>
                                <ul class="lower-box">
                                    <li><span>Year</span>:<?= $year ?></li>
                                    <li><span>Award by</span>:<?= $award_by ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- awards-section end -->