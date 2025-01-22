  <!-- pricing-section -->
  <?php
    $tabsPricing = [
        [
            'id' => 'tab-15',
            'active' => true,
            'rows' => [
                [
                    'icon' => 'assets/images/icons/icon-35.png',
                    'title' => 'Temprory Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$5.5k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 10% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
                [
                    'icon' => 'assets/images/icons/icon-36.png',
                    'title' => 'Contract Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$6.5k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 12% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => true,
                ],
                [
                    'icon' => 'assets/images/icons/icon-37.png',
                    'title' => 'Direct Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$8.5k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 15% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
                [
                    'icon' => 'assets/images/icons/icon-38.png',
                    'title' => 'Training for Employee',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$12k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 20% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
            ],
        ],
        [
            'id' => 'tab-16',
            'active' => false,
            'rows' => [
                [
                    'icon' => 'assets/images/icons/icon-35.png',
                    'title' => 'Temprory Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$10k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 15% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
                [
                    'icon' => 'assets/images/icons/icon-36.png',
                    'title' => 'Contract Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$15k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 20% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => true,
                ],
                [
                    'icon' => 'assets/images/icons/icon-37.png',
                    'title' => 'Direct Recruitment',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$18k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 25% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
                [
                    'icon' => 'assets/images/icons/icon-38.png',
                    'title' => 'Training for Employee',
                    'salary' => 'Salary Level upto $50k',
                    'price' => '$20k',
                    'role' => ' / Role',
                    'fee' => 'Average Percentage Fee 30% / Candiadte',
                    'link' => 'index-2.php',
                    'popular' => false,
                ],
            ],
        ],
    ];
    ?>

  <section page="inc/index_2/pricing_section.php" class="pricing-section">
      <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-19.png);"></div>
      <div class="auto-container">
          <div class="sec-title">
              <span class="top-title">Our Pricing & Plans</span>
              <h2>Impressive Pricing & Plans</h2>
          </div>
          <div class="tabs-box">
              <div class="tab-btn-box">
                  <ul class="tab-btns tab-buttons clearfix">
                      <li class="tab-btn active-btn" data-tab="#tab-15">Standard</li>
                      <li class="tab-btn" data-tab="#tab-16">Premium</li>
                  </ul>
              </div>
              <div class="tabs-content">
                  <?php foreach ($tabsPricing as $tab) { ?>
                      <?php
                        $tabId = $tab['id'];
                        $activeClass = $tab['active'] ? 'active-tab' : '';
                        ?>
                      <div class="tab <?= $activeClass ?>" id="<?= $tabId ?>">
                          <div class="row clearfix">
                              <?php foreach ($tab['rows'] as $row) { ?>
                                  <?php
                                    $icon = $row['icon'];
                                    $title = $row['title'];
                                    $salary = $row['salary'];
                                    $price = $row['price'];
                                    $role = $row['role'];
                                    $fee = $row['fee'];
                                    $link = $row['link'];
                                    $popular = $row['popular'] ? 'popular' : '';
                                    ?>
                                  <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                                      <div class="pricing-block-one <?= $popular ?>">
                                          <div class="inner-box">
                                              <?php if ($row['popular']) { ?>
                                                  <div class="popular-tag">Popular</div>
                                              <?php } ?>
                                              <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                              <h3><?= $title ?></h3>
                                              <span class="text"><?= $salary ?></span>
                                              <h2><span class="symble">$</span><?= $price ?><span class="text"><?= $role ?></span></h2>
                                              <p><?= $fee ?></p>
                                              <a href="<?= $link ?>">Get Started</a>
                                          </div>
                                      </div>
                                  </div>
                              <?php } ?>
                          </div>
                      </div>
                  <?php } ?>
              </div>

          </div>
      </div>
  </section>
  <!-- pricing-section end -->