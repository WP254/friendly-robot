<?php
/**
 * Template Name: Flexible Content Layout
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

<?php if( have_rows('equipo') ): while ( have_rows('equipo') ) : the_row();

                if( get_row_layout() == 'equipo-linha' ): 

                    $titulo = get_sub_field('titulo-equipo');
                    ?>
                    <h1 class="titulo-equipo"><?php echo $titulo;?></h1>
                    <?php 

                if( have_rows('pessoa')): while ( have_rows('pessoa')) : the_row();

                    $nombre = get_sub_field('nombre-pessoa');
                    $cargo = get_sub_field('cargo-pessoa');
                    $imagen = get_sub_field('imagen-equipo')['sizes']['small'];
                                        
                ?>

                

                <div class="container-pessoa">
                    <img src="<?php echo $imagen;?>" class="img-pessoa">                
                    <p><?php echo $nombre;?></p>
                    <p><?php echo $cargo;?></p>
                </div>

                    <?php endwhile;
                     endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
