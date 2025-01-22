 <!-- welcome-section -->
 <section page="inc/index/welcome_section1.php" class="welcome-section">
     <div class="auto-container">
         <div class="sec-title centred">
             <span class="top-title">Welcome to Eazy Recruitz</span>
             <h2>Modern Day Staffing Agency</h2>
             <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
         </div>
         <div class="row clearfix">
             <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                 <figure class="image-box js-tilt"><img src="assets/images/resource/welcome-1.png" alt=""></figure>
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                 <div id="content_block_1">
                     <div class="content-box">
                         <div class="tabs-box">
                             <div class="tab-btn-box">
                                 <ul class="tab-btns tab-buttons clearfix">
                                     <li class="tab-btn active-btn" data-tab="#tab-1">
                                         <i class="employ-icon flaticon-businessman"></i>
                                         <h5>For Employers</h5>
                                         <i class="arrow-icon flaticon-up-arrow-2"></i>
                                     </li>
                                     <li class="tab-btn" data-tab="#tab-2">
                                         <i class="employ-icon flaticon-employer"></i>
                                         <h5>For Employees</h5>
                                         <i class="arrow-icon flaticon-up-arrow-2"></i>
                                     </li>
                                 </ul>
                             </div>
                             <?php
                                $tabs = [
                                    [
                                        'id' => 'tab-1',
                                        'active' => true,
                                        'title' => 'Find the Employees',
                                        'heading' => 'Hire Your Next Candidate On Eazy Recruitz',
                                        'description' => 'To take a trivial example which of us ever undertakes laborious physical exercise except to obtain some advantage from it but who has any right to find fault with a man who chooses.',
                                        'list' => [
                                            [
                                                'icon' => 'assets/images/icons/icon-1.png',
                                                'text' => 'Understand Your Needs',
                                            ],
                                            [
                                                'icon' => 'assets/images/icons/icon-2.png',
                                                'text' => 'Find the Perfect Candidate',
                                            ],
                                        ],
                                        'link_text' => 'Your Required Talent',
                                        'link_url' => 'index.php',
                                    ],
                                    [
                                        'id' => 'tab-2',
                                        'active' => false,
                                        'title' => 'Find Your Right Place',
                                        'heading' => 'Explore Your Career Path With Eazy Recruitz',
                                        'description' => 'Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.',
                                        'list' => [
                                            [
                                                'icon' => 'assets/images/icons/icon-71.png',
                                                'text' => 'Executive Opportunities',
                                            ],
                                            [
                                                'icon' => 'assets/images/icons/icon-72.png',
                                                'text' => 'Non Excecutive Opportunities',
                                            ],
                                        ],
                                        'link_text' => 'Your Required Talent',
                                        'link_url' => 'index.php',
                                    ],
                                ];
                                ?>

                             <div class="tabs-content">
                                 <?php foreach ($tabs as $tab) {
                                        $tab_id = $tab['id'];
                                        $is_active = $tab['active'] ? 'active-tab' : '';
                                        $title = $tab['title'];
                                        $heading = $tab['heading'];
                                        $description = $tab['description'];
                                        $link_text = $tab['link_text'];
                                        $link_url = $tab['link_url'];
                                        $list_items = $tab['list'];
                                    ?>
                                     <div class="tab <?= $is_active ?>" id="<?= $tab_id ?>">
                                         <div class="inner-box">
                                             <h5><?= $title ?></h5>
                                             <h2><?= $heading ?></h2>
                                             <p><?= $description ?></p>
                                             <ul class="list clearfix">
                                                 <?php foreach ($list_items as $item) {
                                                        $icon = $item['icon'];
                                                        $text = $item['text'];
                                                    ?>
                                                     <li>
                                                         <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                                         <h4><?= $text ?></h4>
                                                     </li>
                                                 <?php } ?>
                                             </ul>
                                             <div class="link"><a href="<?= $link_url ?>"><i class="flaticon-right-arrow"></i><?= $link_text ?></a></div>
                                         </div>
                                     </div>
                                 <?php } ?>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- welcome-section end -->