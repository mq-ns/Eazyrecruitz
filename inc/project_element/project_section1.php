  <!-- project-section -->
  <section page="inc/project_element/project_section1.php" class="project-section sec-pad-2">
      <div class="auto-container">
          <div class="row clearfix">
              <?php
                // 定义每个项目的数据
                $projects = [
                    [
                        'image' => 'assets/images/project/project-18.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html'
                    ],
                    [
                        'image' => 'assets/images/project/project-19.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html'
                    ],
                    [
                        'image' => 'assets/images/project/project-20.jpg',
                        'title' => 'Helping Bigbasket Scale Up',
                        'link' => 'portfolio-2.html'
                    ]
                ];

                // 遍历并生成每个项目的HTML
                foreach ($projects as $project) {
                    $image = $project['image'];
                    $title = $project['title'];
                    $link = $project['link'];
                ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                      <div class="project-block-two">
                          <div class="inner-box">
                              <figure class="image-box"><img src="<?= $image ?>" alt=""></figure>
                              <div class="content-box">
                                  <div class="text">
                                      <span>@ Presentation</span>
                                      <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                  </div>
                                  <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow-angle"></i></a></div>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>

      </div>
  </section>
  <!-- project-section end -->