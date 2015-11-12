<?php
/*
Template Name: Archives by Month
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
					<div class="entry">
						<?php the_content(); ?>
					</div>
					<?php endif; ?>

					<div id="archives-month" class="archive-content">
						<?php
						$numposts = -1;
 						$previous_year = $year = 0;
						$previous_month = $month = 0;
						$ul_open = false;
						$myposts = get_posts(array(
							'numberposts' => $numposts,
							'orderby' => 'post_date',
							'order' => 'DESC'
						)); 
 						?>
						<?php foreach($myposts as $post) : ?>	
 
						<?php
							setup_postdata($post);
							$year = mysql2date('Y', $post->post_date);
							$month = mysql2date('n', $post->post_date);
							$day = mysql2date('j', $post->post_date);
						?>
 
						<?php if ($year != $previous_year || $month != $previous_month) : ?>
 						<?php if ($ul_open == true) : ?>
							</ul>
						<?php endif; ?>
 
						<h3><?php the_time('F Y'); ?></h3>
 						<ul class="archives-by-cat">
 							<?php $ul_open = true; ?>
							<?php endif; ?>
 							<?php $previous_year = $year; $previous_month = $month; ?>
 							<li><strong><?php the_time('j'); ?></strong>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>		
							<?php endforeach; ?>
						</ul>
					</div>

				</div>
		
			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>