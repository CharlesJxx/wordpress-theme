<?php get_header(); ?>

    <!-- Inner page heading start from here -->
    <section id="inner-title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="inner-title-bar-box text-center">
                        <h2><?php single_cat_title(); ?></h2>
                        <p><a href="<?php echo get_option('home'); ?>">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Blog</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Start -->
    <section class="blog-area">
        <div class="container">
            <div class="row">
            <?php $cat=get_the_category();$cat_id=$cat[0]->cat_ID;query_posts('order=asc&cat='.$cat_id);while (have_posts()):the_post();?>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="post-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="post-img">
                            <div class="image-hover-box">
                                <figure>
                                    <?php the_post_thumbnail();?>
                                </figure>
                            </div>
                        </div>
                        <ul class="post-bar">
                            <li>Mar 08, 2018</li>
                            <li><a href="#">Jon Robart</a></li>
                        </ul>
                        <h3 class="post-title"><a href="blog-single.html"><?php echo wp_trim_words( get_the_title(), 20 ); ?></a></h3>
                        <p class="post-description">
                        <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50,"……"); ?>
                        </p>
                        <a class="btn btn-default simple-btn" href="<?php the_permalink(); ?>" role="button">Read More</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
                
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <ul class="pagination mb25">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>