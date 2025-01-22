 <!-- project-section -->
 <section page="inc/project_element/project_section2.php" class="project-section sec-pad-2">
     <div class="auto-container">
         <div class="row clearfix">
             <?php
                // 项目数据数组
                $projects = [
                    [
                        'image' => 'assets/images/project/project-34.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'index-2.php',
                        'lightbox_image' => 'assets/images/project/project-34.jpg'
                    ],
                    [
                        'image' => 'assets/images/project/project-35.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'index-2.php',
                        'lightbox_image' => 'assets/images/project/project-35.jpg'
                    ],
                    [
                        'image' => 'assets/images/project/project-36.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'index-2.php',
                        'lightbox_image' => 'assets/images/project/project-36.jpg'
                    ]
                ];

                // 遍历项目数据并动态生成HTML
                foreach ($projects as $project) {
                    $image = $project['image'];
                    $title = $project['title'];
                    $link = $project['link'];
                    $lightbox_image = $project['lightbox_image'];
                ?>
                 <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                     <div class="project-block-one">
                         <div class="inner-box">
                             <figure class="image-box">
                                 <div class="pattern-layer">
                                     <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-16.png);"></div>
                                     <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
                                 </div>
                                 <img src="<?= $image ?>" alt="">
                             </figure>
                             <div class="content-box">
                                 <div class="text">
                                     <span>@ Presentation</span>
                                     <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                 </div>
                                 <div class="view-btn"><a href="<?= $lightbox_image ?>" class="lightbox-image" data-fancybox="gallery">+</a></div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>
 <!-- project-section end -->