<!-- sidebar-page-container -->
<?php
$newsItems = [
    [
        'image' => 'assets/images/news/news-1.jpg',
        'post_date' => '24<br />May',
        'category' => 'Human Resource',
        'title' => '5 Effective Ways to Hire More Workers',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '3 Cmnts',
        'animation_delay' => '00ms',
    ],
    [
        'image' => 'assets/images/news/news-2.jpg',
        'post_date' => '23<br />May',
        'category' => 'Techiques',
        'title' => 'Does My Business Need a Director of Training?',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '5 Cmnts',
        'animation_delay' => '300ms',
    ],
    [
        'image' => 'assets/images/news/news-3.jpg',
        'post_date' => '22<br />May',
        'category' => 'Recruitment',
        'title' => 'What are the 2020 Staffing Trends in USA',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '4 Cmnts',
        'animation_delay' => '00ms',
    ],
    [
        'image' => 'assets/images/news/news-4.jpg',
        'post_date' => '21<br />May',
        'category' => 'Human Resource',
        'title' => 'Recognizing Our Award Winning Team',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '3 Cmnts',
        'animation_delay' => '300ms',
    ],
    [
        'image' => 'assets/images/news/news-5.jpg',
        'post_date' => '20<br />May',
        'category' => 'Techiques',
        'title' => 'What Is the Career Path to Becoming an HR?',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '5 Cmnts',
        'animation_delay' => '00ms',
    ],
    [
        'image' => 'assets/images/news/news-6.jpg',
        'post_date' => '19<br />May',
        'category' => 'Recruitment',
        'title' => 'Why Paying a Fair Salary is More Important?',
        'link' => 'blog-details.php',
        'author' => 'Harley Reuban',
        'comments' => '4 Cmnts',
        'animation_delay' => '300ms',
    ],
];
?>

<section page="inc/blog_grid/blog_grid.php" class="sidebar-page-container blog-grid">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <?php foreach ($newsItems as $item){ ?>
                            <?php
                            // 提前赋值
                            $image = $item['image'];
                            $post_date = $item['post_date'];
                            $category = $item['category'];
                            $title = $item['title'];
                            $link = $item['link'];
                            $author = $item['author'];
                            $comments = $item['comments'];
                            $animation_delay = $item['animation_delay'];
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="<?= $animation_delay ?>"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <a href="<?= $link ?>"><img src="<?= $image ?>" alt=""></a>
                                            <span class="post-date"><?= $post_date ?></span>
                                        </figure>
                                        <div class="lower-content">
                                            <div class="inner">
                                                <div class="category"><i class="flaticon-note"></i>
                                                    <p><?= $category ?></p>
                                                </div>
                                                <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                                <ul class="post-info clearfix">
                                                    <li><i class="far fa-user"></i><a href="index.php"><?= $author ?></a>
                                                    </li>
                                                    <li><i class="far fa-comment"></i><a
                                                            href="index.php"><?= $comments ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="more-btn centred"><a href="blog-grid.php">Load More</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="search-widget">
                        <form action="blog-grid.php" method="post" class="search-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Keyword" required="">
                                <button type="submit"><i class="flaticon-loupe-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                            <i class="flaticon-note"></i>
                        </div>
                        <div class="widget-content">
                            <ul class="list clearfix">
                                <li><a href="blog-details.php">Human Resource<span>[4]</span></a></li>
                                <li><a href="blog-details.php">Payroll<span>[3]</span></a></li>
                                <li><a href="blog-details.php">Recruitment<span>[2]</span></a></li>
                                <li><a href="blog-details.php">Salary<span>[5]</span></a></li>
                                <li><a href="blog-details.php">Staffing<span>[2]</span></a></li>
                                <li><a href="blog-details.php">Techniques<span>[8]</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h3>Recently Posted</h3>
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="widget-content">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.php"><img
                                            src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                <span class="post-date">2 hrs Ago</span>
                                <h5><a href="blog-details.php">5 Effective Ways to Hire More Workers</a></h5>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.php"><img
                                            src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                <span class="post-date">21st june, 2020</span>
                                <h5><a href="blog-details.php">Does My Business Need Director of Training?</a></h5>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.php"><img
                                            src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                <span class="post-date">28th May, 2020</span>
                                <h5><a href="blog-details.php">What are the Staffing Trends in 2020</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <h3>Tag Cloud</h3>
                            <i class="flaticon-hashtag"></i>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a href="blog-grid.php">Consulting</a></li>
                                <li><a href="blog-grid.php">Contract</a></li>
                                <li><a href="blog-grid.php">E-books</a></li>
                                <li><a href="blog-grid.php">E-books</a></li>
                                <li><a href="blog-grid.php">Hiring</a></li>
                                <li><a href="blog-grid.php">Industries</a></li>
                                <li><a href="blog-grid.php">Media Kit</a></li>
                                <li><a href="blog-grid.php">Outsourcing</a></li>
                                <li><a href="blog-grid.php">Permanent</a></li>
                                <li><a href="blog-grid.php">Permanent</a></li>
                                <li><a href="blog-grid.php">Timesheets</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget gallery-widget">
                        <div class="widget-title">
                            <h3>Gallery</h3>
                            <i class="flaticon-landscape"></i>
                        </div>
                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-1.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-1.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-2.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-2.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-3.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-3.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-4.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-4.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-5.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-5.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image-box"><a href="assets/images/news/gallery-6.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><img
                                                src="assets/images/news/gallery-6.jpg" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-resource">
                        <div class="inner-box centred">
                            <div class="pattern-layer">
                                <div class="pattern-1"
                                    style="background-image: url(assets/images/shape/pattern-47.png);"></div>
                                <div class="pattern-2"
                                    style="background-image: url(assets/images/shape/pattern-48.png);"></div>
                            </div>
                            <figure class="iocn-box"><img src="assets/images/icons/icon-68.png" alt=""></figure>
                            <h3>Educational Resources for Job Seekers</h3>
                            <a href="blog-grid.php">Guides & E-books<i class="flaticon-direct-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->