<!-- portfolio-page-section -->
<section page="inc/portfolio/portfolio_grid2.php" class="portfolio-grid-2 protfolio-page">
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
                        'image' => 'assets/images/project/project-18.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-19.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all consulting presentation technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-20.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all presentation market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-21.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all consulting technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-22.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-23.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all consulting presentation recruitment technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-24.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all consulting technology'
                    ],
                    [
                        'image' => 'assets/images/project/project-25.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all presentation consulting market recruitment'
                    ],
                    [
                        'image' => 'assets/images/project/project-26.jpg',
                        'category' => 'Presentation',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html',
                        'classes' => 'all consulting presentation recruitment technology'
                    ]
                ];

                // 遍历项目数据并输出 HTML
                foreach ($projects as $project) {
                    $project_image = $project['image'];
                    $project_category = $project['category'];
                    $project_title = $project['title'];
                    $project_link = $project['link'];
                    $project_classes = $project['classes'];
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column <?= $project_classes ?>">
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

            <div class="pagination-wrapper centred">
                <ul class="pagination">
                    <li><a href="blog-list.html"><i class="flaticon-arrowhead-thin-outline-to-the-left"></i></a></li>
                    <li><a href="blog-list.html" class="active">1</a></li>
                    <li><a href="blog-list.html">2</a></li>
                    <li><a href="blog-list.html"><i class="flaticon-right-arrow-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- portfolio-page-section end -->