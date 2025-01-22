<!-- project-section -->
<?php
$projects = [
    [
        'image' => 'assets/images/project/project-1.jpg',
        'pattern_1' => 'assets/images/shape/pattern-16.png',
        'pattern_2' => 'assets/images/shape/pattern-17.png',
        'category' => '@ Presentation',
        'title' => 'Helping Bigbasket Scale Up',
        'link' => 'index-2.php',
        'lightbox_image' => 'assets/images/project/project-1.jpg',
    ],
    [
        'image' => 'assets/images/project/project-2.jpg',
        'pattern_1' => 'assets/images/shape/pattern-16.png',
        'pattern_2' => 'assets/images/shape/pattern-17.png',
        'category' => '@ Presentation',
        'title' => 'Helping Bigbasket Scale Up',
        'link' => 'index-2.php',
        'lightbox_image' => 'assets/images/project/project-2.jpg',
    ],
    [
        'image' => 'assets/images/project/project-3.jpg',
        'pattern_1' => 'assets/images/shape/pattern-16.png',
        'pattern_2' => 'assets/images/shape/pattern-17.png',
        'category' => '@ Presentation',
        'title' => 'Helping Bigbasket Scale Up',
        'link' => 'index-2.php',
        'lightbox_image' => 'assets/images/project/project-3.jpg',
    ],
    [
        'image' => 'assets/images/project/project-4.jpg',
        'pattern_1' => 'assets/images/shape/pattern-16.png',
        'pattern_2' => 'assets/images/shape/pattern-17.png',
        'category' => '@ Presentation',
        'title' => 'Helping Bigbasket Scale Up',
        'link' => 'index-2.php',
        'lightbox_image' => 'assets/images/project/project-4.jpg',
    ],
    [
        'image' => 'assets/images/project/project-5.jpg',
        'pattern_1' => 'assets/images/shape/pattern-16.png',
        'pattern_2' => 'assets/images/shape/pattern-17.png',
        'category' => '@ Presentation',
        'title' => 'Helping Bigbasket Scale Up',
        'link' => 'index-2.php',
        'lightbox_image' => 'assets/images/project/project-5.jpg',
    ],
];
?>

<section page="inc/index_2/project_section.php" class="project-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="top-title">Recruitment technologies</span>
            <h2>Latest From Our Project</h2>
        </div>
    </div>
    <div class="outer-container">
        <div class="project-carousel owl-carousel owl-theme owl-dots-none">
            <?php foreach ($projects as $project){ ?>
                <?php
                // 提前赋值
                $image = $project['image'];
                $pattern_1 = $project['pattern_1'];
                $pattern_2 = $project['pattern_2'];
                $category = $project['category'];
                $title = $project['title'];
                $link = $project['link'];
                $lightbox_image = $project['lightbox_image'];
                ?>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-1" style="background-image: url(<?= $pattern_1 ?>);"></div>
                                <div class="pattern-2" style="background-image: url(<?= $pattern_2 ?>);"></div>
                            </div>
                            <img src="<?= $image ?>" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span><?= $category ?></span>
                                <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                            </div>
                            <div class="view-btn">
                                <a href="<?= $lightbox_image ?>" class="lightbox-image" data-fancybox="gallery">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- project-section end -->