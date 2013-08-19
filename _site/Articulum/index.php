<?php get_header(); ?>
<div id="content" style="background: white !important;">
	<div class="wrap">
		<div class="entry">
			<?php the_post_thumbnail();?>
			<?php the_content();?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h100>.</h100>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h1><?php the_title(); ?><span> &mdash; <?php the_time('F j') ?></span></a></h1>
			<?php the_content('[...]'); ?>
			<!--<?php comments_template(); ?>-->
			<?php endwhile; else: ?>
			<p></p>
			<p><?php _e('No posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
	</div> 
	
<div class="navigation">
	<p><?php posts_nav_link('&#8734;','Newer','Older'); ?></p>
</div>  
	
<?php get_footer(); ?>