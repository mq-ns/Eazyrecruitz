    <!-- testimonial-section -->
    <section page="inc/index/testimonial_section1.php" class="testimonial-section bg-color-2">
        <div class="auto-container">
            <div class="sec-title">
                <span class="top-title">Client Testimonials</span>
                <h2>Highest Client Satisfaction Rate</h2>
            </div>
            <?php
            $testimonials = [
                [
                    'border_image' => 'assets/images/shape/border-1.png',
                    'quote_image' => 'assets/images/icons/quote-1.png',
                    'author_image' => 'assets/images/resource/testimonial-1.png',
                    'rating' => 5, // Number of stars
                    'name' => 'Evan Clement',
                    'position' => 'Manager, Cypertech',
                    'text' => '[Eazy Recruitz] is very accurate when it comes to helping you find a job and if that job finishes, they help you find another job placement!',
                ],
                [
                    'border_image' => 'assets/images/shape/border-1.png',
                    'quote_image' => 'assets/images/icons/quote-1.png',
                    'author_image' => 'assets/images/resource/testimonial-2.png',
                    'rating' => 5,
                    'name' => 'Freddie Esther',
                    'position' => 'VP, Daily News',
                    'text' => 'I really appreciated the outstanding time, work, and effort that the entire staff put into finding me an excellent job placement. Thank you very much.',
                ],
            ];
            ?>

            <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="border-shap" style="background-image: url(<?= $testimonial['border_image'] ?>);"></div>
                            <figure class="quote-box"><img src="<?= $testimonial['quote_image'] ?>" alt=""></figure>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="<?= $testimonial['author_image'] ?>" alt=""></figure>
                                <ul class="rating clearfix">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                        <li><i class="flaticon-star"></i></li>
                                    <?php endfor; ?>
                                </ul>
                                <h3><?= $testimonial['name'] ?> - <span><?= $testimonial['position'] ?></span></h3>
                            </div>
                            <div class="text">
                                <p><?= $testimonial['text'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- testimonial-section end -->