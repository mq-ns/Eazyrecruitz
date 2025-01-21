<!-- contactinfo-section -->
<section page="inc/contact_form/contactinfo_section.php" class="contactinfo-section contact-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <h2>What are you looking for?</h2>
                            <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address *" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone *">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Hiring Employees">Hiring Employees</option>
                                               <option value="1">Category 01</option>
                                               <option value="2">Category 02</option>
                                               <option value="3">Category 03</option>
                                               <option value="4">Category 04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message ..."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                        <button class="theme-btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contactinfo-section end -->