 <!-- hiring-strategies -->
 <section paeg="inc/overview/hiring_strategies1.php" class="hiring-strategies">
     <div class="auto-container">
         <div class="sec-title centred">
             <span class="top-title">Welcome to Eazy Recruitz</span>
             <h2>Improve Your Hiring Strategies</h2>
             <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
         </div>
         <div class="inner-box">
             <div class="title-inner bg-color-2">
                 <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-40.png);"></div>
                 <h2>Are You Looking for an Employee?...</h2>
                 <a href="overview.html" class="theme-btn-two">Hire Now</a>
             </div>
             <div class="funfact-inner clearfix">
                 <?php
                    $counters = [
                        [
                            'count' => 8,
                            'suffix' => '',
                            'icon' => 'flaticon-up-arrow-2',
                            'description' => 'Years of Experience in Field',
                        ],
                        [
                            'count' => 125,
                            'suffix' => '',
                            'icon' => '',
                            'description' => 'Companies With Our Tie-up',
                        ],
                        [
                            'count' => 6.2,
                            'suffix' => 'k',
                            'icon' => '',
                            'description' => 'Recruitments <br />for our partners',
                        ],
                    ];
                    ?>

                 <div class="row clearfix">
                     <?php foreach ($counters as $counter){ ?>
                         <div class="col-lg-4 col-md-6 col-sm-12 counter-column">
                             <div class="counter-block">
                                 <div class="count-outer count-box">
                                     <span class="count-text" data-speed="1500" data-stop="<?= $counter['count'] ?>">0</span><span><?= $counter['suffix'] ?></span>
                                     <?php if (!empty($counter['icon'])){ ?>
                                         <span class="icon <?= $counter['icon'] ?>"></span>
                                     <?php } ?>
                                 </div>
                                 <h6><?= $counter['description'] ?></h6>
                             </div>
                         </div>
                     <?php } ?>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- hiring-strategies end -->