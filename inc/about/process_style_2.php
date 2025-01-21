<!-- process-style-two -->
<?php
$steps = [
    [
        'step_number' => '01...',
        'icon' => 'assets/images/icons/icon-51.png',
        'title' => 'Application Screening & Scheduling',
        'description' => 'Indignation and dislike men who are so beguiled and demoralized.',
        'link' => 'index-3.html'
    ],
    [
        'step_number' => '02...',
        'icon' => 'assets/images/icons/icon-52.png',
        'title' => 'Employee On-Boarding Checklist',
        'description' => 'Desire that they cannot foresee the pain and trouble that are bound.',
        'link' => 'index-3.html'
    ],
    [
        'step_number' => '03...',
        'icon' => 'assets/images/icons/icon-53.png',
        'title' => 'Take Care of Employee’s Benefits',
        'description' => 'Frequently occur that pleasures have to be repudiated and annoyances.',
        'link' => 'index-3.html'
    ],
];
?>

<section page="inc/about/process_style_2.php" class="process-style-two alternet-2">
    <div class="auto-container">
        <div class="inner-container">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-36.png);"></div>
            <div class="sec-title light centred">
                <span class="top-title">How We Work</span>
                <h2>Our Plan & Working Style</h2>
            </div>
            <div class="row clearfix">
                <?php foreach ($steps as $item): ?>
                    <?php
                    // 提前将数组中的字段赋值给局部变量
                    $step_number = $item['step_number'];
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $description = $item['description'];
                    $link = $item['link'];
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="inner-box">
                                <span>Step</span>
                                <h2><?= $step_number ?></h2>
                                <figure class="icon-box"><img src="<?= $icon ?>" alt=""></figure>
                                <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
                                <p><?= $description ?></p>
                                <div class="link"><a href="<?= $link ?>"><i class="flaticon-right-arrow"></i>More
                                        Details</a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
<!-- process-style-two end -->