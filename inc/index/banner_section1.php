   <!-- banner-section -->
   <section page="inc/index/banner_section1.php" class="banner-section style-one">
       <?php
        $banners = [
            [
                'style' => 'style-one',
                'image_layer' => 'assets/images/banner/banner-1.jpg',
                'pattern_1' => 'assets/images/shape/pattern-1.png',
                'pattern_2' => 'assets/images/shape/pattern-2.png',
                'title' => 'Partnering <br />You for Your <br />Human Resource Require.',
                'description' => 'By way of us you can achieve what you want.',
                'button_text' => 'Learn More',
                'button_link' => 'index.php',
                'content_class' => 'col-xl-6 col-lg-12 col-md-12 content-column',
            ],
            [
                'style' => 'style-two',
                'image_layer' => 'assets/images/banner/banner-2.jpg',
                'pattern_1' => 'assets/images/shape/pattern-3.png',
                'pattern_2' => 'assets/images/shape/pattern-4.png',
                'title' => 'Shining a Light on Your HR <br />and Employment Law Issues',
                'description' => 'By way of us you can achieve what you want.',
                'button_text' => 'Learn More',
                'button_link' => 'index.php',
                'content_class' => 'col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column',
            ],
            [
                'style' => 'style-one',
                'image_layer' => 'assets/images/banner/banner-3.jpg',
                'pattern_1' => 'assets/images/shape/pattern-1.png',
                'pattern_2' => 'assets/images/shape/pattern-2.png',
                'title' => 'Eazy Recruitz <br />Provide Employment Opportunities',
                'description' => 'By way of us you can achieve what you want.',
                'button_text' => 'Learn More',
                'button_link' => 'index.php',
                'content_class' => 'col-xl-7 col-lg-12 col-md-12 content-column',
            ],
        ];
        ?>

       <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
           <?php foreach ($banners as $banner) {
                $style = $banner['style'];
                $image_layer = $banner['image_layer'];
                $pattern_1 = $banner['pattern_1'];
                $pattern_2 = $banner['pattern_2'];
                $title = $banner['title'];
                $description = $banner['description'];
                $button_text = $banner['button_text'];
                $button_link = $banner['button_link'];
                $content_class = $banner['content_class'];
            ?>
               <div class="slide-item <?= $style ?>">
                   <div class="image-layer" style="background-image:url(<?= $image_layer ?>)"></div>
                   <div class="pattern-layer">
                       <div class="pattern-1" style="background-image: url(<?= $pattern_1 ?>);"></div>
                       <div class="pattern-2" style="background-image: url(<?= $pattern_2 ?>);"></div>
                   </div>
                   <div class="auto-container">
                       <div class="row clearfix">
                           <div class="<?= $content_class ?>">
                               <div class="content-box">
                                   <span>Engaged with Staffing</span>
                                   <h1><?= $title ?></h1>
                                   <p><?= $description ?></p>
                                   <div class="btn-box">
                                       <a href="<?= $button_link ?>" class="theme-btn-two"><?= $button_text ?></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           <?php } ?>
       </div>

   </section>
   <!-- banner-section end -->