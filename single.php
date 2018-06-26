<?php get_header(); ?>


    <!-- Inner page heading start from here -->
    <section id="inner-title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="inner-title-bar-box text-center">
                        <h2><?php foreach((get_the_category()) as $category){echo $category->cat_name;}?></h2>
                        <p><a href="<?php echo get_option('home'); ?>">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Products</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Single Section -->
    <section class="blog-sec blog-single-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-box">
                        <div class="blog-img">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full');}?>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h4><?php the_title();?></h4>
                        <p><?php echo $post->post_content; ?></p>
                    </div>
                    <div class="row">
                        <div class="form-area">
                            <form id="contact_form" action="contact.php" method="post">
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="name" placeholder="Your name">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Write Comment Here"></textarea>
                                    <button class="btn btn-default simple-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php get_sidebar();?>
                
            </div>
        </div>
    </section>

<?php get_footer(); ?>