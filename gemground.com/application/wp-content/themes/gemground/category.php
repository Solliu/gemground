<?php
/***
 *  全局, 没有指定明确分类时都显示作品列表
 *
 *
 ****/
$paths     = explode('/', $wp->request);
$cat = get_category_by_slug($paths[count($paths)-1]);

$posts = get_posts(array(
	'posts_per_page'  => 10,
	'offset'          => 0,
	'category'        => $cat->cat_ID, //GEM_WORK_CATEGORY_ID,
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
			<aside class="cate-container span2">
				<ul class="cate-list">
<?php 			wp_list_categories( array(
					'show_count'         => 0,
					'hide_empty'         => 0,
					'orderby'            => 'ID',
					'use_desc_for_title' => 0,
					'child_of'           => GEM_WORK_CATEGORY_ID, // child for works
					'title_li'           => '', //__( 'Categories' ),
					'show_option_none'   => '', //__('No categories'),
					'echo'               => 1,
					'depth'              => 3,
				) ); ?>
				</ul>
			</aside>

			<ul class="work-list span10">
<?php
	if ($posts) :
		foreach( $posts as $post ) : 
			setup_postdata($post);
			//
			$thumbnail = get_the_post_thumbnail(
				$post->ID, 
				array(400,400),  // set thumb image size
				array(
					'alt'    =>get_the_title($post->ID),
					'title'  =>get_the_title($post->ID)
				)
			);
			if (has_post_thumbnail()) : 

?>				<li class="work-thumb span3">
					<a href="<?php the_permalink(); ?>">
						<span class="work-title"><?php the_title(); ?></span>
						<?php echo $thumbnail; ?>
					</a>
				</li>
<?php 		else: ?>
				<li class="work-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
<?php 		endif;
		 endforeach;
	else: ?>
				<li class="work-thumb span3">
					
						<span class="work-title">Case not found!</span>
						
				</li>
<?php endif; ?>
		</ul>
	</section>
</div>


<?php get_footer(); ?>