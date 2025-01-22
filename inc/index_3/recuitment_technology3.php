  <!-- recruitment-technology -->
  <section page="inc/index_3/recuitment_technology3.php" class="recruitment-technology">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                  <figure class="image-box js-tilt clearfix"><img src="assets/images/resource/recruitment-1.png" alt=""></figure>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                  <div id="content_block_4">
                      <div class="content-box">
                          <div class="sec-title">
                              <span class="top-title">Recruitment technologies</span>
                              <h2>Solving Recruitment Using Technology</h2>
                              <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
                          </div>
                          <?php
                            $items = [
                                [
                                    'icon' => 'assets/images/icons/icon-7.png',
                                    'number' => '01',
                                    'title' => 'Sourcing the Best',
                                    'link' => 'index.html',
                                    'description' => 'All the lorem ipsum generators on the Internet tend.',
                                    'delay' => '00ms'
                                ],
                                [
                                    'icon' => 'assets/images/icons/icon-8.png',
                                    'number' => '02',
                                    'title' => 'Volume Hiring',
                                    'link' => 'index.html',
                                    'description' => 'On the other hand, we denounce with righteous.',
                                    'delay' => '300ms'
                                ],
                                [
                                    'icon' => 'assets/images/icons/icon-9.png',
                                    'number' => '03',
                                    'title' => 'Partners in Team Building',
                                    'link' => 'index.html',
                                    'description' => 'Man therefore always holds in these matters to this.',
                                    'delay' => '600ms'
                                ],
                            ];
                            ?>
                          <div class="inner-box">
                              <?php foreach ($items as $item) {
                                    $icon = $item['icon'];
                                    $number = $item['number'];
                                    $title = $item['title'];
                                    $link = $item['link'];
                                    $description = $item['description'];
                                    $delay = $item['delay'];
                                ?>
                                  <div class="single-item wow fadeInRight animated animated" data-wow-delay="<?= $delay ?>" data-wow-duration="1500ms">
                                      <div class="inner">
                                          <figure class="icon-box"><img src="<?= $icon ?>" alt="<?= $title ?>"></figure>
                                          <h3><span><?= $number ?></span><a href="<?= $link ?>"><?= $title ?><i class="flaticon-right-arrow"></i></a></h3>
                                          <p><?= $description ?></p>
                                      </div>
                                  </div>
                              <?php } ?>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- recruitment-technology end -->