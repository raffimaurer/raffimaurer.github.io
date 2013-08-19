<?php get_header(); ?>
<head>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<div id="content" class="animated fadeInDown">
	<div style="max-width: 750px !important; margin: 0 auto; padding: 8px;">
		<div class="about">
		
		<div id="about_header" class="animated fadeInDown">
			<h2>Hi, my name is Raffi Maurer.<br>I'm a 15 year old<strong> web designer</strong>, <strong>programmer </strong><br>and <strong>writer </strong>from London, UK.<h2>
		</div>
		
		<div id="about_contact" class="animated fadeInDown">
			<hContact>Feel free to write to me with any <strong>questions</strong>, <strong>comments </strong>or <strong>requests</strong>. I'm happy to answer all questions and will get back to you as soon as I can.</hContact>

<br><br>
	<a class="contactButton" id="email" href="mailto:raffimaurer@gmail.com">Email Me</a>
	<a class="contactButton" id="twitter" href="http://twitter.com/RaffiMaurer">Twitter</a>
	<a class="contactButton" id="google" href="http://plus.google.com/102812704594829305196/">Google+</a>
	<a class="contactButton" id="linkedin" href="http://www.linkedin.com/in/raffimaurer">LinkedIn</a>
		</div>
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

<style>
	body { background-color: #F6F6F6; }
</style>