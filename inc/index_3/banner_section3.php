 <!-- banner-section -->
 <?php
    $banners = [
        [
            'image' => 'assets/images/banner/banner-7.jpg',
            'heading1' => 'HR solution',
            'heading2' => 'Inspired Partnerships',
            'description' => 'On the other hand, we denounce with righteous indignation and <br />dislike men who are so beguiled.',
            'link' => 'index-2.php',
            'button_text' => 'Hire Now',
        ],
        [
            'image' => 'assets/images/banner/banner-8.jpg',
            'heading1' => 'Right place',
            'heading2' => 'Let Us Look For You',
            'description' => 'On the other hand, we denounce with righteous indignation and <br />dislike men who are so beguiled.',
            'link' => 'index-2.php',
            'button_text' => 'Hire Now',
        ],
        [
            'image' => 'assets/images/banner/banner-9.jpg',
            'heading1' => 'your Guide',
            'heading2' => 'Placing People First',
            'description' => 'On the other hand, we denounce with righteous indignation and <br />dislike men who are so beguiled.',
            'link' => 'index-2.php',
            'button_text' => 'Hire Now',
        ],
    ];
    ?>

 <section page="inc/index_3/banner_section3.php" class="banner-section style-three">
     <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
         <?php foreach ($banners as $item) {
                $image = $item['image'];
                $heading1 = $item['heading1'];
                $heading2 = $item['heading2'];
                $description = $item['description'];
                $link = $item['link'];
                $button_text = $item['button_text'];
            ?>
             <div class="slide-item">
                 <div class="image-layer" style="background-image:url(<?= $image ?>)"></div>
                 <div class="pattern-layer">
                     <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-26.png);"></div>
                     <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-27.png);"></div>
                     <div class="pattern-3" style="background-image: url(assets/images/shape/pattern-28.png);"></div>
                     <div class="pattern-4" style="background-image: url(assets/images/shape/pattern-29.png);"></div>
                     <div class="pattern-5" style="background-image: url(assets/images/shape/pattern-30.png);"></div>
                 </div>
                 <div class="auto-container">
                     <div class="row clearfix">
                         <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-2 content-column">
                             <div class="content-box">
                                 <h1><?= $heading1 ?></h1>
                                 <h2><?= $heading2 ?></h2>
                                 <p><?= $description ?></p>
                                 <div class="btn-box">
                                     <a href="<?= $link ?>" class="btn-one"><?= $button_text ?></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>

     <div class="social-box">
         <ul class="social-links">
             <li>Follow :</li>
             <li><a href="index-3.php">Fb</a></li>
             <li><a href="index-3.php">Tw</a></li>
             <li><a href="index-3.php">In</a></li>
         </ul>
     </div>
     <div class="mail-box"><a href="mailto:info@example.com">info@example.com</a></div>
 </section>
 <!-- banner-section end -->