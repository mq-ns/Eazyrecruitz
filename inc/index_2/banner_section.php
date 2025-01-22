<!-- banner-section -->
<?php
$banners = [
    [
        'background_image' => 'assets/images/banner/banner-4.jpg',
        'pattern_1' => 'assets/images/shape/pattern-12.png',
        'pattern_2' => 'assets/images/shape/pattern-13.png',
        'subtitle' => 'Engaged with Staffing',
        'title' => 'Partnering You for Your Human Resource Require.',
        'btn_one_text' => 'Hire Now',
        'btn_one_link' => 'index-2.php',
        'btn_two_text' => 'Apply Now',
        'btn_two_link' => 'index-2.php',
    ],
    [
        'background_image' => 'assets/images/banner/banner-5.jpg',
        'pattern_1' => 'assets/images/shape/pattern-12.png',
        'pattern_2' => 'assets/images/shape/pattern-13.png',
        'subtitle' => 'The personnel touch',
        'title' => 'Shining a Light on Your HR & Employment Law Issues',
        'btn_one_text' => 'Hire Now',
        'btn_one_link' => 'index-2.php',
        'btn_two_text' => 'Apply Now',
        'btn_two_link' => 'index-2.php',
    ],
    [
        'background_image' => 'assets/images/banner/banner-6.jpg',
        'pattern_1' => 'assets/images/shape/pattern-12.png',
        'pattern_2' => 'assets/images/shape/pattern-13.png',
        'subtitle' => 'Choose the best from rest',
        'title' => 'Eazy Recruitz Provide Employment & Opportunities',
        'btn_one_text' => 'Hire Now',
        'btn_one_link' => 'index-2.php',
        'btn_two_text' => 'Apply Now',
        'btn_two_link' => 'index-2.php',
    ],
];
?>

<section page="inc/index_2/banner_section.php" class="banner-section style-two">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <?php foreach ($banners as $banner){ ?>
            <?php
            // 提前赋值
            $background_image = $banner['background_image'];
            $pattern_1 = $banner['pattern_1'];
            $pattern_2 = $banner['pattern_2'];
            $subtitle = $banner['subtitle'];
            $title = $banner['title'];
            $btn_one_text = $banner['btn_one_text'];
            $btn_one_link = $banner['btn_one_link'];
            $btn_two_text = $banner['btn_two_text'];
            $btn_two_link = $banner['btn_two_link'];
            ?>
            <div class="slide-item">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(<?= $pattern_1 ?>);"></div>
                    <div class="pattern-2" style="background-image: url(<?= $pattern_2 ?>);"></div>
                </div>
                <div class="image-layer" style="background-image: url(<?= $background_image ?>);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span><?= $subtitle ?></span>
                        <h1><?= $title ?></h1>
                        <div class="btn-box">
                            <a href="<?= $btn_one_link ?>" class="btn-one"><?= $btn_one_text ?></a>
                            <a href="<?= $btn_two_link ?>" class="btn-two"><?= $btn_two_text ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="mouse-btn-down scroll-to-target" data-target=".about-style-two">
        <div class="icon-box">
            <i class="flaticon-menu"></i>
            <i class="flaticon-angle-arrow-down"></i>
        </div>
    </div>
</section>
<!-- banner-section end -->