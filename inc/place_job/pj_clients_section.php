<!-- clients-section -->
<section page="inc/place_job/pj_clients_section.php" class="clients-section alternet-2">
    <div class="outer-container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <?php
            // 假设 $clients 数组结构包含客户的 logo 和 link 信息
            $clients = [
                ['logo' => 'assets/images/clients/clients-logo-13.png', 'link' => 'index.html'],
                ['logo' => 'assets/images/clients/clients-logo-14.png', 'link' => 'index.html'],
                ['logo' => 'assets/images/clients/clients-logo-15.png', 'link' => 'index.html'],
                ['logo' => 'assets/images/clients/clients-logo-16.png', 'link' => 'index.html'],
                ['logo' => 'assets/images/clients/clients-logo-17.png', 'link' => 'index.html'],
                ['logo' => 'assets/images/clients/clients-logo-18.png', 'link' => 'index.html']
            ];

            // 遍历客户端数据并输出HTML
            foreach ($clients as $client) {
                $client_logo = $client['logo'];
                $client_link = $client['link'];
            ?>
                <figure class="clients-logo-box">
                    <a href="<?= $client_link ?>"><img src="<?= $client_logo ?>" alt=""></a>
                    <span class="logo-title"><a href="<?= $client_link ?>">Visit Website</a></span>
                </figure>
            <?php } ?>
        </div>

    </div>
</section>
<!-- clients-section end -->