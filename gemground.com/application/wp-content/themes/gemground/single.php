<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<aside class="span2">
				<?php wp_list_categories( array(
					'show_count'         => 0,
					'hide_empty'         => 0,
					'use_desc_for_title' => 0,
					'child_of'           => 3, // child for works
					'title_li'           => '', //__( 'Categories' ),
					'show_option_none'   => '', //__('No categories'),
					'echo'               => 1,
					'depth'              => 3,
				) ); ?>
			</aside>
			<div id="primary" class="span10">
				<div id="content" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content-workdetail', get_post_format() ); ?>

						<nav id="nav-single">
							<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
							<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
						</nav><!-- #nav-single -->

					<?php endwhile; // end of the loop. ?>

				</div><!-- #content -->
			</div><!-- #primary -->

		</div>
	</div>
		

<?php get_footer(); ?>