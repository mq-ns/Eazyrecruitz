<!-- portfolio-page-section -->
<section page="inc/portfolio/portfolio_grid3.php" class="portfolio-masonry protfolio-page">
    <div class="auto-container">
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
                        'image' => 'assets/images/project/project-27.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-28.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket <br />Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-6 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-29.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-30.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket <br />Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-6 col-md-6 col-sm-12 masonry-item small-column all consulting technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-31.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-3 col-md-6 col-sm-12 masonry-item small-column all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-33.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket <br />Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-6 col-md-6 col-sm-12 masonry-item small-column all consulting presentation recruitment technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-32.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket <br />Scale Up',
                        'link' => 'portfolio-3.php',
                        'classes' => 'col-lg-6 col-md-6 col-sm-12 masonry-item small-column all consulting technology'
                    ]
                ];

                // 遍历项目数据并生成 HTML
                foreach ($projects as $project) {
                    $project_image = $project['image'];
                    $project_category = $project['category'];
                    $project_title = $project['title'];
                    $project_link = $project['link'];
                    $project_classes = $project['classes'];
                ?>
                    <div class="<?= $project_classes ?>">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="<?= $project_image ?>" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="text">
                                        <span>@ <?= $project_category ?></span>
                                        <h3><a href="<?= $project_link ?>"><?= $project_title ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="more-btn centred"><a href="portfolio-1.php">Load More</a></div>
        </div>
    </div>
</section>
<!-- portfolio-page-section end -->