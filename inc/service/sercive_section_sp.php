       <!-- service-section -->
       <section page="inc/service/sercive_section_sp.php" class="service-section service-page">
           <div class="anim-icon">
               <div class="icon-1" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
               <div class="icon-2"></div>
           </div>
           <div class="auto-container">
               <div class="sec-title centred">
                   <span class="top-title">Solutions We Provide</span>
                   <h2>Inspiring Staffing Solutions</h2>
                   <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
               </div>
               <div class="row clearfix">
                   <?php
                    // 列表数据
                    $services = [
                        [
                            'image' => 'service-1.jpg',
                            'icon' => 'icon-4.png',
                            'title' => 'Temporary',
                            'link' => 'temprory-staffing.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ],
                        [
                            'image' => 'service-2.jpg',
                            'icon' => 'icon-5.png',
                            'title' => 'Direct Hire',
                            'link' => 'direct-hire.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ],
                        [
                            'image' => 'service-3.jpg',
                            'icon' => 'icon-6.png',
                            'title' => 'Contract',
                            'link' => 'contract-hire.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ],
                        [
                            'image' => 'service-4.jpg',
                            'icon' => 'icon-61.png',
                            'title' => 'Payrolling',
                            'link' => 'temprory-staffing.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ],
                        [
                            'image' => 'service-5.jpg',
                            'icon' => 'icon-62.png',
                            'title' => 'Training',
                            'link' => 'direct-hire.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ],
                        [
                            'image' => 'service-6.jpg',
                            'icon' => 'icon-63.png',
                            'title' => 'Executive Search',
                            'link' => 'contract-hire.php',
                            'description' => 'Explain to you how this idea denouncing pleasure & praising pain was born.'
                        ]
                    ];

                    // 遍历并生成每一项
                    foreach ($services as $service) {
                    ?>
                       <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                           <div class="service-block-one">
                               <div class="inner-box">
                                   <figure class="image-box"><img src="assets/images/service/<?= $service['image'] ?>" alt=""></figure>
                                   <div class="lower-content">
                                       <div class="content-box">
                                           <div class="inner">
                                               <figure class="icon-box"><img src="assets/images/icons/<?= $service['icon'] ?>" alt=""></figure>
                                               <h4><?= $service['title'] ?></h4>
                                           </div>
                                           <div class="link"><a href="<?= $service['link'] ?>">More Details</a></div>
                                       </div>
                                       <div class="overlay-content">
                                           <p><?= $service['description'] ?></p>
                                           <a href="<?= $service['link'] ?>"><i class="flaticon-right-arrow"></i>More details</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php
                    }
                    ?>
               </div>

           </div>
       </section>
       <!-- service-section end -->