<?php
/*
Template Name: Page-contact
*/
?>

<?php get_header();?>

    <!-- Inner page heading start from here -->
    <section id="inner-title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="inner-title-bar-box text-center">
                        <h2>Contact Us</h2>
                        <p><a href="index-one.html">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Contact</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="info-box">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>18/12 Maxlen Main Street, Poughkeepsie, New York</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="info-box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>(+01) 123 456 7890</p>
                            <p>(+01) 123 456 7891</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="info-box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>Yourmail@gamil.com</p>
                            <p>officemail@gamil.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-default">
                        <div class="row">
                            <div id="form-messages"></div>
                            <form id="ajax-contact" method="post" action="php/contact.php">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="numbar" name="subject" placeholder="Phone" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control textarea-hight-full" id="message" name="message" rows="6" placeholder="Message" required></textarea>
                                    <button class="btn btn-default simple-default-btn" type="submit">Sent Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-default">
                        <div id="map" style="width:100%; height:350px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>