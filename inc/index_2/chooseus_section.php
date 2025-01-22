 <!-- chooseus-section -->
 <?php
    $chooseUsBlocks = [
        [
            'icon' => 'assets/images/icons/icon-31.png',
            'title' => 'Certified Companies',
            'description' => 'Indignations & dislike men beguiled demoralized.',
            'link' => 'index-2.php',
            'delay' => '00ms',
        ],
        [
            'icon' => 'assets/images/icons/icon-32.png',
            'title' => 'Save Your Time',
            'description' => 'Business it will frequently pleasures repudiated.',
            'link' => 'index-2.php',
            'delay' => '200ms',
        ],
        [
            'icon' => 'assets/images/icons/icon-33.png',
            'title' => 'Save Your Money',
            'description' => 'Indignations & dislike men beguiled demoralized.',
            'link' => 'index-2.php',
            'delay' => '400ms',
        ],
        [
            'icon' => 'assets/images/icons/icon-34.png',
            'title' => 'Broad Network',
            'description' => 'Business it will frequently pleasures repudiated.',
            'link' => 'index-2.php',
            'delay' => '600ms',
        ],
    ];
    ?>

 <section page="inc/index_2/chooseus_section.php" class="chooseus-section bg-color-1">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-18.png);"></div>
     <div class="auto-container">
         <div class="sec-title centred light">
             <span class="top-title">Benefits of Eazy Recruitz</span>
             <h2>Advantages Of Working With Us</h2>
             <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
         </div>
         <div class="row clearfix">
             <?php foreach ($chooseUsBlocks as $block) { ?>
                 <?php
                    // 提前赋值
                    $icon = $block['icon'];
                    $title = $block['title'];
                    $description = $block['description'];
                    $link = $block['link'];
                    $delay = $block['delay'];
                    ?>
                 <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                     <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="<?= $delay ?>" data-wow-duration="1500ms">
                         <div class="inner-box">
                             <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                             <h3><?= $title ?></h3>
                             <p><?= $description ?></p>
                             <a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More Details</a>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- chooseus-section end -->