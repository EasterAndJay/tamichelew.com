<?php 
if (is_home()) {
	if ( get_option('solostream_hidedupes') == "No" ) { $do_not_duplicate = null; }
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts(array(
		'post__not_in' => $do_not_duplicate,
		'paged' => $paged
	)); }
if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?> id="post-main-<?php the_ID(); ?>">
					<div class="entry clearfix">
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_thumbnail_large(); ?></a>
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continue Reading &raquo;", "solostream"); ?></a></p>
						<?php } else { ?>
						<?php the_content(__("Continue Reading &raquo;", "solostream")); ?>
						<?php } ?>
						<div style="clear:both;"></div>
					</div>
				</div>
<?php endwhile; endif; ?>

				<?php include (TEMPLATEPATH . "/bot-nav.php"); ?>