<!-- findjob-section -->
<section page="inc/job_openings/findjob_section.php" class="findjob-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="top-title">Recently Posted Jobs</span>
            <h2>Find Your Job You Deserve It</h2>
            <p>Long established fact that a reader will be distracted by the <br>readable content of a page.</p>
        </div>
        <div class="search-inner">
            <form action="index.html" method="post" class="search-form">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <i class="flaticon-search"></i>
                            <input type="search" name="search-field" placeholder="Keyword (Title or Company)" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <i class="flaticon-place"></i>
                            <input type="search" name="search-field" placeholder="Location (City or State)" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <i class="flaticon-folder"></i>
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Desired Work Status">Desired Work Status</option>
                                    <option value="1">ATX Group</option>
                                    <option value="2">Ajax Company</option>
                                    <option value="3">Jhon Group</option>
                                    <option value="4">Nike Japan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn-one">Search Jobs</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
        $jobs = [
            [
                'type' => 'Direct Hire',
                'posted' => 'Posted 2 Hrs ago',
                'job_num' => '2022ER',
                'company_logo' => 'assets/images/resource/logo-1.png',
                'title' => 'Human Resources Manager',
                'location' => 'Sunnyvale, California',
                'salary' => '$44,000 - $55,000 Per Year',
                'experience' => '1-3 Yrs',
                'link' => 'job-openings.html',
            ],
            [
                'type' => 'Contract to Hire',
                'posted' => 'Posted 5 Hrs ago',
                'job_num' => '2021ER',
                'company_logo' => 'assets/images/resource/logo-2.png',
                'title' => 'Software Engineer',
                'location' => 'San Fransisco, California',
                'salary' => '$85,000 - $90,000 Per Year',
                'experience' => '3-5 Yrs',
                'link' => 'job-openings.html',
            ],
            [
                'type' => 'Contract',
                'posted' => 'Posted 1 Day ago',
                'job_num' => '2020ER',
                'company_logo' => 'assets/images/resource/logo-3.png',
                'title' => 'Administrative Coordinator',
                'location' => 'Boston, Massachusetts',
                'salary' => '$62,000 - $75,000 Per Year',
                'experience' => 'Freshers',
                'link' => 'job-openings.html',
            ],
            [
                'type' => 'Contract to Hire',
                'posted' => 'Posted 2 Days ago',
                'job_num' => '2018ER',
                'company_logo' => 'assets/images/resource/logo-4.png',
                'title' => 'Talent Acquisition Specialist',
                'location' => 'San Fransisco, California',
                'salary' => '$85,000 - $90,000 Per Year',
                'experience' => '3-5 Yrs',
                'link' => 'job-openings.html',
            ],
        ];

        ?>

        <div class="post-jobs">
            <?php foreach ($jobs as $job): ?>
                <div class="single-job-post">
                    <div class="job-header clearfix">
                        <ul class="info pull-left">
                            <li><a href="<?= $job['link'] ?>"><?= $job['type'] ?></a></li>
                            <li><i class="flaticon-clock"></i><?= $job['posted'] ?></li>
                        </ul>
                        <div class="number pull-right">
                            <p>Job Num: <?= $job['job_num'] ?></p>
                        </div>
                    </div>
                    <div class="job-inner clearfix">
                        <div class="job-title">
                            <figure class="company-logo"><img src="<?= $job['company_logo'] ?>" alt=""></figure>
                            <h3><?= $job['title'] ?></h3>
                            <p><i class="flaticon-place"></i><?= $job['location'] ?></p>
                        </div>
                        <div class="salary-box">
                            <span>Salary</span>
                            <p><?= $job['salary'] ?></p>
                        </div>
                        <div class="experience-box">
                            <span>Experience Need</span>
                            <p><?= $job['experience'] ?></p>
                        </div>
                        <div class="apply-btn">
                            <a href="<?= $job['link'] ?>">Apply</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- findjob-section end -->