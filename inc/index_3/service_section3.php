 <!-- service-section -->
 <?php
$services = [
    [
        'image' => 'assets/images/service/service-1.jpg',
        'icon' => 'assets/images/icons/icon-4.png',
        'title' => 'Temporary',
        'link' => 'temprory-staffing.html',
        'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
    ],
    [
        'image' => 'assets/images/service/service-2.jpg',
        'icon' => 'assets/images/icons/icon-5.png',
        'title' => 'Direct Hire',
        'link' => 'direct-hire.html',
        'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
    ],
    [
        'image' => 'assets/images/service/service-3.jpg',
        'icon' => 'assets/images/icons/icon-6.png',
        'title' => 'Contract',
        'link' => 'contract-hire.html',
        'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
    ],
    // Add more items if needed...
];
?>

 <section page="inc/index_3/service_section3.php" class="service-section alternet-2 bg-color-1">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-32.png);"></div>
     <div class="auto-container">
         <div class="sec-title light centred">
             <span class="top-title">Solutions We Provide</span>
             <h2>Inspiring Staffing Solutions</h2>
             <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
         </div>
         <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
             <?php foreach ($services as $item) {
                    $image = $item['image'];
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $link = $item['link'];
                    $description = $item['description'];
                ?>
                 <div class="service-block-one">
                     <div class="inner-box">
                         <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                         <div class="lower-content">
                             <div class="content-box">
                                 <div class="inner">
                                     <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                     <h4><?= $title ?></h4>
                                 </div>
                                 <div class="link"><a href="<?= $link ?>">More Details</a></div>
                             </div>
                             <div class="overlay-content">
                                 <p><?= $description ?></p>
                                 <a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More details</a>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- service-section end -->