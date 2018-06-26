<?php get_header(); ?>

    <!-- Inner page heading start from here -->
    <section id="inner-title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="inner-title-bar-box text-center">
                        <h2>Portfolio</h2>
                        <p><a href="<?php echo get_option('home'); ?>">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Portfolio</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Section -->
    <section class="portfolio-area portfolio-two-area" id="work">
        <div class="container-fluid">
            <div class="row">
                <div class="portfolio-col">
                    <!-- Filter Nav -->
                    <ul class="portfolio-nav">
                        <li data-filter="all"> All </li>
                        <li data-filter="boring-machine"> Boring Machine </li>
                        <li data-filter="coal-roadheader"> Coal Roadheader </li>
                        <li data-filter="crushing-plant"> Crushing Plant </li>
                        <li data-filter="mill-machine"> Mill Machine </li>
                        <li data-filter="mining-equipment"> Mining Equipment </li>
                        <li data-filter="mobile-crusher"> Mobile Crusher </li>
                        <li data-filter="other-equipment"> Other Equipment </li>
                        <li data-filter="sand-making-machine"> Sand Making Machine </li>
                    </ul>
                    <!-- Filter Content -->
                    <div class="filtr-container">
                    <?php query_posts(array('category_name' => 'Products')); while(have_posts()): the_post(); ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="<?php $categories = get_the_category();foreach ($categories as $category ) {echo $category->slug;}?>" data-sort="value">
                            <div class="box">
                                <?php the_post_thumbnail();?>
                                <div class="box-content">
                                    <div class="content-inner">
                                        <h3 class="title"><?php the_title();?></h3>
                                        <ul class="icon">
                                            <li><a class="gallery" href="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
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