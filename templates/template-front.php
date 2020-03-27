<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<!-- </div><!-- .container -->


<div class="background-black ">


	<div class="absolute-main-frontpage" >
		<div class="h1 text-light aligner-item ml-4">
			Our Work,
		</div>
		<div class="aligner-item mb-5 ml-4">
			continues to have a direct impact about social life and social structure.
		</div>
		<div class="d-block d-md-inline ml-4 ">
			<a href="/about-us/">
			<div class=" btn btn-primary px-5 py-3 mb-4 mb-md-0">
				<small class="font-weight-bold text-dark">DISCOVER CABA</small>
			</div>
			</a>
			<a href="/projects/">
			<div class= "btn btn-outline-primary  ml-md-5 px-5 py-3">
				<small class="font-weight-bold" >OUR PROJECTS</small>
			</div>
			</a>
		</div>

	</div>





</div>






<?php /*
<div class="container">
<div class="wrap">
<div id="primary" class="content-area  <?php
if(get_field('increase_page_remove_padding_top')){echo ' pt-0 ';}
if(get_field('increase_page_remove_padding_bottom')){echo ' pb-0 ';}
?>">
<main id="main" class="site-main" role="main">
<?php if (have_posts()) { ?>
<div class="post-wrap">
<?php while ( have_posts() ) :  the_post();	 ?>

<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

<?php endwhile; ?>
</div>
<?php }; ?>
</main>
</div>
</div> */ ?>

<style media="screen">
.background-home{

}

html {
	background: url('/wp-content/uploads/2020/02/Caba-homepage.jpg') no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

}

.background-black {
	box-shadow: inset 0 0 0 2000px #3c3421bd;
	width:100vw;
	height:100vh;
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
}

.menu-vertical:before,
.menu-vertical:after{
	background:#ebdaa7;
}

.btn-outline-primary:hover > a > small {
	color:#6c6c6c;
}

</style>
<?php get_footer();
