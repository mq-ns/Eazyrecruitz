  <!-- industries-style-two -->
  <section page="inc/index_2/industries_style_two.php" class="industries-style-two">
      <div class="auto-container">
          <div class="sec-title centred">
              <span class="top-title">Our Service areas</span>
              <h2>Industries Hiring & Job Roles</h2>
              <p>Long established fact that a reader will be distracted by the <br />readable content of a page.</p>
          </div>
          <div class="tabs-box">
              <div class="tab-btn-one">
                  <ul class="tab-btns tab-buttons clearfix">
                      <li class="tab-btn active-btn" data-tab="#tab-1">
                          <figure class="icon-box"><img src="assets/images/icons/icon-23.png" alt=""></figure>
                          <h3>Industries of Expertise</h3>
                          <i class="flaticon-up-arrow-2"></i>
                      </li>
                      <li class="tab-btn" data-tab="#tab-2">
                          <figure class="icon-box"><img src="assets/images/icons/icon-24.png" alt=""></figure>
                          <h3>Job Roles We Cater to</h3>
                          <i class="flaticon-up-arrow-2"></i>
                      </li>
                  </ul>
              </div>
              <div class="tabs-content">
                  <div class="tab active-tab" id="tab-1">
                      <div class="tabs-box-2">
                          <div class="row clearfix">
                              <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                  <?php
                                    $tabs = [
                                        [
                                            'id' => 'tab-3',
                                            'image' => 'assets/images/resource/industries-7.jpg',
                                            'title' => 'Logistics & Services Industries',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => true,
                                        ],
                                        [
                                            'id' => 'tab-4',
                                            'image' => 'assets/images/resource/industries-8.jpg',
                                            'title' => 'Hospitality',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-5',
                                            'image' => 'assets/images/resource/industries-9.jpg',
                                            'title' => 'Manufacturing',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-6',
                                            'image' => 'assets/images/resource/industries-10.jpg',
                                            'title' => 'Education & Government',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-7',
                                            'image' => 'assets/images/resource/industries-11.jpg',
                                            'title' => 'Software/IT',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-8',
                                            'image' => 'assets/images/resource/industries-12.jpg',
                                            'title' => 'Front Line Support',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                    ];
                                    ?>

                                  <div class="tabs-content-2">
                                      <?php foreach ($tabs as $tab) { ?>
                                          <?php
                                            // 提前赋值
                                            $id = $tab['id'];
                                            $image = $tab['image'];
                                            $title = $tab['title'];
                                            $description = $tab['description'];
                                            $link = $tab['link'];
                                            $activeClass = $tab['active'] ? 'active-tab-2' : '';
                                            ?>
                                          <div class="tab-2 <?= $activeClass ?>" id="<?= $id ?>">
                                              <div class="inner-box">
                                                  <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                                                  <div class="content-box">
                                                      <div class="text">
                                                          <h2><?= $title ?></h2>
                                                          <span><?= $description ?></span>
                                                      </div>
                                                      <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow-angle"></i></a></div>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php } ?>
                                  </div>

                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-12 btn-column">
                                  <div class="tab-btn-two">
                                      <?php
                                        $tabButtons = [
                                            [
                                                'id' => '#tab-3',
                                                'icon' => 'assets/images/icons/icon-25.png',
                                                'title' => 'Logistics & Services',
                                                'active' => true,
                                            ],
                                            [
                                                'id' => '#tab-4',
                                                'icon' => 'assets/images/icons/icon-26.png',
                                                'title' => 'Hospitality',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-5',
                                                'icon' => 'assets/images/icons/icon-27.png',
                                                'title' => 'Manufacturing',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-6',
                                                'icon' => 'assets/images/icons/icon-28.png',
                                                'title' => 'Education & Government',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-7',
                                                'icon' => 'assets/images/icons/icon-29.png',
                                                'title' => 'Software/IT',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-8',
                                                'icon' => 'assets/images/icons/icon-30.png',
                                                'title' => 'Front Line Support',
                                                'active' => false,
                                            ],
                                        ];
                                        ?>

                                      <ul class="tab-btns tab-buttons-2 clearfix">
                                          <?php foreach ($tabButtons as $button) { ?>
                                              <?php
                                                // 提前赋值
                                                $id = $button['id'];
                                                $icon = $button['icon'];
                                                $title = $button['title'];
                                                $activeClass = $button['active'] ? 'active-btn-2' : '';
                                                ?>
                                              <li class="tab-btn-2 <?= $activeClass ?>" data-tab="<?= $id ?>">
                                                  <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                                  <h3><?= $title ?></h3>
                                              </li>
                                          <?php } ?>
                                      </ul>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab" id="tab-2">
                      <div class="tabs-box-2">
                          <div class="row clearfix">
                              <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                  <?php
                                    $tabsContent = [
                                        [
                                            'id' => 'tab-9',
                                            'image' => 'assets/images/resource/industries-7.jpg',
                                            'title' => 'Logistics & Services Industries',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => true,
                                        ],
                                        [
                                            'id' => 'tab-10',
                                            'image' => 'assets/images/resource/industries-8.jpg',
                                            'title' => 'Hospitality',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-11',
                                            'image' => 'assets/images/resource/industries-9.jpg',
                                            'title' => 'Manufacturing',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-12',
                                            'image' => 'assets/images/resource/industries-10.jpg',
                                            'title' => 'Education & Government',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-13',
                                            'image' => 'assets/images/resource/industries-11.jpg',
                                            'title' => 'Software/IT',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                        [
                                            'id' => 'tab-14',
                                            'image' => 'assets/images/resource/industries-12.jpg',
                                            'title' => 'Front Line Support',
                                            'description' => '26 Jobs in 10 Different Companies',
                                            'link' => 'index.html',
                                            'active' => false,
                                        ],
                                    ];
                                    ?>

                                  <div class="tabs-content-2">
                                      <?php foreach ($tabsContent as $tab) { ?>
                                          <?php
                                            // 提前赋值
                                            $id = $tab['id'];
                                            $image = $tab['image'];
                                            $title = $tab['title'];
                                            $description = $tab['description'];
                                            $link = $tab['link'];
                                            $activeClass = $tab['active'] ? 'active-tab-2' : '';
                                            ?>
                                          <div class="tab-2 <?= $activeClass ?>" id="<?= $id ?>">
                                              <div class="inner-box">
                                                  <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                                                  <div class="content-box">
                                                      <div class="text">
                                                          <h2><?= $title ?></h2>
                                                          <span><?= $description ?></span>
                                                      </div>
                                                      <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow-angle"></i></a></div>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php } ?>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-12 btn-column">
                                  <div class="tab-btn-two">
                                      <?php
                                        $tabButtons = [
                                            [
                                                'id' => '#tab-9',
                                                'icon' => 'assets/images/icons/icon-25.png',
                                                'title' => 'Logistics & Services',
                                                'active' => true,
                                            ],
                                            [
                                                'id' => '#tab-10',
                                                'icon' => 'assets/images/icons/icon-26.png',
                                                'title' => 'Hospitality',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-11',
                                                'icon' => 'assets/images/icons/icon-27.png',
                                                'title' => 'Manufacturing',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-12',
                                                'icon' => 'assets/images/icons/icon-28.png',
                                                'title' => 'Education & Government',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-13',
                                                'icon' => 'assets/images/icons/icon-29.png',
                                                'title' => 'Software/IT',
                                                'active' => false,
                                            ],
                                            [
                                                'id' => '#tab-14',
                                                'icon' => 'assets/images/icons/icon-30.png',
                                                'title' => 'Front Line Support',
                                                'active' => false,
                                            ],
                                        ];
                                        ?>
                                      <ul class="tab-btns tab-buttons-2 clearfix">
                                          <?php foreach ($tabButtons as $button) { ?>
                                              <?php
                                                // 提前赋值
                                                $id = $button['id'];
                                                $icon = $button['icon'];
                                                $title = $button['title'];
                                                $activeClass = $button['active'] ? 'active-btn-2' : '';
                                                ?>
                                              <li class="tab-btn-2 <?= $activeClass ?>" data-tab="<?= $id ?>">
                                                  <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                                  <h3><?= $title ?></h3>
                                              </li>
                                          <?php } ?>
                                      </ul>


                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- industries-style-two end -->