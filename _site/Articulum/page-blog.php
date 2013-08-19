<?php get_header(); ?>
<div id="content" style="background: white !important;">
	<div class="wrap">
		<div class="entry">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php query_posts('showposts=10'); ?>
<?php endwhile; else: ?> 
// no posts found
<?php endif; ?>
			<p></p>
					</div>
	</div> 
	
<div class="navigation">
	<p><?php posts_nav_link('&#8734;','Newer','Older'); ?></p>
</div>  
	
<?php get_footer(); ?>