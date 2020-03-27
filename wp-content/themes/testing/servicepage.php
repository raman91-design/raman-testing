<?php
// Template Name: Services page
?>
<?php get_header(); ?>
<main id="content">
  <div class="services-page">
    <div class="container">
      <div class="services-header">
        <h2>Our Services</h2>
      </div>
    </div>
<?php
   $args = array(  
                'post_type' => 'services',
                'posts_per_page' =>6, 
                'orderby' => 'title', 
                'order' => 'ASC',
                'post_date' => 'true',
                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1
       ); 
          
$the_query = new WP_Query($args);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="service-box">
<?php

    the_post_thumbnail(); ?>
    <h4><a href="#"><?php the_title(); ?></a> </h4>
    <?php  the_content();?>
    <div class="service-category">
      <span><?php the_category();?></span>
    </div>
        <div class="service-author">
      <span><?php the_author();?></span>
    </div>


</div>

<?php endwhile;?>
<nav class="pagination">
        <?php
         $big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages
) );
          ?>
    </nav>

<?php wp_reset_postdata();?>
<!-- blog-section -->
 
</div>
</main> 

<div class="clearfix"></div>

<?php get_footer(); ?>

