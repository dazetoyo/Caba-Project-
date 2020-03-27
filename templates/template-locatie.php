
<?php /* Template Name: locatie*/ ?>
<?php get_header(); ?>


<div class="absolute-mask-location">

</div>


<a  href="/contact/" class="btn bg-light btn-lg text-dark font-weight-bold px-5 pb-3" style="    max-width: 250px;
    position: absolute;
    left: 350px;
    top: 75px;
    z-index: 9;">
    <small><strong>CONTACT INFO</strong></small>
</a>
<div id="increase-map" class="border-top border-bottom"></div>























<script>
    function initMap() {
        var uluru = {lat: <?php the_field('increase_map_center_lat','options'); ?>, lng: <?php the_field('increase_map_center_lng','options'); ?>};
        var map = new google.maps.Map(document.getElementById('increase-map'), {
            zoom: <?php the_field('increase_map_zoom','options'); ?>,
            center: uluru,
            //disableDefaultUI: true,
            mapTypeControl:true,
            styles:[
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#8b8b8b"
                        },
                        {
                            "saturation": "0"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        },
                        {
                            "lightness": "85"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        },
                        {
                            "lightness": "60"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "lightness": "0"
                        },
                        {
                            "weight": "3.19"
                        },
                        {
                            "saturation": "0"
                        },
                        {
                            "gamma": "1.04"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        },
                        {
                            "lightness": "60"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        },
                        {
                            "lightness": "60"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        },
                        {
                            "lightness": "60"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "color": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#b48620"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "lightness": "100"
                        },
                        {
                            "saturation": "80"
                        },
                        {
                            "color": "#b4934a"
                        },
                        {
                            "gamma": "1.70"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b4934a"
                        }
                    ]
                }
            ]
        });

        setMarkers(map);

        map.setTilt(40);

        function setMarkers(map) {

            <?php if (have_rows('increase_map_markers','options')) { ?>
            var markers = [
                <?php while (have_rows('increase_map_markers','options')){ the_row(); ?>
                [
                    '<div><div class="text-center"><strong><?php the_sub_field("map_markers_title"); ?></strong></div><?php if(get_sub_field("map_markers_driving") || get_sub_field("map_markers_cycling") || get_sub_field("map_markers_walking")){ ?><div class="container-fluid border-top pt-2 mt-2" style="min-width: 250px;"><div class="row"><?php if(get_sub_field("map_markers_driving")){ ?><div class="col text-center"><span class="increaseicons-car clearfix text-primary h6 mb-1"></span><?php the_sub_field("map_markers_driving"); ?> <?php _e("min","theme") ?></div><?php }; ?><?php if(get_sub_field("map_markers_cycling")){ ?><div class="col text-center"><span class="increaseicons-bicycle clearfix text-primary h4 mb-1"></span><?php the_sub_field("map_markers_cycling"); ?> <?php _e("min","theme") ?></div><?php }; ?><?php if(get_sub_field("map_markers_walking")){ ?><div class="col text-center"><span class="increaseicons-on-foot clearfix text-primary h5 mb-1"></span><?php the_sub_field("map_markers_walking"); ?> <?php _e("min","theme") ?></div><?php }; ?></div></div><?php }; ?><?php if(get_sub_field("map_markers_description")){ ?><div class="border-top pt-2 mt-2"><?php echo get_sub_field("map_markers_description"); ?></div><?php }; ?></div>',
                    <?php the_sub_field("map_markers_lat"); ?>,
                    <?php the_sub_field("map_markers_lng"); ?>,
                    '<?php echo get_sub_field("map_markers_icon")["url"]; ?>',
                    22,
                    35
                ],
                <?php }; ?>
            ];
            <?php }; ?>

            /*var markers = [

                ['Parc Mogosoaia', 44.527073, 25.994295],
                ['Primaria', 44.5328619, 25.9976176]
            ];*/

            markers.reverse();

            var infowindow = new google.maps.InfoWindow();
            // Adds markers to the map.

            for (var i = 0; i < markers.length; i++) {
                var marker_item = markers[i];
                var marker = new google.maps.Marker({
                    position: {lat: marker_item[1], lng: marker_item[2]},
                    map: map,
                    //title: marker_item[0],
                    zIndex: i,


                });

                if(marker_item[3]){
                    marker.setIcon ({
                        url: marker_item[3],
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(marker_item[4], marker_item[5]),
                        scaledSize: new google.maps.Size(marker_item[4], marker_item[5]),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(marker_item[4]/2, marker_item[5])
                    });
                };


                        infowindow.setOptions({maxWidth : 300});
                        infowindow.setContent(markers[i][0]);
                        infowindow.open(map, marker);
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setOptions({maxWidth : 300});
                        infowindow.setContent(markers[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));


            }
        }

        /*var marker = new google.maps.Marker({
            position: {lat: 44.527073, lng: 25.994295},
            map: map
        });*/


    }

</script>

<script async defer
src="//maps.googleapis.com/maps/api/js?key=<?php the_field('increase_google_maps_api_key','options'); ?>&callback=initMap">*/
</script>




<style media="screen">
    #increase-map {
        height:100vh;
    }
.fixed-locatie{
    position: fixed;
    left: 0 !important;
     top: 0 !important;
    padding-left: 75px;
    padding-right: 75px;
    padding-top: 75px;
    z-index: 11;
    background: white;
    height: 100vh;
}

.absolute-mask-location{
    position:fixed;
    top:0;
    right:0;
    height:100vh;
    padding-left:300px;
    background:#3c3421c9;
    z-index:9;
}
.menu-vertical:before,
.menu-vertical:after {
        background: #FCFCFC;
}

.gm-style .gm-style-iw-c
{
        background: #3c3421c9;

}

.gm-style .gm-style-iw-t::after{
    background: linear-gradient(45deg,rgb(99, 90, 75) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0) 100%);
        background-image: linear-gradient(45deg, rgb(99, 90, 75) 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);
}



.gm-style .gm-style-iw-d::-webkit-scrollbar-track, .gm-style .gm-style-iw-d::-webkit-scrollbar-track-piece{
    background: #635b4b;

}

.gm-style-iw.gm-style-iw-c {

    padding: 20px 1px 20px 89px!important;
}
.gm-style-iw.gm-style-iw-c:after {
    content: '';
    position: absolute;
    left: 25px;
    top: 15px;
    background: url('/wp-content/uploads/2020/02/Caba-map.svg');
    height: 72px;
    width: 48px;
}

.gm-style-iw-d{
    color:white !important;
}

@media (max-width: 1400px) {

.fixed-locatie{
        position: fixed;
    left: 75px !important;
    top: 60px !important;
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
    z-index: 11;
    background: none;
    height: 100vh;
}

a.btn.bg-light.btn-lg.text-dark.font-weight-bold.px-5.pb-3{
    bottom:0;
    top:unset !important;
    left: 50% !important;
    transform: translateX(-50%) translateY(-50%);
}




}

@media (max-width: 1100px) {
.absolute-mask-location{

            padding-left: 90px;
}
.fixed-line-nav{
    display:none;
}

}

</style>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.navbar-brand > div').removeClass('text-light');
        $('.navbar-brand > div').addClass('text-dark');

    });

</script>

<?php get_footer(); ?>
