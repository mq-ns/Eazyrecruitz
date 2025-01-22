<!-- chooseus-section -->
<?php
$chooseUsBlocks = [
    [
        'icon' => 'assets/images/icons/icon-44.png',
        'title' => 'Certified Companies',
        'description' => 'Indignations & dislike men beguiled demoralized.',
        'link' => 'index-2.php',
        'animation_delay' => '00ms',
    ],
    [
        'icon' => 'assets/images/icons/icon-45.png',
        'title' => 'Save Your Time',
        'description' => 'Business it will frequently pleasures repudiated.',
        'link' => 'index-2.php',
        'animation_delay' => '200ms',
    ],
    [
        'icon' => 'assets/images/icons/icon-46.png',
        'title' => 'Save Your Money',
        'description' => 'Indignations & dislike men beguiled demoralized.',
        'link' => 'index-2.php',
        'animation_delay' => '400ms',
    ],
    [
        'icon' => 'assets/images/icons/icon-47.png',
        'title' => 'Broad Network',
        'description' => 'Business it will frequently pleasures repudiated.',
        'link' => 'index-2.php',
        'animation_delay' => '600ms',
    ],
];
?>

<section page="inc/chooseus_element1/chooseus_section1.php" class="chooseus-section alternet-2 sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <?php foreach ($chooseUsBlocks as $block){ ?>
                <?php
                // 提前赋值
                $icon = $block['icon'];
                $title = $block['title'];
                $description = $block['description'];
                $link = $block['link'];
                $animation_delay = $block['animation_delay'];
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="<?= $animation_delay ?>"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                            <h3><?= $title ?></h3>
                            <p><?= $description ?></p>
                            <a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- chooseus-section end -->