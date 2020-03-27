<?php get_header(); ?>
<main id="content">
<!-- <header class="header">
<h1 class="entry-title"><?php //single_term_title(); ?></h1>
<div class="archive-meta"><?php// if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header> -->
<div class="single-service-page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
 ?>
	<div class="single-service-box">
		
		<!-- <h1 class="entry-title"><?php //single_term_title(); ?></h1> -->

		<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
	<?php get_template_part( 'entry' ); ?>
	
</div>
<?php endwhile; endif; ?>
<?php //get_template_part( 'nav', 'below' ); ?>
</div>
</main>

<?php get_footer(); ?>