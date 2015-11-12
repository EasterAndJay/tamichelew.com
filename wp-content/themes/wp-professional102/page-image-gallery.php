<?php
/*
Template Name: Image Gallery
*/
?>

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

				<div class="post entry clearfix">

					<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

					<?php the_post(); ?>
					<?php $content = get_the_content(); ?>
					<?php if ( ! empty( $content ) ) : ?>
					<?php the_content(); ?>
					<?php endif; ?>

					<div id="archives-images" class="archive-content">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$numposts = 40;
						query_posts(array(
							'posts_per_page' => $numposts,
							'paged' => $paged
						));
						while (have_posts()) : the_post(); ?>
						<div class="archives-images">
							<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_thumbnail(); ?></a>
						</div>
						<?php endwhile;  ?> 
					</div>

				</div>

				<?php include (TEMPLATEPATH . '/bot-nav.php'); ?>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>