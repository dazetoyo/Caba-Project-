<?php
/**
* Header template.
*/

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<?php wp_head(); ?>

</head>


<link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap&subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">


<?php if(wp_is_mobile()){$deviceType = 'touch-device';}else{$deviceType = 'not-touch-device';} ?>
<body <?php body_class( $deviceType ); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'increase' ); ?></a>

	<?php/* if ( has_nav_menu( 'top' ) ) : ?>
	<div class="navigation-top">
	<div class="wrap">
	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
	</div><!-- .wrap -->
	</div><!-- .navigation-top -->
	<?php endif; */?>


	<div class="fixed-locatie fixed-nav-logo" >
	<a class="navbar-brand" href="<?php echo esc_url(get_bloginfo('url')); ?>">
		<?php $custom_logo_id = esc_attr(get_theme_mod( 'custom_logo' ));
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

			<img src="<?php echo esc_url( $logo[0] ); ?>" class="d-inline-block" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
			<div class="d-block text-center h5 text-light">
				<strong>ROMANIA</strong>
			</div>


	</a>
</div>



<div class="fixed-nav-menu">


	<div class="h5 menu-vertical">
		<a href="#">MENU</a>
	</div>




</div>


<div class="fixed-line-nav">
	<div class="line-max-top"></div>


	<div class="h5 font-weight-light fixed-word-nav" style="




	"><img style="    position: fixed;
	left: -95px;
	top: -15px;
	"  src="http://caba.goodafternoon.ro/wp-content/uploads/2020/02/Caba-Fixed.svg" alt="">
	CABA EXPERTISE
</div>

<div class="line-max-bottom"></div>

</div>





<div id="header-menu" class="full-menu row " style="z-index:10;">



	<?php if ( has_nav_menu( 'header_menu' ) ) {
		wp_nav_menu(
			array(
				'menu' => 'header_menu',
				'theme_location' => 'header_menu',
				'depth' => 2,
				'container' => '',
				'menu_class' => 'nav navbar-nav ',
				'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
				'walker' => new WP_Bootstrap_Navwalker()
			)
		);
	} ?>

	<div class="absolute-menu">

		<div >
			<div class="d-flex flex-row">
				<div style="width:250px" class=" mt-3">
					<img style="width:188px" src="/wp-content/uploads/2020/02/Catalog.png" alt="">
				</div>
				<div style="max-width: 214px;">
					<small class="text-dark d-block">
						CABA CATALOGUE <br/> <br/>
						Our company closely follows the developments in the energy sector and started to invest in this field in 2010. Our company has received the following: 1 HEPP Project, 2 WPP Projects and 24 SEGS Projects. CABA Inc. aims to make new investments with suitable conditions by following the developments in the field of energy.
					</small>

				<div class=" btn btn-outline-dark btn-lg text-dark font-weight-bold px-5 pt-2 pb-3 mt-3">
					<small class="font-weight-bold">MORE DETAILS</small>
				</div>

				</div>


				<div class="">

				</div>

			</div>

			<div class="d-flex flex-column  mt-5">
						<div class="h5 text-dark font-weight-bold">
							Anniversary: 20 YEARS
						</div>

						<div class="">
							<img src="http://caba.goodafternoon.ro/wp-content/uploads/2020/02/Eveniment.jpg" alt="">
						</div>
			</div>


		</div>
	</div>
</div>







<style media="screen">

</style>


<script type="text/javascript">





jQuery(document).ready(function($) {

	$( ".menu-vertical" ).on( "click", function() {
		$( "#header-menu" ).slideToggle("slow");
		$( "#header-menu > ul#menu-menu-1" ).toggleClass("background-linear-primary");

			$( "body" ).toggleClass("menu-is-open");




		if (!$( ".menu-vertical" ).hasClass("text-dark")) {
			$( ".menu-vertical" ).text("CLOSE");

		}

		if ($( ".menu-vertical" ).hasClass("text-dark")) {
			$( ".menu-vertical" ).text("MENU");
		}



		$( ".menu-vertical" ).toggleClass("text-dark");
		$( ".navbar-brand > div" ).toggleClass("text-dark");



	});

	//
	// $( "a.nav-link" ).on( "mouseover", function() {
	//   $( ".opacity-0" ).css( "opacity", "1" );
	//     $( ".opacity-0" ).css( "visibility", "visible" );
	// });
	// $( "a.nav-link" ).on( "mouseleave", function() {
	//   $( ".opacity-0" ).css( "opacity", "0" );
	//     $( ".opacity-0" ).css( "visibility", "hidden" );
	// });



});

</script>
<!-- <div id="content">
<div class="container"> -->
