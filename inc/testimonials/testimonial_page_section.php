 <!-- testimonial-page-section -->
 <section page="inc/testimonials/testimonial_page_section.php" class="testimonial-page-section">
     <div class="auto-container">
         <?php
            // 定义 testimonial 数据
            $testimonials = [
                [
                    'image' => 'assets/images/resource/testimonial-3.png',
                    'name' => 'Evan Clement',
                    'designation' => 'Manager, Cypertech',
                    'quote' => 'Eazy Recruitz is very accurate when comes to helping you find a job and if that job finishes, They help you to find an another job placement!',
                    'border' => 'assets/images/shape/border-2.png',
                ],
                [
                    'image' => 'assets/images/resource/testimonial-4.png',
                    'name' => 'Freddie Esther',
                    'designation' => 'VP, Daily News',
                    'quote' => 'Eazy Recruitz Services has been an enormous help to me by continuing to support my company’s Human Resources Department with qualified candidates.',
                    'border' => 'assets/images/shape/border-3.png',
                ],
                [
                    'image' => 'assets/images/resource/testimonial-5.png',
                    'name' => 'Ivor Hector',
                    'designation' => 'Founder, Furturtatech',
                    'quote' => 'Thank you for the exceptional work in assisting us with our temporary positions. Eazy Recruitz outstanding follow-through during entire process. Extremely expedient in finding us the best qualified candidates.',
                    'border' => 'assets/images/shape/border-4.png',
                ],
                [
                    'image' => 'assets/images/resource/testimonial-3.png',
                    'name' => 'Evan Clement',
                    'designation' => 'Manager, Cypertech',
                    'quote' => 'Thank you for the exceptional work in assisting us with our temporary positions. Eazy Recruitz outstanding follow-through during entire process. Extremely expedient in finding us the best qualified candidates.',
                    'border' => 'assets/images/shape/border-4.png',
                ],
                [
                    'image' => 'assets/images/resource/testimonial-4.png',
                    'name' => 'Freddie Esther',
                    'designation' => 'VP, Daily News',
                    'quote' => 'I really appreciated the outstanding time, work and effort that the entire staff put into finding me an excellent job placement.',
                    'border' => 'assets/images/shape/border-2.png',
                ]
            ];

            // 渲染 HTML
            ?>

         <div class="row clearfix">
             <?php foreach ($testimonials as $item) {
                    // 为每个变量先赋值
                    $item_image = $item['image'];
                    $item_name = $item['name'];
                    $item_designation = $item['designation'];
                    $item_quote = $item['quote'];
                    $item_border = $item['border'];
                ?>
                 <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                     <div class="testimonial-block-three">
                         <div class="inner-box">
                             <div class="border-shap" style="background-image: url(<?= $item_border ?>);"></div>
                             <figure class="quote-box"><img src="assets/images/icons/quote-3.png" alt=""></figure>
                             <div class="author-box">
                                 <figure class="author-thumb"><img src="<?= $item_image ?>" alt=""></figure>
                                 <h3><?= $item_name ?></h3>
                                 <span class="designation"><?= $item_designation ?></span>
                             </div>
                             <div class="text">
                                 <p><?= $item_quote ?></p>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- testimonial-page-section end -->