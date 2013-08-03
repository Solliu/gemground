<?php
/***
 *  全局, 没有指定明确分类时都显示作品列表
 *
 *
 ****/
$posts = get_posts(array(
	'posts_per_page'  => 10,
	'offset'          => 0,
	'category'        => '3',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '',
	'post_parent'     => '',
	'post_status'     => 'publish',
	'suppress_filters' => true 
));
get_header();
?>

<!-- work side bar -->
<div id="works">
	<section class="container">
		<div class="row">
			<aside class="span2">
<?php 			wp_list_categories( array(
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

			<ul class="work-list span10">
<?php
	foreach( $posts as $post ) : 
		setup_postdata($post);
		$thumbnail = get_the_post_thumbnail(
			$post->ID, 
			array(400,400),  // set thumb image size
			array(
				'alt'    =>get_the_title($post->ID),
				'title'  =>get_the_title($post->ID)
			)
		);
		if (has_post_thumbnail()) : ?>
				<li class="work-thumb">
					<a href="<?php the_permalink(); ?>">
						<?php echo $thumbnail; ?>
						<span><?php the_title(); ?><span>
					</a>
				</li>
<?php 	else: ?>
				<li class="work-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
<?php 	endif; ?>
<?php endforeach; ?>
			</ul>
		</span>
	</section>
</div>


<?php get_footer(); ?>