<!-- service-style-two -->
<?php
$services = [
    [
        'icon' => 'assets/images/icons/icon-20.png',
        'title' => 'Temprory <br />Recruitment',
        'description' => 'Indignation and dislike men who are so beguiled demoralized.',
        'list' => [
            'Law Firms',
            'Customer Service',
            'Skilled Trades',
            'Shipping Companies',
            'Offices',
        ],
        'details_link' => 'temprory-staffing.php',
    ],
    [
        'icon' => 'assets/images/icons/icon-21.png',
        'title' => 'Direct <br />Recruitment',
        'description' => 'Desire that they cannot foresee the pain and trouble.',
        'list' => [
            'Law Firms',
            'Customer Service',
            'Skilled Trades',
            'Shipping Companies',
            'Offices',
        ],
        'details_link' => 'direct-hire.php',
        'extra_text' => 'To work with us? <a href="index-2.php">Let’s get started</a>',
    ],
    [
        'icon' => 'assets/images/icons/icon-22.png',
        'title' => 'Contract <br />Recruitment',
        'description' => 'Equal blame belongs to those who fail in their duty through.',
        'list' => [
            'Law Firms',
            'Customer Service',
            'Skilled Trades',
            'Shipping Companies',
            'Offices',
        ],
        'details_link' => 'contract-hire.php',
    ],
];
?>

<section page="inc/index_2/service_style_two.php" class="service-style-two">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="inner-container" style="background-image: url(assets/images/background/service-bg.jpg);">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-15.png);"></div>
            <div class="row clearfix">
                <?php foreach ($services as $service){ ?>
                    <?php
                    // 提前赋值
                    $icon = $service['icon'];
                    $title = $service['title'];
                    $description = $service['description'];
                    $list = $service['list'];
                    $details_link = $service['details_link'];
                    $extra_text = isset($service['extra_text']) ? $service['extra_text'] : '';
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="single-item">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                <h3><a href="<?= $details_link ?>"><?= $title ?></a></h3>
                                <p><?= $description ?></p>
                                <ul class="list clearfix">
                                    <?php foreach ($list as $listItem){ ?>
                                        <li><a href="index-2.php"><?= $listItem ?></a></li>
                                    <?php } ?>
                                </ul>
                                <div class="link"><a href="<?= $details_link ?>"><i class="flaticon-right-arrow"></i>More
                                        Details</a></div>
                                <?php if ($extra_text){ ?>
                                    <span class="text"><?= $extra_text ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- service-style-two end -->