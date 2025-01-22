 <!-- testimonial-style-three -->
 <section page="inc/index_3/testimonial_style_three.php" class="testimonial-style-three bg-color-2">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-34.png);"></div>
     <div class="auto-container">
         <div class="sec-title centred">
             <span class="top-title">Testimonials</span>
             <h2>Words From Our Partners</h2>
         </div>
         <?php
            $testimonials = [
                [
                    'author_image' => 'assets/images/resource/testimonial-3.png',
                    'author_name' => 'Evan Clement',
                    'designation' => 'Manager, Cypertech',
                    'quote_image' => 'assets/images/icons/quote-3.png',
                    'background_shape' => 'assets/images/shape/border-2.png',
                    'text' => 'Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!.',
                ],
                [
                    'author_image' => 'assets/images/resource/testimonial-4.png',
                    'author_name' => 'Freddie Esther',
                    'designation' => 'VP, Daily News',
                    'quote_image' => 'assets/images/icons/quote-3.png',
                    'background_shape' => 'assets/images/shape/border-2.png',
                    'text' => 'I really appreciated the outstanding time, work and effort that the entire staff put into finding me an excellent job placement.',
                ],
                [
                    'author_image' => 'assets/images/resource/testimonial-5.png',
                    'author_name' => 'Ivor Hector',
                    'designation' => 'Founder, Furturtatech',
                    'quote_image' => 'assets/images/icons/quote-3.png',
                    'background_shape' => 'assets/images/shape/border-2.png',
                    'text' => 'They are very helpful and have a heart to assist the business. I’ve been very pleased with the cooperation & assistance from Eazy Recruitz.',
                ],
            ];
            ?>

         <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
             <?php foreach ($testimonials as $testimonial) {
                    $author_image = $testimonial['author_image'];
                    $author_name = $testimonial['author_name'];
                    $designation = $testimonial['designation'];
                    $quote_image = $testimonial['quote_image'];
                    $background_shape = $testimonial['background_shape'];
                    $text = $testimonial['text'];
                ?>
                 <div class="testimonial-block-three">
                     <div class="inner-box">
                         <div class="border-shap" style="background-image: url(<?= $background_shape ?>);"></div>
                         <figure class="quote-box"><img src="<?= $quote_image ?>" alt=""></figure>
                         <div class="author-box">
                             <figure class="author-thumb"><img src="<?= $author_image ?>" alt=""></figure>
                             <h3><?= $author_name ?></h3>
                             <span class="designation"><?= $designation ?></span>
                         </div>
                         <div class="text">
                             <p><?= $text ?></p>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- testimonial-style-three  end -->