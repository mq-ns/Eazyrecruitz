<!-- news-section -->
<section page="inc/new_element1/news_section1.php" class="news-section">
    <div class="auto-container">
        <?php
        $news = [
            [
                'image' => 'assets/images/news/news-1.jpg',
                'date' => '21<br>May',
                'category' => 'Human Resource',
                'title' => '5 Effective Ways to Hire More Workers',
                'author' => 'Harley Reuban',
                'comments' => '3 Cmnts',
                'link' => 'blog-details.php',
            ],
            [
                'image' => 'assets/images/news/news-2.jpg',
                'date' => '20<br>May',
                'category' => 'Techiques',
                'title' => 'Does My Business Need a Director of Training?',
                'author' => 'Harley Reuban',
                'comments' => '5 Cmnts',
                'link' => 'blog-details.php',
            ],
            [
                'image' => 'assets/images/news/news-3.jpg',
                'date' => '19<br>May',
                'category' => 'Recruitment',
                'title' => 'What are the 2020 Staffing Trends in USA',
                'author' => 'Harley Reuban',
                'comments' => '4 Cmnts',
                'link' => 'blog-details.php',
            ],
        ];
        ?>

        <div class="row clearfix">
            <?php foreach ($news as $item): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="<?= $item['link'] ?>"><img src="<?= $item['image'] ?>" alt=""></a>
                                <span class="post-date"><?= $item['date'] ?></span>
                            </figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <div class="category">
                                        <i class="flaticon-note"></i>
                                        <p><?= $item['category'] ?></p>
                                    </div>
                                    <h3><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="index.php"><?= $item['author'] ?></a></li>
                                        <li><i class="far fa-comment"></i><a href="index.php"><?= $item['comments'] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- news-section end -->