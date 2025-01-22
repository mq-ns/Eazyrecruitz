 <!-- team-style-four -->
 <section page="inc/team/team_style_four.php" class="team-style-four bg-color-2 centred">
     <div class="auto-container">
         <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
             <?php
                // 团队成员数据
                $team_members = [
                    [
                        'image' => 'assets/images/team/team-11.jpg',
                        'name' => 'Garrett Barnie',
                        'designation' => 'Founder',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ],
                    [
                        'image' => 'assets/images/team/team-12.jpg',
                        'name' => 'Joel Lou',
                        'designation' => 'Consultant',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ],
                    [
                        'image' => 'assets/images/team/team-13.jpg',
                        'name' => 'Garrett Barnie',
                        'designation' => 'Consultant',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ],
                    [
                        'image' => 'assets/images/team/team-14.jpg',
                        'name' => 'Joel Lou',
                        'designation' => 'Consultant',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ],
                    [
                        'image' => 'assets/images/team/team-11.jpg',
                        'name' => 'Garrett Barnie',
                        'designation' => 'Founder',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ],
                    [
                        'image' => 'assets/images/team/team-12.jpg',
                        'name' => 'Joel Lou',
                        'designation' => 'Consultant',
                        'social_links' => [
                            'facebook' => 'index.html',
                            'twitter' => 'index.html',
                            'google_plus' => 'index.html',
                            'youtube' => 'index.html'
                        ]
                    ]
                ];

                // 遍历团队成员数据并生成HTML
                foreach ($team_members as $index => $item) {
                    // 提取每个团队成员的相关信息
                    $image = $item['image'];
                    $name = $item['name'];
                    $designation = $item['designation'];
                    $social_links = $item['social_links'];
                    $delay = $index * 300; // 每个项目的延迟时间
                ?>
                 <div class="team-block-one wow fadeInRight animated" data-wow-delay="<?= $delay ?>ms" data-wow-duration="1500ms">
                     <div class="inner-box">
                         <figure class="image-box">
                             <img src="<?= $image ?>" alt="<?= $name ?>">
                             <span class="singature">Our Champ</span>
                             <div class="share-box">
                                 <p><i class="fas fa-share-alt"></i>Share</p>
                                 <ul class="social-links clearfix">
                                     <?php foreach ($social_links as $platform => $link) { ?>
                                         <li><a href="<?= $link ?>"><i class="fab fa-<?= $platform ?>"></i></a></li>
                                     <?php } ?>
                                 </ul>
                             </div>
                         </figure>
                         <div class="lower-content">
                             <h3><a href="index.html"><?= $name ?></a></h3>
                             <span class="designation"><?= $designation ?></span>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- team-style-four end -->