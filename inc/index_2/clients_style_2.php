<!-- clients-style-two -->
<?php
$clients = [
    ['image' => 'assets/images/clients/clients-logo-7.png', 'link' => 'index.html'],
    ['image' => 'assets/images/clients/clients-logo-8.png', 'link' => 'index.html'],
    ['image' => 'assets/images/clients/clients-logo-9.png', 'link' => 'index.html'],
    ['image' => 'assets/images/clients/clients-logo-10.png', 'link' => 'index.html'],
    ['image' => 'assets/images/clients/clients-logo-11.png', 'link' => 'index.html'],
    ['image' => 'assets/images/clients/clients-logo-12.png', 'link' => 'index.html'],
];
?>

<section page="inc/index_2/clients_style_2.php" class="clients-style-two" style="background-image: url(assets/images/background/clients-1.jpg);">
    <div class="auto-container">
        <div class="title-inner centred">
            <h2>Need of Highly Qualified HR Personnel or Employment Opportunities</h2>
            <div class="btn-box">
                <a href="index-2.html" class="btn-one">Hire</a>
                <a href="index-2.html" class="btn-two">Apply</a>
            </div>
        </div>
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <?php foreach ($clients as $item) {
                $item_image = $item['image'];
                $item_link = $item['link'];
            ?>
                <figure class="clients-logo-box">
                    <a href="<?= $item_link ?>"><img src="<?= $item_image ?>" alt=""></a>
                </figure>
            <?php } ?>
        </div>

    </div>
</section>
<!-- clients-style-two end -->