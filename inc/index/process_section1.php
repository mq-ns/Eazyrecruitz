  <!-- process-section -->
  <section page="inc/index/process_section1.php" class="process-section centred">
      <div class="auto-container">
          <div class="sec-title">
              <span class="top-title">How it’s Possible</span>
              <h2>Three Steps of Eazy Recruitz</h2>
              <p>Long established fact that a reader will be distracted by the <br>readable content of a page.</p>
          </div>
          <?php
            $process_steps = [
                [
                    'icon' => 'assets/images/icons/icon-16.png',
                    'number' => '01',
                    'title' => 'Initiation',
                    'description' => 'Choice is untrammelled when nothing prevents our being best.',
                    'link' => 'index.html',
                    'delay' => '00ms',
                ],
                [
                    'icon' => 'assets/images/icons/icon-17.png',
                    'number' => '02',
                    'title' => 'Scheduling',
                    'description' => 'Power of choiced is untrammelled and when nothing prevents.',
                    'link' => 'index.html',
                    'delay' => '300ms',
                ],
                [
                    'icon' => 'assets/images/icons/icon-18.png',
                    'number' => '03',
                    'title' => 'Contracts & Pay',
                    'description' => 'Every pleasure is to be welcomed pain avoided but in certain.',
                    'link' => 'index.html',
                    'delay' => '600ms',
                ],
            ];
            ?>

          <div class="row clearfix">
              <?php foreach ($process_steps as $step) {
                    $icon = $step['icon'];
                    $number = $step['number'];
                    $title = $step['title'];
                    $description = $step['description'];
                    $link = $step['link'];
                    $delay = $step['delay'];
                ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                      <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="<?= $delay ?>" data-wow-duration="1500ms">
                          <div class="inner-box">
                              <figure class="icon-box">
                                  <img src="<?= $icon ?>" alt="">
                                  <span><?= $number ?></span>
                                  <div class="anim-icon">
                                      <div class="icon-1" style="background-image: url(assets/images/shape/pattern-8.png);"></div>
                                      <div class="icon-2 rotate-me" style="background-image: url(assets/images/icons/anim-icon-2.png);"></div>
                                      <div class="icon-3 rotate-me" style="background-image: url(assets/images/icons/anim-icon-2.png);"></div>
                                  </div>
                              </figure>
                              <div class="lower-content">
                                  <h3><?= $title ?></h3>
                                  <p><?= $description ?></p>
                                  <a href="<?= $link ?>">More Details</a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>

      </div>
  </section>
  <!-- process-section end -->