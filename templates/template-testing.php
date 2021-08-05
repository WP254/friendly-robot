<?php
/*
Template Name: New Art Request
*/

get_header(); ?>

<div id="main-content">

<section class="rs-container">
        
    </section>

    <section class="main-content home-content">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="mc-wrapper">
                        <?php the_content();?>
                        <?php if( have_rows('solutions_section') ):?>
                        <ul class="solutions">
                            <?php while ( have_rows('solutions_section') ) : the_row();?>
                            <li><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('icon');?>" alt="" /> <h3><?php the_sub_field('name');?></h3></a></li>
                            <?php endwhile;?>
                        </ul>
                        <?php endif;?>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
            </div>
        </div>
    </section>
    
    <section class="products-section white">
        <div class="container">
            <div class="products">
                <?php if( get_field('products_section') ):?>
                    <?php the_field('products_section');?>
                <?php endif;?>
                
                <?php if( have_rows('products') ):?>
                <ul class="products">
                    <?php while ( have_rows('products') ) : the_row();?>
                    <li><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('icon');?>" alt="" /><br><div style="margin-top: 14px; font-weight: 500; font-size: 18px;"><?php the_sub_field('caption');?></div></a></li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            </div>
        </div>
        
        <div class="border"><img src="<?php bloginfo('template_directory');?>/images/logo-small.png" alt="" /></div>
        
        <div class="client-section">
            <div class="container">
                <div class="clients">
                    <?php the_field('customers_section');?>
                    <?php if( have_rows('customers') ):?>
                    <div id="owl-demo" class="owl-carousel">
                        <?php while ( have_rows('customers') ) : the_row();?>
                        <div class="item"><img src="<?php the_sub_field('icon');?>" alt="" /></div>
                        <?php endwhile;?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonial-section off-white">
        <div class="container">
            <div class="testimonial">
                <div class="img">
                    <img src="<?php bloginfo('template_directory');?>/images/icon-quote.png" alt="" />
                </div>
                <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 1,
                        'post_status' => 'publish',
                        'order_by' => 'DESC',
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="quote">
                            <?php the_content();?>
                        </div>
                        <div class="author">
                            <?php the_title();?><br />
                            <?php the_field('position');?>, <?php the_field('company');?>
                        </div>
                    <?php endwhile;?>
                <?php endif; wp_reset_postdata();?>
                <a class="more" href="<?php bloginfo('url');?>/telematics-blog/customer-success/">See More Testimonials</a>
            </div>
        </div>
    </section>
    
    
    <section class="about-section white">
        <div class="container">
            <div class="about">
                <?php if( get_field('about_section') ):?>
                    <?php the_field('about_section');?>
                <?php endif;?>
            </div>
        </div>
    </section>

