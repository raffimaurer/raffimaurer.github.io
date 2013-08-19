<?php get_header(); ?>
<div id="content" style="background: white !important;">
	<div class="wrap">
		<div class="entry">
			<?php the_post_thumbnail();?>
			<?php the_content();?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h100>.</h100>
			<h1 style="text-align: center !important; font-size:25px !important;"><?php the_title(); ?><br><span><?php the_time('F j') ?></span></h1>
			<?php the_content('[...]'); ?>
			<!--<?php comments_template(); ?>-->
			<?php endwhile; else: ?>
			<p></p>
			<p><?php _e('No posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
	</div> 
	
<?php get_footer(); ?>