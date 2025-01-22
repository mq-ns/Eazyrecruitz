<!-- clients-section -->
<?php
$clients = [
    ['logo' => 'assets/images/clients/clients-logo-13.png', 'link' => 'index.html', 'title' => 'Visit Website'],
    ['logo' => 'assets/images/clients/clients-logo-14.png', 'link' => 'index.html', 'title' => 'Visit Website'],
    ['logo' => 'assets/images/clients/clients-logo-15.png', 'link' => 'index.html', 'title' => 'Visit Website'],
    ['logo' => 'assets/images/clients/clients-logo-16.png', 'link' => 'index.html', 'title' => 'Visit Website'],
    ['logo' => 'assets/images/clients/clients-logo-17.png', 'link' => 'index.html', 'title' => 'Visit Website'],
    ['logo' => 'assets/images/clients/clients-logo-18.png', 'link' => 'index.html', 'title' => 'Visit Website'],
];
?>


<section page="inc/apply_now/clients_section.php" class="clients-section alternet-2">
    <div class="outer-container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <?php foreach ($clients as $item){ ?>
                <?php
                // 提前赋值
                $logo = $item['logo'];
                $link = $item['link'];
                $title = $item['title'];
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