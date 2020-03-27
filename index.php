<?php get_header(); ?>
<?php
$increase_sidebar_position = get_field('increase_options_sidebar_position','options');
?>
<div class="container responsive-header-margin">


	<div class="wrap">

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="entry-header">
				<h1 class="title text-dark"><?php single_post_title(); ?></h1>
			</header>
		<?php else : ?>
			<header class="entry-header">
				<h1 class="title"><?php _e( 'Posts', 'increase' ); ?></h1>
			</header>
		<?php endif; ?>
		<div class="row no-gutters">




			<?php if (have_posts()) { ?>



				<?php while (have_posts()) : the_post();?>
					<div class="col-12 col-md-6 mb-3 mb-md-3">





						<a href="<?php the_permalink(); ?>">
						<div class="hover-main-article" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); height:513px;
						background-size: cover;
						background-position: center;
						position:relative;">

						<div class="hover-article" style="    position: absolute;
						top: 50%;
						left: 50%;
						text-align: center;
						transform: translateX(-50%) translateY(-50%);">
						<?php the_title(); 	?>
					</div>
				</div>
					</a>
			</div><?php
		endwhile;

		?>


	<?php } ?>

</div>
</div>

</div>

<style media="screen">

.hover-article{
	opacity:0;
	visibility:hidden;
	font-weight:bold;
}

.hover-main-article:hover{
	box-shadow: inset 0 0 0 2000px rgba(0,0,0,0.6);
	transition:0.3s;
}

.hover-main-article{
	transition:0.3s;
}

.hover-main-article:hover > .hover-article{
	opacity:1;
	visibility:visible;

}


@media (max-width:765px) {

	h1{
		font-size:40px;
	}
	.tab-child{
		top:180px;
	}

}



</style>
<?php get_footer();
