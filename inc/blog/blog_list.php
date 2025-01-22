<!-- sidebar-page-container -->
<?php
$blogPosts = [
    [
        'image' => 'assets/images/news/news-7.jpg',
        'post_date' => '24<br />May',
        'category' => 'Human Resource',
        'title' => '5 Effective Ways to Hire More Workers',
        'link' => 'blog-details.html',
        'author_image' => 'assets/images/news/author-1.png',
        'author' => 'Harley Reuban',
        'comments' => '3 Cmnts',
        'views' => '5 Views',
        'description' => 'Explain to you how all this mistaken idea of denouncing pleasure & praising pain was born and I will give you a complete ...',
        'social_links' => [
            'facebook' => 'blog-list.html',
            'twitter' => 'blog-list.html',
            'google_plus' => 'blog-list.html',
        ],
        'animation_delay' => '00ms',
    ],
    [
        'image' => 'assets/images/news/news-8.jpg',
        'post_date' => '23<br />May',
        'category' => 'Techiques',
        'title' => 'Does My Business Need a Director of Training?',
        'link' => 'blog-details.html',
        'author_image' => 'assets/images/news/author-2.png',
        'author' => 'Harley Reuban',
        'comments' => '4 Cmnts',
        'views' => '10 Views',
        'description' => 'Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire ...',
        'social_links' => [
            'facebook' => 'blog-list.html',
            'twitter' => 'blog-list.html',
            'google_plus' => 'blog-list.html',
        ],
        'animation_delay' => '00ms',
    ],
];
?>

<section page="inc/blog/blog_list.php" class="sidebar-page-container blog-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-list-content">
                    <?php foreach ($blogPosts as $post){ ?>
                        <?php
                        // 提前赋值
                        $image = $post['image'];
                        $post_date = $post['post_date'];
                        $category = $post['category'];
                        $title = $post['title'];
                        $link = $post['link'];
                        $author_image = $post['author_image'];
                        $author = $post['author'];
                        $comments = $post['comments'];
                        $views = $post['views'];
                        $description = $post['description'];
                        $social_links = $post['social_links'];
                        $animation_delay = $post['animation_delay'];
                        ?>
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
                                        <h2><a href="<?= $link ?>"><?= $title ?></a></h2>
                                        <p><?= $description ?></p>
                                        <ul class="post-info clearfix">
                                            <li><img src="<?= $author_image ?>" alt=""><a
                                                    href="index.html"><?= $author ?></a></li>
                                            <li><i class="far fa-comment"></i><a href="index.html"><?= $comments ?></a></li>
                                            <li><i class="far fa-eye"></i><a href="index.html"><?= $views ?></a></li>
                                        </ul>
                                        <div class="share-box">
                                            <a href="blog-list.html" class="share-link"><i class="fas fa-share-alt"></i></a>
                                            <ul class="social-links clearfix">
                                                <li><a href="<?= $social_links['facebook'] ?>"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="<?= $social_links['twitter'] ?>"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="<?= $social_links['google_plus'] ?>"><i
                                                            class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li><a href="blog-list.html"><i class="flaticon-arrowhead-thin-outline-to-the-left"></i></a>
                            </li>
                            <li><a href="blog-list.html" class="active">1</a></li>
                            <li><a href="blog-list.html">2</a></li>
                            <li><a href="blog-list.html"><i class="flaticon-right-arrow-2"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="search-widget">
                        <form action="blog-grid.html" method="post" class="search-form">
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
                                <li><a href="blog-details.html">Human Resource<span>[4]</span></a></li>
                                <li><a href="blog-details.html">Payroll<span>[3]</span></a></li>
                                <li><a href="blog-details.html">Recruitment<span>[2]</span></a></li>
                                <li><a href="blog-details.html">Salary<span>[5]</span></a></li>
                                <li><a href="blog-details.html">Staffing<span>[2]</span></a></li>
                                <li><a href="blog-details.html">Techniques<span>[8]</span></a></li>
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
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                <span class="post-date">2 hrs Ago</span>
                                <h5><a href="blog-details.html">5 Effective Ways to Hire More Workers</a></h5>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                <span class="post-date">21st june, 2020</span>
                                <h5><a href="blog-details.html">Does My Business Need Director of Training?</a></h5>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                <span class="post-date">28th May, 2020</span>
                                <h5><a href="blog-details.html">What are the Staffing Trends in 2020</a></h5>
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
                                <li><a href="blog-grid.html">Consulting</a></li>
                                <li><a href="blog-grid.html">Contract</a></li>
                                <li><a href="blog-grid.html">E-books</a></li>
                                <li><a href="blog-grid.html">E-books</a></li>
                                <li><a href="blog-grid.html">Hiring</a></li>
                                <li><a href="blog-grid.html">Industries</a></li>
                                <li><a href="blog-grid.html">Media Kit</a></li>
                                <li><a href="blog-grid.html">Outsourcing</a></li>
                                <li><a href="blog-grid.html">Permanent</a></li>
                                <li><a href="blog-grid.html">Permanent</a></li>
                                <li><a href="blog-grid.html">Timesheets</a></li>
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
                            <a href="blog-grid.html">Guides & E-books<i class="flaticon-direct-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->