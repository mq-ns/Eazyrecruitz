 <!-- chooseus-section -->
 <?php
    $chooseUsItems = [
        [
            'icon' => 'assets/images/icons/icon-44.png',
            'title' => 'Certified Companies',
            'description' => 'Indignations & dislike men beguiled demoralized.',
            'link' => 'index-2.html',
        ],
        [
            'icon' => 'assets/images/icons/icon-45.png',
            'title' => 'Save Your Time',
            'description' => 'Business it will frequently pleasures repudiated.',
            'link' => 'index-2.html',
        ],
        [
            'icon' => 'assets/images/icons/icon-46.png',
            'title' => 'Save Your Money',
            'description' => 'Indignations & dislike men beguiled demoralized.',
            'link' => 'index-2.html',
        ],
        [
            'icon' => 'assets/images/icons/icon-47.png',
            'title' => 'Broad Network',
            'description' => 'Business it will frequently pleasures repudiated.',
            'link' => 'index-2.html',
        ]
    ];
    ?>

 <section page="inc/index_3/chooseus_section_3.php" class="chooseus-section alternet-2">
     <div class="auto-container">
         <div class="title-inner clearfix">
             <div class="sec-title pull-left">
                 <span class="top-title">Benefits of Eazy Recruitz</span>
                 <h2>Reason for Choosing Us</h2>
             </div>
             <div class="text pull-right">
                 <p>Obligations of business it will frequently occur that pleasures have to be repudiated & annoyances accepted.</p>
             </div>
         </div>
         <div class="row clearfix">
             <?php foreach ($chooseUsItems as $item) {
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $description = $item['description'];
                    $link = $item['link'];
                    $delay = $item['delay'];
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