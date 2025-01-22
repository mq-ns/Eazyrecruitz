<!-- service-details -->
<section page="inc/executive_search/es_service_details.php" class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-one">
                        <div class="sec-title">
                            <span class="top-title">Executive Search</span>
                            <h2>Understanding Your HR Needs Better</h2>
                        </div>
                        <figure class="image-box"><img src="assets/images/service/details-1.jpg" alt=""></figure>
                        <div class="text">
                            <p>So blinded by desire, that they cannot foresee the pain and trouble that are bound to
                                ensue; and equaly blame belongs to those who fail in their duty through weakness of will
                                which is the same as saying through shrinking from toil and pain.</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment.</p>
                        </div>
                    </div>
                    <div class="content-two">
                        <?php
                        $roles = [
                            [
                                'number' => '01',
                                'title' => 'Administration Roles',
                                'link' => 'temprory-staffing.php',
                                'icon' => 'flaticon-businessman-1',
                                'list_title' => 'Roles',
                                'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry'],
                            ],
                            [
                                'number' => '02',
                                'title' => 'Human Resources Roles',
                                'link' => 'temprory-staffing.php',
                                'icon' => 'flaticon-human-resources',
                                'list_title' => 'Roles',
                                'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry'],
                            ],
                            [
                                'number' => '03',
                                'title' => 'Customer Support Roles',
                                'link' => 'temprory-staffing.php',
                                'icon' => 'flaticon-customer-service',
                                'list_title' => 'Roles',
                                'roles' => ['Office Coordinator', 'Receptionist', 'Facilities', 'Data Entry'],
                            ],
                        ];
                        ?>

                        <div class="inner-box clearfix">
                            <?php foreach ($roles as $role){ ?>
                                <?php
                                // 提前赋值
                                $number = $role['number'];
                                $title = $role['title'];
                                $link = $role['link'];
                                $icon = $role['icon'];
                                $list_title = $role['list_title'];
                                $role_list = $role['roles'];
                                ?>
                                <div class="single-column">
                                    <div class="content-box">
                                        <h5><?= $number ?></h5>
                                        <h3><?= $title ?></h3>
                                        <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                        <div class="icon-box"><i class="<?= $icon ?>"></i></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box"><i class="<?= $icon ?>"></i></div>
                                        <h5><?= $list_title ?></h5>
                                        <ul class="list clearfix">
                                            <?php foreach ($role_list as $item){ ?>
                                                <li>> <?= $item ?></li>
                                            <?php } ?>
                                        </ul>
                                        <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More
                                                Details</a></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="content-three">
                        <div class="upper-box">
                            <h3>Finding You The Leaders Of Tomorrow</h3>
                            <p>Trouble that are bound to ensue; and equaly blame belongs those who fail in their duty
                                through weakness of will which is the same as saying through shrinking from toil and
                                pain.</p>
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
                                    $tabs = [
                                        [
                                            'id' => 'tab-1',
                                            'active' => true,
                                            'image' => 'assets/images/service/details-2.jpg',
                                            'title' => 'Short Term Hiring',
                                            'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                            'link' => 'temprory-staffing.php',
                                        ],
                                        [
                                            'id' => 'tab-2',
                                            'active' => false,
                                            'image' => 'assets/images/service/details-2.jpg',
                                            'title' => 'Last Minute Hiring',
                                            'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                            'link' => 'temprory-staffing.php',
                                        ],
                                        [
                                            'id' => 'tab-3',
                                            'active' => false,
                                            'image' => 'assets/images/service/details-2.jpg',
                                            'title' => 'Immediate Hiring',
                                            'description' => 'Many variations of passage of lorem Ipsum available but the majority have suffered alterations in some form injected humour, or randomised words slightly.',
                                            'link' => 'temprory-staffing.php',
                                        ],
                                    ];
                                    ?>

                                    <div class="tabs-content">
                                        <?php foreach ($tabs as $tab){ ?>
                                            <?php
                                            // 提前赋值
                                            $id = $tab['id'];
                                            $active_class = $tab['active'] ? 'active-tab' : '';
                                            $image = $tab['image'];
                                            $title = $tab['title'];
                                            $description = $tab['description'];
                                            $link = $tab['link'];
                                            ?>
                                            <div class="tab <?= $active_class ?>" id="<?= $id ?>">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                                                    <div class="text">
                                                        <h3><?= $title ?></h3>
                                                        <p><?= $description ?></p>
                                                        <a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More
                                                            Details</a>
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
                            <p>Trouble that are bound to ensue; and equaly blame belongs those who fail in their duty
                                through weakness of will which is the same as saying through shrinking from toil and
                                pain.</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <?php
                                    $listItems = [
                                        [
                                            'icon' => 'flaticon-short-tie',
                                            'title' => 'Qualified Candidates',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                        [
                                            'icon' => 'flaticon-money-bag',
                                            'title' => 'Save Your Money',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                        [
                                            'icon' => 'flaticon-google-maps',
                                            'title' => 'Broad Network',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                    ];
                                    ?>

                                    <ul class="list-item clearfix">
                                        <?php foreach ($listItems as $item){ ?>
                                            <?php
                                            // 提前赋值
                                            $icon = $item['icon'];
                                            $title = $item['title'];
                                            $description = $item['description'];
                                            ?>
                                            <li>
                                                <div class="icon-box"><i class="<?= $icon ?>"></i></div>
                                                <h5><?= $title ?></h5>
                                                <div class="more-content">
                                                    <div class="menu-icon"><i class="flaticon-menu"></i><i
                                                            class="flaticon-menu"></i></div>
                                                    <div class="text">
                                                        <p><?= $description ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <?php
                                    $listItems = [
                                        [
                                            'icon' => 'flaticon-hourglass',
                                            'title' => 'Save Your Time',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                        [
                                            'icon' => 'flaticon-lightbulb',
                                            'title' => 'Increase Flexibility',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                        [
                                            'icon' => 'flaticon-google-maps',
                                            'title' => 'Improve Productivity',
                                            'description' => 'Beguiled and demoralized by the charms of pleasure of the moment.',
                                        ],
                                    ];
                                    ?>

                                    <ul class="list-item clearfix">
                                        <?php foreach ($listItems as $item){ ?>
                                            <?php
                                            // 提前赋值
                                            $icon = $item['icon'];
                                            $title = $item['title'];
                                            $description = $item['description'];
                                            ?>
                                            <li>
                                                <div class="icon-box"><i class="<?= $icon ?>"></i></div>
                                                <h5><?= $title ?></h5>
                                                <div class="more-content">
                                                    <div class="menu-icon"><i class="flaticon-menu"></i><i
                                                            class="flaticon-menu"></i></div>
                                                    <div class="text">
                                                        <p><?= $description ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-five">
                        <div class="upper-box">
                            <h3>Our Latest Projects</h3>
                        </div>
                        <?php
                        $projects = [
                            [
                                'image' => 'assets/images/project/project-10.jpg',
                                'category' => '@ Presentation',
                                'title' => 'Helping Bigbasket Scale Up',
                                'link' => 'temprory-staffing.php',
                            ],
                            [
                                'image' => 'assets/images/project/project-11.jpg',
                                'category' => '@ Presentation',
                                'title' => 'Helping Bigbasket Scale Up',
                                'link' => 'temprory-staffing.php',
                            ],
                        ];
                        ?>

                        <div class="latest-project-carousel owl-carousel owl-theme owl-dots-none">
                            <?php foreach ($projects as $project){ ?>
                                <?php
                                // 提前赋值
                                $image = $project['image'];
                                $category = $project['category'];
                                $title = $project['title'];
                                $link = $project['link'];
                                ?>
                                <div class="project-block-two">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <span><?= $category ?></span>
                                                <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                            </div>
                                            <div class="link"><a href="<?= $link ?>"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
                            <li><a href="payrolling.php">Payrolling</a></li>
                            <li><a href="training.php">Training</a></li>
                            <li><a href="executive-search.php" class="active">Executive Search</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget recruitment-widget">
                        <div class="widget-content">
                            <div class="text">
                                <div class="pattern-layer"
                                    style="background-image: url(assets/images/shape/pattern-43.png);"></div>
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