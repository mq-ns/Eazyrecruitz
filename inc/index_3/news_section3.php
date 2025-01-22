 <!-- news-section -->
 <section page="inc/index_3/news_section3.php" class="news-section alternet-2">
     <div class="auto-container">
         <div class="sec-title">
             <span class="top-title">News & Updates</span>
             <h2>Featured News and Updates</h2>
             <a href="blog-grid.php" class="link"><i class="flaticon-right-arrow"></i>View All Post</a>
         </div>
         <?php
            $blogs = [
                [
                    'image' => 'assets/images/news/news-1.jpg',
                    'link' => 'blog-details.php',
                    'date' => '21<br />May',
                    'category' => 'Human Resource',
                    'title' => '5 Effective Ways to Hire More Workers',
                    'author' => 'Harley Reuban',
                    'author_link' => 'index.php',
                    'comments' => '3 Cmnts',
                    'comments_link' => 'index.php',
                ],
                [
                    'image' => 'assets/images/news/news-2.jpg',
                    'link' => 'blog-details.php',
                    'date' => '20<br />May',
                    'category' => 'Techiques',
                    'title' => 'Does My Business Need a Director of Training?',
                    'author' => 'Harley Reuban',
                    'author_link' => 'index.php',
                    'comments' => '5 Cmnts',
                    'comments_link' => 'index.php',
                ],
                [
                    'image' => 'assets/images/news/news-3.jpg',
                    'link' => 'blog-details.php',
                    'date' => '19<br />May',
                    'category' => 'Recruitment',
                    'title' => 'What are the 2020 Staffing Trends in USA',
                    'author' => 'Harley Reuban',
                    'author_link' => 'index.php',
                    'comments' => '4 Cmnts',
                    'comments_link' => 'index.php',
                ],
            ];
            ?>

         <div class="row clearfix">
             <?php foreach ($blogs as $blog) {
                    $blog_image = $blog['image'];
                    $blog_link = $blog['link'];
                    $blog_date = $blog['date'];
                    $blog_category = $blog['category'];
                    $blog_title = $blog['title'];
                    $blog_author = $blog['author'];
                    $blog_author_link = $blog['author_link'];
                    $blog_comments = $blog['comments'];
                    $blog_comments_link = $blog['comments_link'];
                ?>
                 <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                     <div class="news-block-one">
                         <div class="inner-box">
                             <figure class="image-box">
                                 <a href="<?= $blog_link ?>"><img src="<?= $blog_image ?>" alt=""></a>
                                 <span class="post-date"><?= $blog_date ?></span>
                             </figure>
                             <div class="lower-content">
                                 <div class="inner">
                                     <div class="category"><i class="flaticon-note"></i>
                                         <p><?= $blog_category ?></p>
                                     </div>
                                     <h3><a href="<?= $blog_link ?>"><?= $blog_title ?></a></h3>
                                     <ul class="post-info clearfix">
                                         <li><i class="far fa-user"></i><a href="<?= $blog_author_link ?>"><?= $blog_author ?></a></li>
                                         <li><i class="far fa-comment"></i><a href="<?= $blog_comments_link ?>"><?= $blog_comments ?></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- news-section end -->