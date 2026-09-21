<?php
$site = mango_site();
$sent = isset($_GET['sent']) && $_GET['sent'] === '1';
$sendError = isset($_GET['error']) && $_GET['error'] === '1';
?>
        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">Contact Mango Engineers</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="contact-us-area section-gap-equal">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-us-info">
                            <span class="pre-title">Admissions & Course Guidance</span>
                            <h2 class="heading-title">Talk to Mango Engineers</h2>
                            <p>Ask about course roadmaps, current batches, fees, classroom or online learning, projects and career preparation. Our team can help you choose the right next step.</p>

                            <ul class="address-list">
                                <li>
                                    <h5 class="title">Phone</h5>
                                    <p><a href="tel:<?= mango_e($site['phone_href']) ?>"><?= mango_e($site['phone_display']) ?></a></p>
                                </li>
                                <li>
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:<?= mango_e($site['email']) ?>"><?= mango_e($site['email']) ?></a></p>
                                </li>
                                <?php foreach ($site['branches'] as $branch): ?>
                                <li>
                                    <h5 class="title"><?= mango_e($branch['name']) ?></h5>
                                    <p><?= mango_e($branch['full_address']) ?></p>
                                    <p><a href="<?= mango_e($branch['map']) ?>" target="_blank" rel="noopener">Get directions</a></p>
                                </li>
                                <?php endforeach; ?>
                            </ul>

                            <ul class="social-share">
                                <li><a href="<?= mango_e($site['social']['facebook']) ?>" target="_blank" rel="noopener" aria-label="Mango Engineers on Facebook"><i class="icon-facebook"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['instagram']) ?>" target="_blank" rel="noopener" aria-label="Mango Engineers on Instagram"><i class="icon-instagram"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['linkedin']) ?>" target="_blank" rel="noopener" aria-label="Mango Engineers on LinkedIn"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['youtube']) ?>" target="_blank" rel="noopener" aria-label="Mango Engineers on YouTube"><i class="icon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="offset-xl-1 col-xl-6 col-lg-6">
                        <div class="contact-form form-style-2">
                            <div class="section-title">
                                <span class="pre-title">Request a Callback</span>
                                <h3 class="title">Tell Us What You Want to Learn</h3>
                                <p>Share your contact details and learning interest. We will use them only to respond to this enquiry.</p>
                            </div>

                            <?php if ($sent): ?>
                            <div class="alert alert-success" role="status">Thank you. Your enquiry has been sent to Mango Engineers.</div>
                            <?php elseif ($sendError): ?>
                            <div class="alert alert-danger" role="alert">We could not send the form right now. Please call <?= mango_e($site['phone_display']) ?> or email <?= mango_e($site['email']) ?>.</div>
                            <?php endif; ?>

                            <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="mail.php">
                                <div class="row row--10">
                                    <div class="form-group col-12">
                                        <label for="contact-name">Name *</label>
                                        <input type="text" name="contact-name" id="contact-name" placeholder="Your name" autocomplete="name" minlength="2" maxlength="80" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contact-phone">Phone *</label>
                                        <input type="tel" name="contact-phone" id="contact-phone" placeholder="+91 98XXXXXXXX" autocomplete="tel" maxlength="20" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contact-email">Email</label>
                                        <input type="email" name="contact-email" id="contact-email" placeholder="you@example.com" autocomplete="email" maxlength="120">
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="contact-interest">Course / learning interest *</label>
                                        <select name="contact-interest" id="contact-interest" required>
                                            <option value="">Choose an area</option>
                                            <option value="Programming">Programming</option>
                                            <option value="Full Stack Development">Full Stack Development</option>
                                            <option value="Data Analytics / Power BI">Data Analytics / Power BI</option>
                                            <option value="Data Science / AI / ML">Data Science / AI / ML</option>
                                            <option value="Cloud / DevOps">Cloud / DevOps</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Internship / Career Program">Internship / Career Program</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="contact-message">Message</label>
                                        <textarea name="contact-message" id="contact-message" cols="30" rows="4" maxlength="2000" placeholder="Tell us your goal, current skill level, preferred timing or any question."></textarea>
                                    </div>

                                    <div aria-hidden="true" style="position:absolute;left:-10000px;width:1px;height:1px;overflow:hidden;">
                                        <label for="website">Website</label>
                                        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                                    </div>

                                    <input type="hidden" name="contact-source" value="contact-us.html">

                                    <div class="form-group col-12">
                                        <label>
                                            <input type="checkbox" name="contact-consent" value="yes" required>
                                            I agree that Mango Engineers may use these details to respond to my enquiry. See the <a href="privacy-policy.html">Privacy Policy</a>.
                                        </label>
                                    </div>

                                    <div class="form-group col-12">
                                        <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">Send Enquiry <i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt--40">
                    <?php foreach ($site['branches'] as $branch): ?>
                    <div class="col-md-6">
                        <div class="features-box features-style-7 h-100">
                            <div class="content">
                                <h4 class="title"><?= mango_e($branch['name']) ?></h4>
                                <p><?= mango_e($branch['full_address']) ?></p>
                                <a href="<?= mango_e($branch['map']) ?>" class="edu-btn btn-border btn-small" target="_blank" rel="noopener">Open in Google Maps</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
