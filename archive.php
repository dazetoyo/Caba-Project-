<?php get_header();




?>




<div class="container responsive-header-margin">


	<?php

	$main_cat = wp_get_post_terms($post->ID, 'increase_main_category');
	$main_cat_pluck = wp_list_pluck($main_cat, 'name');

	echo '<div class="h1 text-dark my-5">';
	echo $main_cat_pluck[0];
	echo '-';
	echo '</div>';

	$main_cat_id = wp_list_pluck($main_cat, 'term_id');


	?>

<div class="row">
<div class="col-12 col-md-8">




	<?php









	$args = array( 'increase_main_category' => $main_cat_pluck[0] , 'post_type' =>  'increase_projects' );
	$postslist = get_posts( $args );


if ($main_cat_id[0] == 4 ) {
	$custom_terms = get_terms(

		    array(
	        'taxonomy'   => 'increase_category',
	        'hide_empty' => false,
	        'exclude'    => array(12,13,14),
	    )

	);
}

else if ($main_cat_id[0] == 9 ) {
	$custom_terms = get_terms(

		    array(
	        'taxonomy'   => 'increase_category',
	        'hide_empty' => false,
	        'include' => '12'
	    )

	);
}

else if ($main_cat_id[0] == 10 ) {
	$custom_terms = get_terms(

		    array(
	        'taxonomy'   => 'increase_category',
	        'hide_empty' => false,
	        'include' => '13'
	    )

	);
}

else if ($main_cat_id[0] == 11 ) {
	$custom_terms = get_terms(

		    array(
	        'taxonomy'   => 'increase_category',
	        'hide_empty' => false,
	        'include' => '14'
	    )

	);
}




	// echo '<pre>';
	// print_r($custom_terms) ;
	echo '<div class="tab-main">';
	foreach($custom_terms as $custom_term) {




				wp_reset_query();
				$args = array('post_type' => 'increase_projects',
				'tax_query' => array(
					array(
						'taxonomy' => 'increase_category',
						'field' => 'slug',

						'terms' => $custom_term->slug,
					),
				),
			);
			echo '<div class="tab-click">'.$custom_term->name.'</div>';






	$loop = new WP_Query($args);
	if($loop->have_posts()) {


		echo '<div class="tab-child">';
		while($loop->have_posts()) : $loop->the_post();
		echo '<div class="border-top py-2 w-100"><a class="text-dark d-block" href="'.get_permalink().'">'.get_the_title().'</a></div>';

	endwhile;
	echo '</div>';

}

}
echo '</div>';

?>


</div>

<div class="col-12 col-md-4 d-none d-lg-block">
	<?php $term = get_queried_object(); ?>

	<div style="background-image:url('<?php echo the_field('project_main_cat_img', $term) ?>'); background-size:cover; height:50vh; background-position:center;"></div>

</div>

</div>

<?php if (have_posts()) { ?>
	<div class="posts-wrap">
		<?php while (have_posts()) : the_post();



		//
		// $main_cat = wp_get_post_terms($post->ID, 'increase_main_category');
		// echo '<pre>';
		// print_r($main_cat);
		// 	get_template_part('template-parts/post/content', 'excerpt');

	endwhile;

	if ($wp_query->max_num_pages > 1) {
		if (function_exists('wp_pagenavi')) {
			wp_pagenavi();
		} else {
			?><div class="alignleft"><?php next_posts_link( __( '<span>&laquo;</span> Older posts', 'increase' ) );?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer posts <span>&raquo;</span>', 'increase' ) );?></div><?php
		}
	} ?>
</div>
<?php } ?>





</div>


<style media="screen">

.h1{
	color:#3C3421 !important;
}

.tab-main{
	position:relative;
}

.tab-click{
	font-size:14px;
	padding:15px 25px;
	float:left;
	display:inline;
	cursor:pointer;
}

.tab-child{
	width: 90%;

	position: absolute;
	top:100px;
	left:25px;
	opacity:0;

}


.activate-tab{
	opacity:1;
	-webkit-animation: fadeInScale 0.7s ease-in-out;
	-moz-animation: fadeInScale 0.7s ease-in-out;
	animation: fadeInScale 0.7s ease-in-out;

}

.border-tab{
	border:1px solid #EBDAA7;
}


@media (max-width:991px) {
	.h1{
		font-size:40px;
	}

	.tab-child{

		top:180px;


	}

}


</style>

<script type="text/javascript">



jQuery(document).ready(function($) {
$(".tab-main > div:nth-child(1)").addClass("border-tab");
$(".tab-main > div:nth-child(2)").addClass("activate-tab");

	$( ".tab-click" ).on( "click", function() {
		$(".tab-child").removeClass("activate-tab");
		$(".tab-click").removeClass("border-tab");
		$(this).next().addClass("activate-tab");
		$(this).addClass("border-tab");
	});
});

</script>
<?php get_footer();
