<!-- news-section -->
<?php
$newsItems = [
    [
        'image' => 'assets/images/news/news-1.jpg',
        'date' => '21<br />May',
        'category' => 'Human Resource',
        'title' => '5 Effective Ways to Hire More Workers',
        'link' => 'blog-details.html',
        'author' => 'Harley Reuban',
        'comments' => 3,
    ],
    [
        'image' => 'assets/images/news/news-2.jpg',
        'date' => '20<br />May',
        'category' => 'Techiques',
        'title' => 'Does My Business Need a Director of Training?',
        'link' => 'blog-details.html',
        'author' => 'Harley Reuban',
        'comments' => 5,
    ],
    [
        'image' => 'assets/images/news/news-3.jpg',
        'date' => '19<br />May',
        'category' => 'Recruitment',
        'title' => 'What are the 2020 Staffing Trends in USA',
        'link' => 'blog-details.html',
        'author' => 'Harley Reuban',
        'comments' => 4,
    ],
];
?>

<section page="inc/index_2/news_section.php" class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="top-title">News & Updates</span>
            <h2>Featured News and Updates</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
            <?php foreach ($newsItems as $item) {
                $item_image = $item['image'];
                $item_date = $item['date'];
                $item_category = $item['category'];
                $item_title = $item['title'];
                $item_link = $item['link'];
                $item_author = $item['author'];
                $item_comments = $item['comments'];
            ?>
                <div class="news-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="<?= $item_link ?>"><img src="<?= $item_image ?>" alt=""></a>
                            <span class="post-date"><?= $item_date ?></span>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="category"><i class="flaticon-note"></i>
                                    <p><?= $item_category ?></p>
                                </div>
                                <h3><a href="<?= $item_link ?>"><?= $item_title ?></a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-user"></i><a href="index.html"><?= $item_author ?></a></li>
                                    <li><i class="far fa-comment"></i><a href="index.html"><?= $item_comments ?> Cmnts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- news-section end -->