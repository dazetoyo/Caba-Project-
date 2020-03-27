<?php get_header(); ?>


<div class="container responsive-header-margin">






					<?php if (have_posts()) { ?>
						<div class="post-wrap">
							<?php while ( have_posts() ) :  the_post();	 ?>

									<?php

									// get_template_part( 'template-parts/post/content' );
									?>
									<div class="h2 my-5">
											<?php the_title() ?>
									</div>


									<img src="<?php echo the_post_thumbnail() ?>">

									<div class="my-5">
											<?php the_content() ?>
									</div>

									<?
									// If comments are open or we have at least one comment, load up the comment template.


									the_post_navigation( array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'increase' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'increase' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"> </span>%title</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'increase' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'increase' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"> </span></span>',
									) );

									?>

							<?php endwhile; ?>
						</div>
					<?php }; ?>

</div>

<?php get_footer();
