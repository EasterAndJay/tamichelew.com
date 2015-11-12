<?php if ( get_option('solostream_show_auth_bio') == 'yes' && get_post_meta( $post->ID, 'hide_auth_bio', true ) != 'Yes' ) { ?>
<div class="auth-bio clearfix">
	<div class="bio">
		<h3><?php _e("About the Author", "solostream"); ?>: <a rel="author" href="<?php bloginfo('url'); ?>/?author=<?php the_author_ID(); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h3>
		<?php 
			$gravsize = '96'; 
			$author_email = get_the_author_email();
			echo get_avatar($author_email,$size="$gravsize");
			$the_author_description = get_the_author_meta('description');
			echo $the_author_description; 
		?>
	</div>
</div>
<?php } ?>
