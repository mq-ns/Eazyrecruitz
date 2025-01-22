 <!-- team-section -->
 <section page="inc/index/team_section1.php" class="team-section">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-9.png);"></div>
     <div class="auto-container">
         <div class="row clearfix">
             <div class="col-lg-6 col-md-12 col-sm-12 experience-column">
                 <div id="content_block_5">
                     <div class="content-box">
                         <div class="sec-title">
                             <span class="top-title">Team Behind Us</span>
                             <h2>Our Experience & Team</h2>
                         </div>
                         <div class="text">
                             <p>Obligations of business it will frequently occur that pleasures have to be repudiated & annoyances accepted the wise man therefore always hold in these matters to this principle of selection.</p>
                         </div>
                         <div class="progress-inner">
                             <div class="progress-box">
                                 <div class="bar">
                                     <div class="bar-inner count-bar" data-percent="52%">
                                         <div class="count-text">52%</div>
                                     </div>
                                 </div>
                                 <h6>Temporary</h6>
                             </div>
                             <div class="progress-box">
                                 <div class="bar">
                                     <div class="bar-inner count-bar" data-percent="78%">
                                         <div class="count-text">78%</div>
                                     </div>
                                 </div>
                                 <h6>Contract</h6>
                             </div>
                             <div class="progress-box">
                                 <div class="bar">
                                     <div class="bar-inner count-bar" data-percent="65%">
                                         <div class="count-text">65%</div>
                                     </div>
                                 </div>
                                 <h6>Direct Hire</h6>
                             </div>
                             <div class="progress-box">
                                 <div class="bar">
                                     <div class="bar-inner count-bar" data-percent="89%">
                                         <div class="count-text">89%</div>
                                     </div>
                                 </div>
                                 <h6>Payrolling</h6>
                             </div>
                         </div>
                         <div class="link"><a href="index.php"><i class="flaticon-right-arrow"></i>Meet All Team Members</a></div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                 <div class="row align-items-center clearfix">
                     <?php
                        $team_members = [
                            [
                                'image' => 'assets/images/team/team-1.jpg',
                                'name' => 'Garrett Barnie',
                                'designation' => 'Founder',
                                'social_links' => [
                                    'facebook' => 'index.php',
                                    'twitter' => 'index.php',
                                    'google_plus' => 'index.php',
                                    'youtube' => 'index.php',
                                ],
                            ],
                            [
                                'image' => 'assets/images/team/team-2.jpg',
                                'name' => 'Isaac Herman',
                                'designation' => 'VP, Finance',
                                'social_links' => [
                                    'facebook' => 'index.php',
                                    'twitter' => 'index.php',
                                    'google_plus' => 'index.php',
                                    'youtube' => 'index.php',
                                ],
                            ],
                        ];
                        ?>

                     <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                         <?php foreach ($team_members as $member) {
                                $image = $member['image'];
                                $name = $member['name'];
                                $designation = $member['designation'];
                                $social_links = $member['social_links'];
                            ?>
                             <div class="team-block-one">
                                 <div class="inner-box">
                                     <figure class="image-box">
                                         <img src="<?= $image ?>" alt="">
                                         <span class="singature">Our Champ</span>
                                         <div class="share-box">
                                             <p><i class="fas fa-share-alt"></i>Share</p>
                                             <ul class="social-links clearfix">
                                                 <li><a href="<?= $social_links['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                 <li><a href="<?= $social_links['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                                                 <li><a href="<?= $social_links['google_plus'] ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                                 <li><a href="<?= $social_links['youtube'] ?>"><i class="fab fa-youtube"></i></a></li>
                                             </ul>
                                         </div>
                                     </figure>
                                     <div class="lower-content">
                                         <h3><a href="index.php"><?= $name ?></a></h3>
                                         <span class="designation"><?= $designation ?></span>
                                     </div>
                                 </div>
                             </div>
                         <?php } ?>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                         <div class="team-block-one">
                             <div class="inner-box">
                                 <figure class="image-box">
                                     <img src="assets/images/team/team-3.jpg" alt="">
                                     <span class="singature">Our Champ</span>
                                     <div class="share-box">
                                         <p><i class="fas fa-share-alt"></i>Share</p>
                                         <ul class="social-links clearfix">
                                             <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                             <li><a href="index.php"><i class="fab fa-youtube"></i></a></li>
                                         </ul>
                                     </div>
                                 </figure>
                                 <div class="lower-content">
                                     <h3><a href="index.php">Joel Lou</a></h3>
                                     <span class="designation">Senior Consultant</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- team-section end -->