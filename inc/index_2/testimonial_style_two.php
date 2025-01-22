 <!-- testimonial-style-two -->
 <?php
    $thumbBoxes = [
        [
            'imgSrc' => 'assets/images/resource/thumb-1.png',
            'patterns' => [
                'pattern-1' => 'assets/images/shape/pattern-21.png',
                'pattern-2' => 'assets/images/shape/pattern-22.png',
                'pattern-3' => '',
                'pattern-4' => 'assets/images/shape/pattern-23.png',
            ],
            'class' => 'thumb-1',
        ],
        [
            'imgSrc' => 'assets/images/resource/thumb-2.png',
            'patterns' => [
                'pattern-1' => 'assets/images/shape/pattern-21.png',
                'pattern-2' => 'assets/images/shape/pattern-22.png',
                'pattern-3' => '',
                'pattern-4' => 'assets/images/shape/pattern-23.png',
            ],
            'class' => 'thumb-2',
        ],
        [
            'imgSrc' => 'assets/images/resource/thumb-3.png',
            'patterns' => [
                'pattern-1' => 'assets/images/shape/pattern-21.png',
                'pattern-2' => 'assets/images/shape/pattern-22.png',
                'pattern-3' => '',
                'pattern-4' => 'assets/images/shape/pattern-23.png',
            ],
            'class' => 'thumb-3',
        ],
        [
            'imgSrc' => 'assets/images/icons/comment-1.png',
            'patterns' => [],
            'class' => 'thumb-4',
        ],
    ];
    ?>

 <section page="inc/index_2/testimonial_style_two.php" class="testimonial-style-two centred">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-20.png);"></div>
     <div class="thumb-box">
         <?php foreach ($thumbBoxes as $thumb) { ?>
             <div class="user-thumb <?= $thumb['class'] ?>">
                 <img src="<?= $thumb['imgSrc'] ?>" alt="">
                 <?php foreach ($thumb['patterns'] as $class => $pattern) { ?>
                     <div class="<?= $class ?>" style="background-image: url(<?= $pattern ?>);"></div>
                 <?php } ?>
             </div>
         <?php } ?>
     </div>

     <div class="auto-container">
         <div class="row clearfix">
             <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 inner-column">
                 <?php
                    $testimonials = [
                        [
                            'icon' => 'assets/images/icons/quote-2.png',
                            'text' => '“Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.”',
                            'rating' => 5, // 星星数量
                            'author' => 'Evan Clement',
                            'position' => 'Manager, Cypertech',
                        ],
                        [
                            'icon' => 'assets/images/icons/quote-2.png',
                            'text' => '“Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.”',
                            'rating' => 5,
                            'author' => 'Evan Clement',
                            'position' => 'Manager, Cypertech',
                        ],
                        [
                            'icon' => 'assets/images/icons/quote-2.png',
                            'text' => '“Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.”',
                            'rating' => 5,
                            'author' => 'Evan Clement',
                            'position' => 'Manager, Cypertech',
                        ],
                        [
                            'icon' => 'assets/images/icons/quote-2.png',
                            'text' => '“Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.”',
                            'rating' => 5,
                            'author' => 'Evan Clement',
                            'position' => 'Manager, Cypertech',
                        ],
                        [
                            'icon' => 'assets/images/icons/quote-2.png',
                            'text' => '“Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.”',
                            'rating' => 5,
                            'author' => 'Evan Clement',
                            'position' => 'Manager, Cypertech',
                        ],
                    ];
                    ?>

                 <div class="testimonial-carousel-2 owl-carousel owl-theme owl-nav-none">
                     <?php foreach ($testimonials as $testimonial) { ?>
                         <div class="testimonial-block-two">
                             <div class="inner-box">
                                 <figure class="icon-box"><img src="<?= $testimonial['icon'] ?>" alt=""></figure>
                                 <p><?= $testimonial['text'] ?></p>
                                 <ul class="rating clearfix">
                                     <?php for ($i = 0; $i < $testimonial['rating']; $i++) { ?>
                                         <li><i class="flaticon-star"></i></li>
                                     <?php } ?>
                                 </ul>
                                 <h3><?= $testimonial['author'] ?> - <span><?= $testimonial['position'] ?></span></h3>
                             </div>
                         </div>
                     <?php } ?>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- testimonial-style-two end -->