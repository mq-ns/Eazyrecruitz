<!-- portfolio-page-section -->
<section page="inc/portfolio/portfolio_grid1.php" class="portfolio-grid-1 protfolio-page">
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
                        'image' => 'assets/images/project/project-12.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-13.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all consulting presentation technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-14.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all presentation market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-15.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all consulting technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-16.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-17.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.php',
                        'classes' => 'all consulting presentation recruitment technology'
                    ]
                ];

                // 遍历项目数组
                foreach ($projects as $project) {
                    $project_image = $project['image'];
                    $project_category = $project['category'];
                    $project_title = $project['title'];
                    $project_link = $project['link'];
                    $project_classes = $project['classes'];
                ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column <?= $project_classes ?>">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="<?= $project_image ?>" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="text">
                                        <span>@ <?= $project_category ?></span>
                                        <h3><a href="<?= $project_link ?>"><?= $project_title ?></a></h3>
                                    </div>
                                    <div class="link">
                                        <a href="<?= $project_link ?>"><i class="flaticon-right-arrow-angle"></i></a>
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