<!-- history-section -->
<?php
$history = [
    [
        'year' => '2010',
        'title' => 'Fast Growing Company',
        'description' => 'To take a trivial example, which of us ever undertake laborius physical exercise except to obtain some advantage from it.',
        'image' => 'assets/images/resource/history-1.jpg'
    ],
    [
        'year' => '2014',
        'title' => '1000 Companies Tie-up',
        'description' => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and account.',
        'image' => 'assets/images/resource/history-2.jpg'
    ],
    [
        'year' => '2008',
        'title' => 'Started in Houston',
        'description' => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and account.',
        'image' => 'assets/images/resource/history-3.jpg'
    ],
    [
        'year' => '2011',
        'title' => 'Best Staffing Talent Award',
        'description' => 'To take a trivial example, which of us ever undertake laborius physical exercise except to obtain some advantage from it.',
        'image' => 'assets/images/resource/history-4.jpg'
    ],
];
?>

<section page="inc/about/history_section.php" class="history-section">
    <figure class="image-layer"><img src="assets/images/resource/history-1.png" alt=""></figure>
    <div class="auto-container">
        <div class="row clearfix">
            <!-- 第一列 - 标题部分 -->
            <div class="col-lg-4 col-md-12 col-sm-12 column">
                <div class="sec-title">
                    <span class="top-title">Our History</span>
                    <h2>Taking a Look Back of Our History</h2>
                </div>
            </div>

            <!-- 第二列 - 历史内容部分 -->
            <div class="col-lg-4 col-md-12 col-sm-12 column">
                <div class="inner-box">
                    <?php foreach ($history as $index => $item): ?>
                        <?php
                        // 提前赋值
                        $year = $item['year'];
                        $title = $item['title'];
                        $description = $item['description'];
                        $image = $item['image'];
                        $mrClass = $index % 2 == 1 ? 'mr-0' : ''; // 为部分内容添加 `mr-0` 样式
                        ?>
                        <figure class="image-box <?= $mrClass ?>">
                            <img src="<?= $image ?>" alt="">
                            <div class="dots-box"></div>
                        </figure>
                        <div class="content-box <?= $mrClass ?>">
                            <div class="dots-box <?= $index === 0 ? 'active' : '' ?>"></div>
                            <div class="year-box">
                                <h3><?= $year ?></h3>
                                <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-37.png);">
                                </div>
                                <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-38.png);">
                                </div>
                            </div>
                            <div class="text">
                                <h3><?= $title ?></h3>
                                <p><?= $description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- history-section end -->