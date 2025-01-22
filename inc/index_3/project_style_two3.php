<!-- project-style-two -->
<section page="inc/index_3/project_style_two3.php" class="project-style-two">
    <div class="outer-container">
        <?php
        $projects = [
            [
                'image' => 'assets/images/project/project-6.jpg',
                'pattern_1' => 'assets/images/shape/pattern-16.png',
                'pattern_2' => 'assets/images/shape/pattern-17.png',
                'title' => 'Helping Bigbasket Scale Up',
                'link' => 'index-2.html',
                'lightbox_image' => 'assets/images/project/project-6.jpg',
            ],
            [
                'image' => 'assets/images/project/project-7.jpg',
                'pattern_1' => 'assets/images/shape/pattern-16.png',
                'pattern_2' => 'assets/images/shape/pattern-17.png',
                'title' => 'Helping Bigbasket Scale Up',
                'link' => 'index-2.html',
                'lightbox_image' => 'assets/images/project/project-7.jpg',
            ],
            [
                'image' => 'assets/images/project/project-8.jpg',
                'pattern_1' => 'assets/images/shape/pattern-16.png',
                'pattern_2' => 'assets/images/shape/pattern-17.png',
                'title' => 'Helping Bigbasket Scale Up',
                'link' => 'index-2.html',
                'lightbox_image' => 'assets/images/project/project-8.jpg',
            ],
            [
                'image' => 'assets/images/project/project-9.jpg',
                'pattern_1' => 'assets/images/shape/pattern-16.png',
                'pattern_2' => 'assets/images/shape/pattern-17.png',
                'title' => 'Helping Bigbasket Scale Up',
                'link' => 'index-2.html',
                'lightbox_image' => 'assets/images/project/project-9.jpg',
            ],
        ];
        ?>

        <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <?php foreach ($projects as $project) {
                $image = $project['image'];
                $pattern_1 = $project['pattern_1'];
                $pattern_2 = $project['pattern_2'];
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
                                <span>@ Presentation</span>
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

        <div class="more-text centred">
            <p>Interested to work with us? <a href="index-3.html">Let’s get started</a></p>
        </div>
    </div>
</section>
<!-- project-style-two end -->