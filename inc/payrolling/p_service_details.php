  <!-- service-details -->
  <section page="inc/payrolling/p_service_details.php" class="service-details">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                  <div class="service-details-content">
                      <div class="content-one">
                          <div class="sec-title">
                              <span class="top-title">Payrolling</span>
                              <h2>Understanding Your HR Needs Better</h2>
                          </div>
                          <figure class="image-box"><img src="assets/images/service/details-1.jpg" alt=""></figure>
                          <div class="text">
                              <p>So blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equaly blame belongs to those who fail in their duty through weakness of will which is the same as saying through shrinking from toil and pain.</p>
                              <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                          </div>
                      </div>
                      <div class="content-two">
                          <?php
                            // 定义每个角色的信息
                            $roles = [
                                [
                                    'id' => '01',
                                    'title' => 'Administration Roles',
                                    'icon_class' => 'flaticon-businessman-1',
                                    'link' => 'temprory-staffing.php',
                                    'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry']
                                ],
                                [
                                    'id' => '02',
                                    'title' => 'Human Resources Roles',
                                    'icon_class' => 'flaticon-human-resources',
                                    'link' => 'temprory-staffing.php',
                                    'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry']
                                ],
                                [
                                    'id' => '03',
                                    'title' => 'Customer Support Roles',
                                    'icon_class' => 'flaticon-customer-service',
                                    'link' => 'temprory-staffing.php',
                                    'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry']
                                ]
                            ];
                            ?>

                          <div class="inner-box clearfix">
                              <?php foreach ($roles as $role) {
                                    // 提前赋值
                                    $role_id = $role['id'];
                                    $role_title = $role['title'];
                                    $role_icon_class = $role['icon_class'];
                                    $role_link = $role['link'];
                                    $role_list = $role['roles'];
                                ?>
                                  <div class="single-column">
                                      <div class="content-box">
                                          <h5><?= $role_id; ?></h5>
                                          <h3><?= $role_title; ?></h3>
                                          <div class="link"><a href="<?= $role_link; ?>"><i class="flaticon-right-arrow"></i></a></div>
                                          <div class="icon-box"><i class="<?= $role_icon_class; ?>"></i></div>
                                      </div>
                                      <div class="overlay-box">
                                          <div class="icon-box"><i class="<?= $role_icon_class; ?>"></i></div>
                                          <h5>Roles</h5>
                                          <ul class="list clearfix">
                                              <?php foreach ($role_list as $role_item) { ?>
                                                  <li>> <?= $role_item; ?></li>
                                              <?php } ?>
                                          </ul>
                                          <div class="link"><a href="<?= $role_link; ?>"><i class="flaticon-right-arrow"></i>More Details</a></div>
                                      </div>
                                  </div>
                              <?php } ?>
                          </div>

                      </div>
                      <div class="content-three">
                          <div class="upper-box">
                              <h3>Finding You The Leaders Of Tomorrow</h3>
                              <p>Trouble that are bound to ensue; and equaly blame belongs those who fail in their duty through weakness of will which is the same as saying through shrinking from toil and pain.</p>
                          </div>
                          <div class="tabs-box">
                              <div class="row clearfix">
                                  <div class="col-lg-3 col-md-12 col-sm-12 btn-column">
                                      <div class="tab-btn-box">
                                          <ul class="tab-btns tab-buttons clearfix">
                                              <li class="tab-btn active-btn" data-tab="#tab-1">
                                                  <div class="icon-box"><i class="flaticon-checkmark"></i></div>
                                                  <h6>Short Term Hiring</h6>
                                              </li>
                                              <li class="tab-btn" data-tab="#tab-2">
                                                  <div class="icon-box"><i class="flaticon-checkmark"></i></div>
                                                  <h6>Last Minute Hiring</h6>
                                              </li>
                                              <li class="tab-btn" data-tab="#tab-3">
                                                  <div class="icon-box"><i class="flaticon-checkmark"></i></div>
                                                  <h6>Immediate Hiring</h6>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                                      <?php
                                        // 定义每个 tab 的数据
                                        $tabs = [
                                            [
                                                'id' => 'tab-1',
                                                'title' => 'Short Term Hiring',
                                                'image' => 'assets/images/service/details-2.jpg',
                                                'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                                'link' => 'temprory-staffing.php'
                                            ],
                                            [
                                                'id' => 'tab-2',
                                                'title' => 'Last Minute Hiring',
                                                'image' => 'assets/images/service/details-2.jpg',
                                                'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                                'link' => 'temprory-staffing.php'
                                            ],
                                            [
                                                'id' => 'tab-3',
                                                'title' => 'Immediate Hiring',
                                                'image' => 'assets/images/service/details-2.jpg',
                                                'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                                'link' => 'temprory-staffing.php'
                                            ]
                                        ];
                                        ?>

                                      <div class="tabs-content">
                                          <?php foreach ($tabs as $index => $item) {
                                                $item_id = $item['id'];
                                                $item_image = $item['image'];
                                                $item_title = $item['title'];
                                                $item_description = $item['description'];
                                                $item_link = $item['link'];
                                            ?>
                                              <div class="tab <?= $index === 0 ? 'active-tab' : '' ?>" id="<?= $item_id ?>">
                                                  <div class="inner-box">
                                                      <figure class="image-box"><img src="<?= $item_image ?>" alt=""></figure>
                                                      <div class="text">
                                                          <h3><?= $item_title ?></h3>
                                                          <p><?= $item_description ?></p>
                                                          <a href="<?= $item_link ?>"><i class="flaticon-right-arrow"></i>More Details</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          <?php } ?>
                                      </div>


                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="content-four">
                          <div class="upper-box">
                              <h3>Service Advantages</h3>
                              <p>Trouble that are bound to ensue; and equaly blame belongs those who fail in their duty through weakness of will which is the same as saying through shrinking from toil and pain.</p>
                          </div>
                          <div class="inner-box">
                              <div class="row clearfix">
                                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                                      <ul class="list-item clearfix">
                                          <li>
                                              <div class="icon-box"><i class="flaticon-short-tie"></i></div>
                                              <h5>Qualified Candidates</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="icon-box"><i class="flaticon-money-bag"></i></div>
                                              <h5>Save Your Money</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="icon-box"><i class="flaticon-google-maps"></i></div>
                                              <h5>Broad Network</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                                      <ul class="list-item clearfix">
                                          <li>
                                              <div class="icon-box"><i class="flaticon-hourglass"></i></div>
                                              <h5>Save Your Time</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="icon-box"><i class="flaticon-lightbulb"></i></div>
                                              <h5>Increase Flexibility</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="icon-box"><i class="flaticon-google-maps"></i></div>
                                              <h5>Improve Productivity</h5>
                                              <div class="more-content">
                                                  <div class="menu-icon"><i class="flaticon-menu"></i><i class="flaticon-menu"></i></div>
                                                  <div class="text">
                                                      <p>Beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="content-five">
                          <div class="upper-box">
                              <h3>Our Latest Projects</h3>
                          </div>
                          <div class="latest-project-carousel owl-carousel owl-theme owl-dots-none">
                              <div class="project-block-two">
                                  <div class="inner-box">
                                      <figure class="image-box"><img src="assets/images/project/project-10.jpg" alt=""></figure>
                                      <div class="content-box">
                                          <div class="text">
                                              <span>@ Presentation</span>
                                              <h3><a href="temprory-staffing.php">Helping Bigbasket Scale Up</a></h3>
                                          </div>
                                          <div class="link"><a href="temprory-staffing.php"><i class="flaticon-right-arrow-angle"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="project-block-two">
                                  <div class="inner-box">
                                      <figure class="image-box"><img src="assets/images/project/project-11.jpg" alt=""></figure>
                                      <div class="content-box">
                                          <div class="text">
                                              <span>@ Presentation</span>
                                              <h3><a href="temprory-staffing.php">Helping Bigbasket Scale Up</a></h3>
                                          </div>
                                          <div class="link"><a href="temprory-staffing.php"><i class="flaticon-right-arrow-angle"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                  <div class="service-sidebar">
                      <div class="sidebar-widget categories-widget">
                          <ul class="categories-list clearfix">
                              <li><a href="temprory-staffing.php">Temprory Staffing</a></li>
                              <li><a href="direct-hire.php">Direct Hire</a></li>
                              <li><a href="contract-hire.php">Contract to Hire</a></li>
                              <li><a href="payrolling.php" class="active">Payrolling</a></li>
                              <li><a href="training.php">Training</a></li>
                              <li><a href="executive-search.php">Executive Search</a></li>
                          </ul>
                      </div>
                      <div class="sidebar-widget recruitment-widget">
                          <div class="widget-content">
                              <div class="text">
                                  <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-43.png);"></div>
                                  <figure class="image-box"><img src="assets/images/resource/men-1.png" alt=""></figure>
                                  <h3>Recruitment Solutions for All Industries...</h3>
                              </div>
                              <div class="link">
                                  <a href="index.php"><i class="flaticon-right-arrow"></i>Place a Job Order</a>
                              </div>
                          </div>
                      </div>
                      <div class="sidebar-widget subscribe-widget">
                          <h3>Reach Out</h3>
                          <form action="index.php" method="post" class="subscribe-form">
                              <div class="form-group">
                                  <label>Your Name</label>
                                  <input type="text" name="name" placeholder="Mr/Mrs.xxxxx" required="">
                              </div>
                              <div class="form-group">
                                  <label>Email Address</label>
                                  <input type="email" name="name" placeholder="example@domain.com" required="">
                              </div>
                              <div class="form-group">
                                  <label>Interested In</label>
                                  <div class="select-box">
                                      <select class="wide">
                                          <option data-display="Hiring Employees">Hiring Employees</option>
                                          <option value="1">ATX Group</option>
                                          <option value="2">Ajax Company</option>
                                          <option value="3">Jhon Group</option>
                                          <option value="4">Nike Japan</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group message-btn">
                                  <button type="submit" class="theme-btn-one">Send Your Interest</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- service-details end -->