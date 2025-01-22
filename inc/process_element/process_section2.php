 <!-- process-style-two -->
 <section page="inc/process_element/process_section2.php" class="process-style-two">
     <div class="auto-container">
         <div class="inner-container">
             <div class="sec-title centred">
                 <span class="top-title">How We Work</span>
                 <h2>Our Plan & Working Style</h2>
             </div>
             <div class="row clearfix">
                 <?php
                    // 定义每个步骤的数据
                    $steps = [
                        [
                            'number' => '01',
                            'title' => 'Application Screening & Scheduling',
                            'description' => 'Indignation and dislike men who are so beguiled and demoralized.',
                            'icon' => 'assets/images/icons/icon-48.png',
                            'link' => 'index-3.html'
                        ],
                        [
                            'number' => '02',
                            'title' => 'Employee On-Boarding Checklist',
                            'description' => 'Desire that they cannot foresee the pain and trouble that are bound.',
                            'icon' => 'assets/images/icons/icon-49.png',
                            'link' => 'index-3.html'
                        ],
                        [
                            'number' => '03',
                            'title' => 'Take Care of Employee’s Benefits',
                            'description' => 'Frequently occur that pleasures have to be repudiated and annoyances.',
                            'icon' => 'assets/images/icons/icon-50.png',
                            'link' => 'index-3.html'
                        ]
                    ];

                    // 遍历并生成每个步骤的HTML
                    foreach ($steps as $step) {
                        $number = $step['number'];
                        $title = $step['title'];
                        $description = $step['description'];
                        $icon = $step['icon'];
                        $link = $step['link'];
                    ?>
                     <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                         <div class="single-item">
                             <div class="inner-box">
                                 <span>Step</span>
                                 <h2><?= $number ?>...</h2>
                                 <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                 <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                 <p><?= $description ?></p>
                                 <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More Details</a></div>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
             </div>

         </div>
     </div>
 </section>
 <!-- process-style-two end -->