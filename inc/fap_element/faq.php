<!-- faq-section -->
<?php
$accordionItems = [
    [
        'id' => '01',
        'title' => 'What Kind of Services Offer?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => false,
    ],
    [
        'id' => '02',
        'title' => 'How Do I Start Hiring?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => true,
    ],
    [
        'id' => '03',
        'title' => 'What is the Job Approval Process?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => false,
    ],
    [
        'id' => '04',
        'title' => 'Why is the Job I Posted Not Approved Yet?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => false,
    ],
    [
        'id' => '05',
        'title' => 'What is the Refund Policy?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => false,
    ],
    [
        'id' => '06',
        'title' => 'What is Contractual Staffing?',
        'content' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except obtain some advantage from it? But who has any right.',
        'active' => false,
    ],
];
?>

<section page="inc/fap_element/faq.php" class="faq-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                <div class="inner-box">
                    <ul class="accordion-box">
                        <?php foreach ($accordionItems as $item): ?>
                            <?php
                            // 提前赋值
                            $activeClass = $item['active'] ? 'active-block' : '';
                            $btnActiveClass = $item['active'] ? 'active' : '';
                            $contentActiveClass = $item['active'] ? 'current' : '';
                            $id = $item['id'];
                            $title = $item['title'];
                            $content = $item['content'];
                            ?>
                            <li class="accordion block <?= $activeClass ?>">
                                <div class="acc-btn <?= $btnActiveClass ?>">
                                    <div class="icon-outer"></div>
                                    <h5><?= $id ?>. <?= $title ?></h5>
                                </div>
                                <div class="acc-content <?= $contentActiveClass ?>">
                                    <div class="text">
                                        <p><?= $content ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->