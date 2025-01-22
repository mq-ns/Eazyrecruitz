 <!-- clients-section -->
 <section page="inc/index/clients_section1.php" class="clients-section">
     <div class="outer-container">
         <?php
            $clients = [
                [
                    'logo' => 'assets/images/clients/clients-logo-1.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
                [
                    'logo' => 'assets/images/clients/clients-logo-2.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
                [
                    'logo' => 'assets/images/clients/clients-logo-3.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
                [
                    'logo' => 'assets/images/clients/clients-logo-4.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
                [
                    'logo' => 'assets/images/clients/clients-logo-5.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
                [
                    'logo' => 'assets/images/clients/clients-logo-6.png',
                    'link' => 'index.html',
                    'title' => 'Visit Website',
                ],
            ];
            ?>

         <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
             <?php foreach ($clients as $client) {
                    $logo = $client['logo'];
                    $link = $client['link'];
                    $title = $client['title'];
                ?>
                 <figure class="clients-logo-box">
                     <a href="<?= $link ?>"><img src="<?= $logo ?>" alt=""></a>
                     <span class="logo-title"><a href="<?= $link ?>"><?= $title ?></a></span>
                 </figure>
             <?php } ?>
         </div>

     </div>
 </section>
 <!-- clients-section end -->