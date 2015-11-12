<?php get_header(); ?>

	<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	if ( get_post_meta( $postid, 'post_featpages', true ) == "Yes" ) { ?>
		<?php include (TEMPLATEPATH . '/featured-pages.php'); ?>
	<?php } ?>

	<div id="page" class="clearfix">

		<div class="page-border clearfix">

		<div id="contentleft">

			<div id="content" class="clearfix">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="singlepost">

					<div class="post" id="post-main-<?php the_ID(); ?>">

						<div class="entry">

							<h1 class="post-title single"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h1>

							<?php include (TEMPLATEPATH . '/postinfo.php'); ?>

							<?php if ( get_post_meta( $post->ID, 'video_embed', true ) ) { ?>
								<div class="single-video">
									<?php echo get_post_meta( $post->ID, 'video_embed', true ); ?>
								</div>
							<?php } ?>

							<?php the_content(); ?>

							<div style="clear:both;"></div>

							<?php wp_link_pages(); ?>

							<div class="meta bottom">
								<span class="cats"><?php _e('Filed in', "solostream"); ?>: <?php the_category(', '); ?></span>
								<?php the_tags('<span class="tags"> &bull; '. __('Tags', "solostream"). ': ', ', ', '</span>'); ?>
							</div>

							<?php include (TEMPLATEPATH . '/auth-bio.php'); ?>

						</div>

						<?php comments_template('', true); ?>

					</div>

					<?php include (TEMPLATEPATH . "/bot-nav.php"); ?>

				</div>

<?php endwhile; endif; ?>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>