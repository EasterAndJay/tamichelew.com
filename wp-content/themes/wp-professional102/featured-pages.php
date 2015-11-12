<?php 
$slideshowspeed = get_option('solostream_feat_scrollspeed');
if ( get_option('solostream_feat_autoscroll') == 'Yes' ) { $slideshow = 'true'; } else { $slideshow = 'false'; } ?>
<script type="text/javascript">
//<![CDATA[
	jQuery(window).load(function() {
		jQuery('#featured-pages').flexslider({
			controlNav: true,
			slideshow: <?php echo $slideshow; ?>,
			slideshowSpeed: <?php echo $slideshowspeed; ?>,
			animationDuration: 400,
			directionNav:true,
			animationLoop: true,
			controlsContainer: ".page-slider"
		});
	});
//]]>
</script>

<div class="featured wide pages">

	<div class="container page-slider clearfix">

		<div id="featured-pages" class="flexslider">

			<ul class="slides">

				<?php /* THIS IS THE SLIDE FOR THE VIDEO EMAIL CAPTURE FORM */ ?>
				<?php if ( get_option('solostream_videmailform_on') == 'Yes' ) { ?>
	    				<li id="feature-page-form-vid" class="feature-page-form vidcap">
						<div class="feature-video">
							<div class="video"><?php echo stripslashes(get_option('solostream_videmailform_embed_code')); ?></div>
						</div>
    						<div class="flex-caption">
							<div class="capture-form">
								<?php if (get_option('solostream_videmailform_title')) { ?>
									<h2><?php echo stripslashes(get_option('solostream_videmailform_title')); ?></h2>
								<?php } ?>
								<?php if (get_option('solostream_videmailform_copy')) { ?>
									<p><?php echo stripslashes(get_option('solostream_videmailform_copy')); ?></p>
								<?php } ?>
								<?php if (get_option('solostream_videmailform_code')) { ?>
									<?php echo stripslashes(get_option('solostream_videmailform_code')); ?>
								<?php } ?>
							</div>
						</div>
					</li>
				<?php } ?>


				<?php /* THIS IS THE SLIDE FOR THE STANDARD EMAIL CAPTURE FORM */ ?>
				<?php if ( get_option('solostream_emailform_on') == 'Yes' ) { ?>
	    				<li id="feature-page-form" class="feature-page-form">
						<div class="feature-image">
							<img src="<?php bloginfo('template_directory'); ?>/images/feature-form.png" alt="" />
							<div class="capture-form">
								<?php if (get_option('solostream_emailform_title')) { ?>
									<h2><?php echo stripslashes(get_option('solostream_emailform_title')); ?></h2>
								<?php } ?>
								<?php if (get_option('solostream_emailform_copy')) { ?>
									<p><?php echo stripslashes(get_option('solostream_emailform_copy')); ?></p>
								<?php } ?>
								<?php if (get_option('solostream_emailform_code')) { ?>
									<?php echo stripslashes(get_option('solostream_emailform_code')); ?>
								<?php } ?>
							</div>
						</div>
    						<div class="flex-caption">
							<div class="excerpt">
								<?php if (get_option('solostream_emailslide_title')) { ?>
									<h2 class="post-title"><?php echo stripslashes(get_option('solostream_emailslide_title')); ?></h2>
								<?php } ?>
								<?php if (get_option('solostream_emailslide_copy')) { ?>
									<p><?php echo stripslashes(get_option('solostream_emailslide_copy')); ?></p>
								<?php } ?>
							</div>
						</div>
					</li>
				<?php } ?>

<?php 
$featpages = get_option('solostream_featpage_ids');
$featarr=split(",",$featpages);
$featarr = array_diff($featarr, array(""));
$count = 1;
foreach ( $featarr as $featitem ) { ?>

<?php $my_query = new WP_Query(array(
	'post_type' => array('post', 'page'),
	'page_id' => $featitem
	));
while ($my_query->have_posts()) : $my_query->the_post(); ?>

	    			<li id="feature-page-<?php echo $count; ?>">

					<div class="slide-container clearfix">

						<?php if ( get_post_meta( $post->ID, 'video_embed', true ) ) { ?>
							<div class="feature-video">
								<div class="video"><?php echo get_post_meta( $post->ID, 'video_embed', true ); ?></div>
							</div>
						<?php } else { ?>
							<div class="feature-image"> 
								<a href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_feature_image_wide(); ?></a>
							</div>
						<?php } ?>

	    					<div class="flex-caption">
							<div class="excerpt">
								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
									<?php the_excerpt(); ?>
								<?php } else { ?>
									<?php the_content(__("", "solostream")); ?>
								<?php } ?>
							</div>
							<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continue Reading &raquo;", "solostream"); ?></a></p>
						</div>

					</div>

				</li>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
<?php } ?>

			</ul>


		</div>

	</div>

</div>