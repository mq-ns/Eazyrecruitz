  <!-- process-style-two -->
  <section page="inc/index_3/process_style3.php" class="process-style-two">
      <div class="auto-container">
          <div class="inner-container">
              <div class="sec-title centred">
                  <span class="top-title">How We Work</span>
                  <h2>Our Plan & Working Style</h2>
              </div>
              <?php
                $steps = [
                    [
                        'step' => '01...',
                        'icon' => 'assets/images/icons/icon-48.png',
                        'title' => 'Application Screening & Scheduling',
                        'link' => 'index-3.html',
                        'description' => 'Indignation and dislike men who are so beguiled and demoralized.',
                    ],
                    [
                        'step' => '02...',
                        'icon' => 'assets/images/icons/icon-49.png',
                        'title' => 'Employee On-Boarding Checklist',
                        'link' => 'index-3.html',
                        'description' => 'Desire that they cannot foresee the pain and trouble that are bound.',
                    ],
                    [
                        'step' => '03...',
                        'icon' => 'assets/images/icons/icon-50.png',
                        'title' => 'Take Care of Employee’s Benefits',
                        'link' => 'index-3.html',
                        'description' => 'Frequently occur that pleasures have to be repudiated and annoyances.',
                    ],
                ];
                ?>
              <div class="row clearfix">
                  <?php foreach ($steps as $item) {
                        $item_step = $item['step'];
                        $item_icon = $item['icon'];
                        $item_title = $item['title'];
                        $item_link = $item['link'];
                        $item_description = $item['description'];
                    ?>
                      <div class="col-lg-4 col-md-12 col-sm-12 single-column">
                          <div class="single-item">
                              <div class="inner-box">
                                  <span>Step</span>
                                  <h2><?= $item_step ?></h2>
                                  <figure class="icon-box"><img src="<?= $item_icon ?>" alt="<?= $item_title ?>"></figure>
                                  <h3><a href="<?= $item_link ?>"><?= $item_title ?></a></h3>
                                  <p><?= $item_description ?></p>
                                  <div class="link"><a href="<?= $item_link ?>"><i class="flaticon-right-arrow"></i>More Details</a></div>
                              </div>
                          </div>
                      </div>
                  <?php } ?>
              </div>

          </div>
      </div>
  </section>
  <!-- process-style-two end -->