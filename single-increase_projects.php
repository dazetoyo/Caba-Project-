<?php get_header(); ?>




<div class="container responsive-header-margin">



    <div class="row">

        <div class="col-12 col-md-4 d-flex align-items-end flex-column">
            <div style="flex-grow: 1;">

            </div>
            <div  class="h3 my-3 w-100">

                <?php

                $terms = wp_get_object_terms($post->ID, 'increase_main_category');
                if(!empty($terms)){
                    foreach($terms as $term){
                        $exampleName = $term->name;

                    }
                }
                echo $exampleName;

                ?>
            </div>
            <div class="h2 text-dark mb-3 border-bottom pb-3 border-dark">
                <?php the_title(); ?>
            </div>

            <div class="border-bottom border-dark w-100 text-left pb-3">


                <?php while ( have_rows('increase_project_details') ) : the_row(); ?>

                    <div class="row w-100 text-left py-2 ">
                        <div class="col-6">
                            <div class="font-weight-bold h5 text-dark pt-sans">
                                <?php the_sub_field('increase_project_details_description'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="h5 text-dark ">
                                <?php the_sub_field('increase_project_details_title'); ?>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>
            </div>


            <div class="h5 mb-3 pb-3 w-100 pt-3 pt-sans ">
                <a class="text-dark font-weight-bold" target="_blank" href="https://<?php the_field('project_link') ?>">
                    <?php the_field('project_link') ?></a>
                </div>
            </div>

            <div class="col-12 col-md-8">


                <div class="slider-for increase-full-right">


                    <?php
                    $images = get_field('project_gallery');

                    if( $images ): ?>

                    <?php foreach( $images as $image ): ?>
                        <div style="background-image:url('<?php echo $image ?>'); background-size:cover; height:70vh; background-position:center;">
                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>






            </div>


        </div>

    </div>

    <div class="row">
        <div class="col-12 col-md-4 mt-5">

            <?php echo get_post_field('post_content', get_queried_object_id()) ?>

        </div>
        <div class="col-12 col-md-8">
            <div  class="slider-nav increase-full-right">


                <?php


                if( $images ): ?>

                <?php foreach( $images as $image ): ?>
                    <div class="slick-margin" style="background-image:url('<?php echo $image ?>'); background-size:cover; height:15vh; background-position:center;">
                    </div>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>
</div>





</div>
</div>






<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        centerMode: true,
        focusOnSelect: true
    });

});


</script>


<style media="screen">
/* put in resposnive */
/* .slider-nav > div > div > img {
padding:25px !important;
} */

.slick-margin {
    margin:25px !important;
}
.increase-full-right{
    padding-right: 160px;

}

.slider-nav{
    margin-top: 10px;
}

body{
    overflow-x: hidden;
}
@media (max-width:575px) {
.increase-full-right{
    padding:0;
}
.slider-nav{
    display:none;
}
.slick-slide{
        margin: -25px;
        height:35vh !important;
}
}



</style>

<?php get_footer();
