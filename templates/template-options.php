<?php
/**
 * Template Name: Option Page tempalate
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">





    <!--    footer section -->
    <footer class="footer-section">
        <?php if(is_page_template('blog-page.php')):?>
        <div class="container">
                <?php echo get_field('upper_footer','options');?>
        </div>
        <?php endif; ?>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-widget">
                            <div class="footer-logo"><img alt="" src="<?php echo get_field('footer_logo','options');?>"></div>
                            <div class="content">
                                <p><?php echo get_field('footer_description','options');?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-heading"><?php echo get_field('footer_second_widget_name','options');?></h3>
                            <div class="content">
                                <?php if( have_rows('footer_contact_list','options') ): ?>
                                <ul class="contact-list">
                                     <?php while( have_rows('footer_contact_list','options') ): the_row();?>
                                    <li><span class="material-icons"><?php echo get_sub_field('contact_icon_name','options');?></span> <span><a href="<?php echo get_sub_field('contact_link','options');?>"><?php echo get_sub_field('contact_label','options');?></a></span></li>
                                 <?php endwhile;?>
                                        </ul>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-heading"><?php echo get_field('footer_third_widgets_name','options');?></h3>
                            <div class="content">
                                <div class="row footer-menu-row">
                                    <div class="col-6">
                                        <?php if( have_rows('footer_link_left','options') ): ?>
                            
                                        <ul class="footer-menu">
                                            <?php while( have_rows('footer_link_left','options') ): the_row();?>
                                            <li>
                                                <a href="<?php echo get_sub_field('footer_menu_link','options');?>"><?php echo get_sub_field('footer_menu_label','options');?></a>
                                            </li>
                                            <?php endwhile;?>
                                        </ul>
                                    <?php endif; ?>
                                    </div>
                                    <div class="col-6">
                                         <?php if( have_rows('footer_link_right','options') ): ?>
                                        <ul class="footer-menu">
                                             <?php while( have_rows('footer_link_right','options') ): the_row();?>
                                            <li>
                                                <a href="<?php echo get_sub_field('footer_menu_link','options');?>"><?php echo get_sub_field('footer_menu_label','options');?></a>
                                            </li>
                                        <?php endwhile;?>
                                        </ul>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left text-center">
                    <span><?php echo get_field('footer_copyright','options');?></span>
                </div>
                <div class="col-md-6">
                    <?php if( have_rows('social_link','options') ): ?>
                    <ul class="social-link text-md-right text-center">
                        <?php while( have_rows('social_link','options') ): the_row();?>
                        <li>
                            <a href="<?php echo get_sub_field('social_icon_link','options');?>" target="_blank">
                            <img src="<?php echo get_sub_field('social_icon_img','options');?>" alt=""></a>
                        </li>
                   <?php endwhile;?>
                                        </ul>
                                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js">
    </script>
    <!-- <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'experlu-blogs' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'experlu-blogs' ), 'WordPress' );
                ?>
            </a>
            <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'experlu-blogs' ), 'experlu-blogs', '<a href="http://underscores.me/">Underscores.me</a>' );
                ?>
        </div>
    </footer> --><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
