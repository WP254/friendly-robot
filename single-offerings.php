<?php
   if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
   }
   ?>
<?php get_header(); ?>
<section id="content" class="full-width">
   <?php while ( have_posts() ) : ?>
   <?php the_post(); ?>
   <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="post-content">
         <div id="overview" class="overview-section">
            <div class="fusion-row">
               <div class="overview-section-holder">
                  <?php if( have_rows('overview_section') ): ?>
                  <?php while( have_rows('overview_section') ): the_row();
                     $section_layout = get_sub_field('section_layout');
                     $top_heading = get_sub_field('top_heading');
                     $section_heading = get_sub_field('section_heading');
                     $description = get_sub_field('description');
                     $image = get_sub_field('images');                
                     ?>
                     <?php
$images = get_sub_field( 'images' );
var_dump($image);
if ( $images ) : ?>
    <img src="<?php echo esc_url( $images['url'] ); ?>" alt="<?php echo esc_attr( $images['alt'] ); ?>" />
<?php endif; ?>
                  <?php if( $section_layout == 'Content-Image' ): ?>
                  <div class="overview-container content-image-section">
                     <div data-aos-duration="1000" data-aos="fade-right" class="overview-one-half overview-content">
                        <?php if($top_heading): ?>
                        <h4 style="color: <?php echo get_field('color_scheme'); ?>"><?php echo $top_heading; ?></h4>
                        <?php endif; ?>
                        <div class="heading-divider"></div>
                        <h3><?php echo $section_heading; ?></h3>
                        
                        <?php echo $description; ?>
                     </div>
                     <div data-aos-duration="1000" data-aos="fade-left" class="overview-one-half overview-image last-overview-column">
                        <div class="overview-imge-holder" style="background-image: url(<?php echo $image; ?>);"></div>
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php if( $section_layout == 'Image-Content' ): ?>
                  <div class="overview-container image-content-section">
                     <div data-aos-duration="1000" data-aos="fade-right" class="overview-one-half overview-image last-overview-column">
                        <div class="overview-imge-holder" style="background-image: url(<?php echo $image; ?>);"></div>
                     </div>
                     <div data-aos-duration="1000" data-aos="fade-left" class="overview-one-half overview-content">
                        <h4 style="color: <?php echo get_field('color_scheme'); ?>"><?php echo $top_heading; ?></h4>
                        <div class="heading-divider"></div>
                        <h3><?php echo $section_heading; ?></h3>
                        <?php echo $description; ?>
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <div id="photo-guide" class="photo-guide-container" style="background-color: <?php echo get_field('photo_guide_color'); ?>">
            <div class="fusion-row">
               <div class="photo-guide-container">
                  <div data-aos-duration="1000" data-aos="fade" class="single-photo-guide-container guide-content-container">
                     <div class="photo-guide-logo">
                        <svg id="Bonus-02" xmlns="http://www.w3.org/2000/svg" width="110.984" height="55.188" viewBox="0 0 110.984 55.188">
                           <g id="Bonus-02-2" data-name="Bonus-02" transform="translate(0 0)" fill="<?php echo get_field('photo_guide_color'); ?>">
                              <path id="Path_480" data-name="Path 480" d="M165.617,104.687a21.09,21.09,0,0,0-2.569-2.027l-2.868,4.319a16.481,16.481,0,0,1,1.91,1.539Z" transform="translate(-95.253 -99.155)"/>
                              <path id="Path_481" data-name="Path 481" d="M151.578,97.039a20.753,20.753,0,0,0-3.189-.709l-.759,5.149a16.611,16.611,0,0,1,2.431.554Z" transform="translate(-89.652 -96.33)"/>
                              <path id="Path_482" data-name="Path 482" d="M121.754,107.161,118.8,102.87a21.546,21.546,0,0,0-2.547,2.043l3.594,3.8a16.152,16.152,0,0,1,1.91-1.556Z" transform="translate(-75.647 -99.249)"/>
                              <path id="Path_483" data-name="Path 483" d="M135.471,101.519l-.792-5.149a23.182,23.182,0,0,0-3.189.742l1.556,4.983A16.564,16.564,0,0,1,135.471,101.519Z" transform="translate(-82.449 -96.348)"/>
                              <path id="Path_484" data-name="Path 484" d="M160.22,180.625l2.868,4.319a20.064,20.064,0,0,0,2.547-2.032l-3.527-3.832A15.916,15.916,0,0,1,160.22,180.625Z" transform="translate(-95.271 -133.261)"/>
                              <path id="Path_485" data-name="Path 485" d="M147.65,186.267l.747,5.149a20.74,20.74,0,0,0,3.178-.7l-1.506-4.983a17.325,17.325,0,0,1-2.42.537Z" transform="translate(-89.661 -136.229)"/>
                              <path id="Path_486" data-name="Path 486" d="M116.25,182.7a21,21,0,0,0,2.547,2.043l2.957-4.286a15.666,15.666,0,0,1-1.91-1.561Z" transform="translate(-75.647 -133.181)"/>
                              <path id="Path_487" data-name="Path 487" d="M131.49,190.626a22.414,22.414,0,0,0,3.189.748l.792-5.149a18.13,18.13,0,0,1-2.425-.554Z" transform="translate(-82.448 -136.202)"/>
                              <path id="Path_488" data-name="Path 488" d="M153.9,126.984H139.94V120.34H56.884v6.644H42.92l7.647,14.308-7.647,14.3H70.494v-6.644H126.33v6.644H153.9l-7.641-14.313ZM129.94,152v-3.051h10v-18.35h7.946l-5.714,10.7,5.714,10.7Zm-81,0,5.714-10.7-5.714-10.7H56.89v18.35h9.967V152Zm11.556-6.644V123.928h75.857v21.406Z" transform="translate(-42.92 -107.046)"/>
                              <path id="Path_489" data-name="Path 489" d="M92.961,148.073a6.207,6.207,0,0,0,3.538-.842,2.769,2.769,0,0,0,1.213-2.4,2.99,2.99,0,0,0-.554-1.86,3.189,3.189,0,0,0-1.595-1.074,2.852,2.852,0,0,0,1.578-2.613,2.63,2.63,0,0,0-1.163-2.254,5.687,5.687,0,0,0-3.322-.831H86.82v11.871Zm-3.411-9.806h2.735a2.769,2.769,0,0,1,1.539.349,1.266,1.266,0,0,1,0,2.093,2.735,2.735,0,0,1-1.539.36H89.55Zm0,4.8h3.206q2.215,0,2.215,1.478a1.224,1.224,0,0,1-.554,1.107,3.04,3.04,0,0,1-1.661.354H89.55Z" transform="translate(-62.512 -114.12)"/>
                              <path id="Path_490" data-name="Path 490" d="M112.072,147.327a7.353,7.353,0,0,0,6.644,0,6.058,6.058,0,0,0,0-10.686,7.353,7.353,0,0,0-6.644,0,5.9,5.9,0,0,0-2.32,2.215,6.307,6.307,0,0,0,0,6.3A5.875,5.875,0,0,0,112.072,147.327Zm.105-7.314a3.45,3.45,0,0,1,1.329-1.345,3.987,3.987,0,0,1,3.8,0,3.461,3.461,0,0,1,1.334,1.346,4.264,4.264,0,0,1,0,3.937A3.516,3.516,0,0,1,117.3,145.3a3.987,3.987,0,0,1-3.8,0,3.5,3.5,0,0,1-1.329-1.351A4.219,4.219,0,0,1,112.177,140.013Z" transform="translate(-72.371 -113.966)"/>
                              <path id="Path_491" data-name="Path 491" d="M138.823,140.872l5.925,7.209H147V136.21h-2.713v7.209l-5.9-7.209H136.11v11.871h2.713Z" transform="translate(-84.51 -114.128)"/>
                              <path id="Path_492" data-name="Path 492" d="M166.052,148.266a4.907,4.907,0,0,0,5.376-5.432V136.19h-2.713v6.539a3.627,3.627,0,0,1-.664,2.436,2.481,2.481,0,0,1-1.971.77q-2.641,0-2.641-3.189V136.2H160.67v6.644a5.446,5.446,0,0,0,1.417,4.025A5.388,5.388,0,0,0,166.052,148.266Z" transform="translate(-95.471 -114.119)"/>
                              <path id="Path_493" data-name="Path 493" d="M189.9,145.579a3.372,3.372,0,0,1-1.733.349,6.827,6.827,0,0,1-2.1-.343,6.433,6.433,0,0,1-1.816-.9l-.936,2.071a6.429,6.429,0,0,0,2.115.991,9.684,9.684,0,0,0,2.719.382,6.993,6.993,0,0,0,2.769-.493,3.776,3.776,0,0,0,1.7-1.334,3.206,3.206,0,0,0,.554-1.855,2.719,2.719,0,0,0-.615-1.866,3.665,3.665,0,0,0-1.484-1.019,19.424,19.424,0,0,0-2.215-.642,10.077,10.077,0,0,1-1.943-.587.969.969,0,0,1-.637-.908,1.141,1.141,0,0,1,.554-.986,3.079,3.079,0,0,1,1.705-.371,6.645,6.645,0,0,1,3.289.93l.847-2.082a6.334,6.334,0,0,0-1.9-.781,9.031,9.031,0,0,0-2.215-.271,6.821,6.821,0,0,0-2.769.493,3.771,3.771,0,0,0-1.689,1.329,3.322,3.322,0,0,0-.554,1.877,2.769,2.769,0,0,0,.62,1.9,3.594,3.594,0,0,0,1.484,1.035,20.634,20.634,0,0,0,2.215.642c.587.138,1.058.26,1.4.371a2.559,2.559,0,0,1,.847.454.875.875,0,0,1,.332.7A1.058,1.058,0,0,1,189.9,145.579Z" transform="translate(-105.576 -113.974)"/>
                           </g>
                        </svg>
                     </div>
                     <?php echo get_field('photo_guide_content'); ?>
                  </div>
                  <div data-aos-duration="1000" data-aos="fade" class="single-photo-guide-container guide-image-container">
                     <div class="guide-image-holder" style="background-image: url(<?php echo get_field('photo_guide_image'); ?>)"></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="why-us" class="why-us-section">
            <div class="fusion-row">
               <div class="why-us-intro-section">
                  <div class="why-us-icon"><img src="/wp-content/uploads/2019/12/Portraits-02.svg" /></div>
                  <h3 class="why-us-title"><?php echo get_field('why_us_section_title'); ?></h3>
                  <div class="small-heading"></div>
               </div>
            </div>
         </div>


         <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
         
        


         <div id="experiences" class="experiences-section">
            <div class="fusion-row">
               <div class="experiences-intro-section">
                  <div class="experiences-icon"><img src="/wp-content/uploads/2019/12/Group-330.svg" /></div>
                  <h3 class="experiences-title"><?php echo get_field('related_offerings_section_title'); ?></h3>
                  <div class="small-divider"></div>
               </div>
               <div class="experiences-columns-container experience-post-slider">
                  <?php 
                     $posts = get_field('related_offerings');
                     if( $posts ): ?>
                  <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                  <div data-aos-duration="1000" data-aos="fade-up" class="single-experience-column slick-slide">
                     <div class="experience-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url($p->ID); ?>)"></div>
                     <div class="experience-information">
                        <div class="experience-title"><?php echo get_the_title($p->ID); ?></div>
                        <div class="experience-read-more"><a href="<?php echo get_the_permalink($p->ID); ?>">Learn More <span class="moving-arrow">&#10230;</span></a></div>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>

         <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script>
            jQuery(document).ready(function($){
            // SLIDER
            //$('.experience-post-slider').slick({});
                
            $('.experience-post-slider').slick({
                dots: true,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                nextArrow: '<div class="slick-custom-arrow slick-custom-arrow-right"><img src="/wp-content/uploads/2021/04/next-arrow.png"></div>',
                prevArrow: '<div class="slick-custom-arrow slick-custom-arrow-left"><img src="/wp-content/uploads/2021/04/prev-arrow.png"></div>',
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                        autoplay: true,
                        dots: true,
                    }
                    }
                ]
            });

            });
        </script>

      </div>
   </div>
   </div>
   <?php endwhile; ?>
</section>
<?php get_footer(); ?>