<!-- clients-section -->
<section page="inc/index_3/clients_section3.php" class="clients-section alternet-2">
    <div class="outer-container">
        <?php
        $clients = [
            [
                'logo' => 'assets/images/clients/clients-logo-13.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
            [
                'logo' => 'assets/images/clients/clients-logo-14.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
            [
                'logo' => 'assets/images/clients/clients-logo-15.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
            [
                'logo' => 'assets/images/clients/clients-logo-16.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
            [
                'logo' => 'assets/images/clients/clients-logo-17.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
            [
                'logo' => 'assets/images/clients/clients-logo-18.png',
                'link' => 'index.html',
                'title' => 'Visit Website',
            ],
        ];
        ?>
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <?php foreach ($clients as $client) {
                $client_logo = $client['logo'];
                $client_link = $client['link'];
                $client_title = $client['title'];
            ?>
                <figure class="clients-logo-box">
                    <a href="<?= $client_link ?>"><img src="<?= $client_logo ?>" alt="Client Logo"></a>
                    <span class="logo-title"><a href="<?= $client_link ?>"><?= $client_title ?></a></span>
                </figure>
            <?php } ?>
        </div>

    </div>
</section>
<!-- clients-section end -->