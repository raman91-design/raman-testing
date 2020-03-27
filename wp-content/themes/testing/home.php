<?php
// Template Name: Home
?>
<?php get_header(); ?>
<main id="content">
 <div class="slider-section">
     <div class="carousel-wrap">
       <div class="owl-carousel" id="home">
       	<?php if( have_rows('slider') ): ?>
		<?php while( have_rows('slider') ): the_row(); ?>
	<?php $sliderimg = get_sub_field('slider_bg'); ?>
  <?php $sliderfirsttext =  get_sub_field('first-text'); ?>
   <?php $slidersecondtext =  get_sub_field('second-text'); ?>
    <?php $buttonlink =  get_sub_field('button-link'); ?>
     <?php $sliderbutton =  get_sub_field('shop-btn'); ?>
        <div class="item">
          <div class="slider1-bg" style="background-image: url('<?php echo $sliderimg; ?>');">
             <div class="slider-text">
             <?php
                        $a = 0;
                        if (!empty($sliderfirsttext)) { ?>
                        <h3><?php echo $sliderfirsttext; ?> </h3>
                     <?php }
                        ?>
              
               <?php
                        $a = 0;
                        if (!empty($slidersecondtext)) { ?>
                        <h1><?php echo $slidersecondtext; ?> </h1>
                     <?php }
                        ?>
                 <?php
                        $a = 0;
                        if (!empty($sliderbutton)) { ?>
                           <a href="<?php echo $buttonlink; ?>" class="btn">
               <span><?php echo $sliderbutton; ?> </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     <?php }
                        ?>
             
            </div>
           <!--  </div> -->
            
          </div>
        </div>
           <?php endwhile; ?>
             <?php endif; ?>
              </div>
    </div>
  </div>
<!-- blog-section -->



<div class="blog">

     <div class="carousel-wrap">

       <div class="blog-section owl-carousel" id="demo">
       	 <?php
            $args = array(  
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 5, 
                'orderby' => 'title', 
                'order' => 'ASC',
                'post_date' => 'true'
            );
        if ( has_post_thumbnail() ) { the_post_thumbnail(); }
        //the_content();
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post();
              $post_id   = get_the_ID();
              $blogimage = get_the_post_thumbnail_url();
              $blogtitle = get_the_title();
              ?>
     		<div class="item">
     			<div class="testimonial-box">
       		 
       				<p><?php the_excerpt(); ?></p> 
              <div class="testimonial-img"><img src="<?= $blogimage; ?>;"></div>
              <div class="testimonial-text">
                  <h4> <a href="<?php the_permalink();?>"><?php echo $blogtitle; ?></a></h4>
            <h6><?= get_post_meta($post_id,'blog_designation',true); ?></h6>
             <div class="star-div">
                 <span>★★★★★</span>
              </div>   
       			</div>
       		
       		</div>
       		 
       	</div>
        <?php
            endwhile;

            wp_reset_postdata(); 
            ?>
       	</div>
       </div>
   </div>

<!-- blog-section -->
<!-- <?php// if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php //the_content(); ?>
<div class="entry-links"><?php //wp_link_pages(); ?></div>
</div>
</article>
<?php //if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>

</main> -->





<?php get_footer(); ?>