    <!-- portfolio-page-section -->
    <section page="inc/portfolio/portfolio_grid4.php" class="portfolio-wide-1 protfolio-page">
        <div class="outer-container">
            <div class="sortable-masonry">
                <div class="filters">
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">View All</li>
                        <li class="filter" data-role="button" data-filter=".consulting">Consulting</li>
                        <li class="filter" data-role="button" data-filter=".market">Market</li>
                        <li class="filter" data-role="button" data-filter=".presentation">Presentation</li>
                        <li class="filter" data-role="button" data-filter=".recruitment">Recruitment</li>
                        <li class="filter" data-role="button" data-filter=".technology">Technology</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <?php
                    // 定义项目数据数组
                    $projects = [
                        [
                            'image' => 'assets/images/project/project-34.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-34.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation consulting market recruitment'
                        ],
                        [
                            'image' => 'assets/images/project/project-35.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-35.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology'
                        ],
                        [
                            'image' => 'assets/images/project/project-36.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-36.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation market recruitment'
                        ],
                        [
                            'image' => 'assets/images/project/project-37.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-37.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all consulting technology'
                        ],
                        [
                            'image' => 'assets/images/project/project-38.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-38.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation consulting market recruitment'
                        ],
                        [
                            'image' => 'assets/images/project/project-39.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-39.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all consulting presentation recruitment technology'
                        ],
                        [
                            'image' => 'assets/images/project/project-40.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-40.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all consulting technology'
                        ],
                        [
                            'image' => 'assets/images/project/project-41.jpg',
                            'pattern1' => 'assets/images/shape/pattern-16.png',
                            'pattern2' => 'assets/images/shape/pattern-17.png',
                            'category' => 'Presentation',
                            'title' => 'Helping Bigbasket <br />Scale Up',
                            'link' => 'index-2.html',
                            'lightbox' => 'assets/images/project/project-41.jpg',
                            'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all consulting technology'
                        ],
                    ];

                    // 遍历项目数据并生成HTML
                    foreach ($projects as $project) {
                        $project_image = $project['image'];
                        $project_pattern1 = $project['pattern1'];
                        $project_pattern2 = $project['pattern2'];
                        $project_category = $project['category'];
                        $project_title = $project['title'];
                        $project_link = $project['link'];
                        $project_lightbox = $project['lightbox'];
                        $project_classes = $project['classes'];
                    ?>
                        <div class="<?= $project_classes ?>">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <div class="pattern-layer">
                                            <div class="pattern-1" style="background-image: url(<?= $project_pattern1 ?>);"></div>
                                            <div class="pattern-2" style="background-image: url(<?= $project_pattern2 ?>);"></div>
                                        </div>
                                        <img src="<?= $project_image ?>" alt="">
                                    </figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <span>@ <?= $project_category ?></span>
                                            <h3><a href="<?= $project_link ?>"><?= $project_title ?></a></h3>
                                        </div>
                                        <div class="view-btn">
                                            <a href="<?= $project_lightbox ?>" class="lightbox-image" data-fancybox="gallery">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="more-btn centred"><a href="portfolio-1.html">Load More</a></div>
            </div>
        </div>
    </section>
    <!-- portfolio-page-section end -->