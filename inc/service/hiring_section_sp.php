  <!-- hiring-section -->
  <section page="inc/service/hiring_section_sp.php" class="hiring-section">
      <div class="image-layer">
          <figure class="image-1"><img src="assets/images/resource/hiring-1.png" alt=""></figure>
          <figure class="image-2"><img src="assets/images/resource/hiring-2.png" alt=""></figure>
      </div>
      <div class="outer-container clearfix">
          <?php
            // 列表数据
            $sections = [
                [
                    'icon' => 'flaticon-factory',
                    'title' => 'Industries Hiring',
                    'description' => 'Find fault with a man who chooses to enjoy a pleasure that has no annoying consequences.',
                    'link' => 'service.html',
                    'link_text' => 'Industries'
                ],
                [
                    'icon' => 'flaticon-working-man',
                    'title' => 'Professions Hiring',
                    'description' => 'Chooses to enjoy a pleasure that has no annoying one who avoids a pain that produces.',
                    'link' => 'service.html',
                    'link_text' => 'Professions'
                ]
            ];

            // 遍历并生成每一列
            foreach ($sections as $section) {
            ?>
              <div class="left-column pull-left clearfix">
                  <div class="inner-box pull-right">
                      <div class="icon-box"><i class="<?= $section['icon'] ?>"></i></div>
                      <h2><?= $section['title'] ?></h2>
                      <p><?= $section['description'] ?></p>
                      <a href="<?= $section['link'] ?>"><?= $section['link_text'] ?></a>
                  </div>
              </div>
          <?php
            }
            ?>
      </div>

  </section>
  <!-- hiring-section end -->