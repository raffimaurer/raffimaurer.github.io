<?php get_header(); ?>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

<div id="content">
	<div class="wrap">
		<div class="contactpage">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<p><?php the_content(__('(more...)')); ?></p>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>