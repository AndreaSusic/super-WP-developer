<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'group' ); ?> role="article">

    <h1>HOW IMPORTANT UI DESIGN IS</h1>
		<h3>The level 3 heading (i.e. H3) is the third most important header in the document. </h3>

	</article>

    <?php endwhile; endif; ?>

		<?php //get_sidebar(); ?>

	   <img src="https://images.pexels.com/photos/1426715/pexels-photo-1426715.jpeg">


<?php the_content(); ?>

</div><!-- end content -->


<?php get_footer(); ?>
