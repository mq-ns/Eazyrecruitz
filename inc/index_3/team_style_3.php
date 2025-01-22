 <!-- team-style-two -->
 <section page="inc/index_3/team_style_3.php" class="team-style-two">
     <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-33.png);"></div>
     <div class="auto-container">
         <div class="sec-title centred light">
             <span class="top-title">Meet Our Team</span>
             <h2>Team Behind Our Success</h2>
         </div>
         <?php
            $team_members = [
                [
                    'image' => 'assets/images/team/team-4.jpg',
                    'signature' => 'Our Champ',
                    'name' => 'Garrett Barnie',
                    'designation' => 'Founder',
                    'social_links' => [
                        'facebook' => 'index.html',
                        'twitter' => 'index.html',
                        'google' => 'index.html',
                        'youtube' => 'index.html',
                    ],
                ],
                [
                    'image' => 'assets/images/team/team-5.png',
                    'signature' => 'Our Champ',
                    'name' => 'Joel Lou',
                    'designation' => 'Consultant',
                    'social_links' => [
                        'facebook' => 'index.html',
                        'twitter' => 'index.html',
                        'google' => 'index.html',
                        'youtube' => 'index.html',
                    ],
                ],
                [
                    'image' => 'assets/images/team/team-6.jpg',
                    'signature' => 'Our Champ',
                    'name' => 'Garrett Barnie',
                    'designation' => 'Consultant',
                    'social_links' => [
                        'facebook' => 'index.html',
                        'twitter' => 'index.html',
                        'google' => 'index.html',
                        'youtube' => 'index.html',
                    ],
                ],
                [
                    'image' => 'assets/images/team/team-7.jpg',
                    'signature' => 'Our Champ',
                    'name' => 'Joel Lou',
                    'designation' => 'Consultant',
                    'social_links' => [
                        'facebook' => 'index.html',
                        'twitter' => 'index.html',
                        'google' => 'index.html',
                        'youtube' => 'index.html',
                    ],
                ],
            ];
            ?>
         <div class="four-item-carousel owl-carousel owl-theme owl-dot-style-one owl-nav-none">
             <?php foreach ($team_members as $member) {
                    $member_image = $member['image'];
                    $member_signature = $member['signature'];
                    $member_name = $member['name'];
                    $member_designation = $member['designation'];
                    $member_social_links = $member['social_links'];
                ?>
                 <div class="team-block-one">
                     <div class="inner-box">
                         <figure class="image-box">
                             <img src="<?= $member_image ?>" alt="<?= $member_name ?>">
                             <span class="singature"><?= $member_signature ?></span>
                             <div class="share-box">
                                 <p><i class="fas fa-share-alt"></i>Share</p>
                                 <ul class="social-links clearfix">
                                     <li><a href="<?= $member_social_links['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="<?= $member_social_links['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="<?= $member_social_links['google'] ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                     <li><a href="<?= $member_social_links['youtube'] ?>"><i class="fab fa-youtube"></i></a></li>
                                 </ul>
                             </div>
                         </figure>
                         <div class="lower-content">
                             <h3><a href="index.html"><?= $member_name ?></a></h3>
                             <span class="designation"><?= $member_designation ?></span>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- team-style-two end -->