   <!-- advantages-section -->
   <section page="inc/overview2/advantages_section2.php" class="advantages-section">
       <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-46.png);"></div>
       <div class="auto-container">
           <div class="sec-title centred">
               <span class="top-title">Benefits of Eazy Recruitz</span>
               <h2>Advantages of Working With Us</h2>
               <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
           </div>
           <?php
            // 定义轮播内容的数据
            $carouselItems = [
                [
                    'icon' => 'assets/images/icons/icon-44.png',
                    'title' => 'Certified Companies',
                    'description' => 'Indignation and dislike men who beguiled demoralized.',
                    'url' => 'overview-2.php',
                ],
                [
                    'icon' => 'assets/images/icons/icon-45.png',
                    'title' => 'Save Your Time',
                    'description' => 'Business it will frequently occur pleasures repudiated.',
                    'url' => 'overview-2.php',
                ],
                [
                    'icon' => 'assets/images/icons/icon-46.png',
                    'title' => 'Save Your Money',
                    'description' => 'Indignation and dislike men who beguiled demoralized.',
                    'url' => 'overview-2.php',
                ],
            ];
            ?>

           <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-two">
               <?php foreach ($carouselItems as $item) {
                    // 提前赋值所有需要的参数
                    $item_icon = $item['icon'];
                    $item_title = $item['title'];
                    $item_description = $item['description'];
                    $item_url = $item['url'];
                ?>
                   <div class="single-item">
                       <div class="inner-box">
                           <figure class="icon-box"><img src="<?= $item_icon; ?>" alt=""></figure>
                           <h3><?= $item_title; ?></h3>
                           <p><?= $item_description; ?></p>
                           <a href="<?= $item_url; ?>"><i class="flaticon-right-arrow"></i>More Details</a>
                       </div>
                   </div>
               <?php } ?>
           </div>
       </div>
   </section>
   <!-- advantages-section end -->