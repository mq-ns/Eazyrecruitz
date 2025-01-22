 <!-- placejob-section -->
 <section page="inc/place_job/pj_placejob_section.php" class="placejob-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Request Needed Talent</span>
                    <h2>Tell Us About Your Hiring Needs</h2>
                    <p>We’re committed to fulfilling your unique hiring needs. Fll out the <br />form below & we’ll be in touch shortly</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-58.png" alt=""></figure>
                                <h2>Company Details</h2>
                                <p>Please fill out your company details here.</p>
                            </div>
                            <form action="place-job.php" method="post" class="job-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Company Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="website" placeholder="Website" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Industry*">Industry*</option>
                                               <option value="1">ATX Group</option>
                                               <option value="2">Ajax Company</option>
                                               <option value="3">Jhon Group</option>
                                               <option value="4">Nike Japan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="address" placeholder="Address (eg: No,Street,City,State,Zip)" required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-59.png" alt=""></figure>
                                <h2>Contact Person</h2>
                                <p>Please fill out your contact person details here.</p>
                            </div>
                            <form action="place-job.php" method="post" class="job-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="fname" placeholder="First Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="lname" placeholder="Last Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="address" placeholder="https://www.facebook.com/person.xxxx " required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                        <div class="form-inner mr-0">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-60.png" alt=""></figure>
                                <h2>Request Talent</h2>
                                <p>Here you can leave your job details & Submit your job post.</p>
                            </div>
                            <form action="place-job.php" method="post" class="job-form">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Specialisation">Specialisation</option>
                                                   <option value="1">ATX Group</option>
                                                   <option value="2">Ajax Company</option>
                                                   <option value="3">Jhon Group</option>
                                                   <option value="4">Nike Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Job Location" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="rate" placeholder="Pay Rate Range" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                            <input type="text" name="position" placeholder="Position hiring for" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Preferred Pronoun">Preferred Pronoun</option>
                                                   <option value="1">ATX Group</option>
                                                   <option value="2">Ajax Company</option>
                                                   <option value="3">Jhon Group</option>
                                                   <option value="4">Nike Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Number of Openings">Number of Openings</option>
                                                   <option value="1">ATX Group</option>
                                                   <option value="2">Ajax Company</option>
                                                   <option value="3">Jhon Group</option>
                                                   <option value="4">Nike Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Job Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn-one">Post Your Order</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- placejob-section end -->