<?php /* Template Name: Projects */ ?>
<?php get_header(); ?>





<div class="background-black ">

    <div class="container">

    <div id="accordion" class="responsive-header-margin mt-md-5" >
        <div class="card">
            <div class="" id="headingOne">
                <h5 class="mb-0">
                    <div class=" h1 text-light" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Construction



                        <span class="ml-5">+</span>


                    </div>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="">
                        Since its inception, CABA Inc. strengthened its position in the sector with its road-tunnels, housing, shopping mall and hotel construction projects, blending knowledge and experience successfully and thus created a lasting place in the market.
                    </div>
                    <div class="">
                            <a href="/increase_main_category/construction/" class=" btn btn-outline-light btn-lg text-light  px-5 pt-2  mt-5"> See the Projects</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="" id="headingTwo">
                <h5 class="mb-0">
                    <div class=" collapsed h1 text-light" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Energy

                        <span class="ml-5">+</span>
                    </div>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="">
                                Our company closely follows the developments in the energy sector and started to invest in this field in 2010. Our company has received the following: 1 HEPP Project, 2 WPP Projects and 24 SEGS Projects. CABA Inc. aims to make new investments with suitable conditions by following the developments in the field of energy.
                    </div>
                    <div class="">
                                <a href="/increase_main_category/energy/" class="btn btn-outline-light btn-lg text-light  px-5 pt-2  mt-5"> See the Projects</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="" id="headingThree">
                <h5 class="mb-0">
                    <div class=" collapsed h1 text-light" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Mining

                        <span class="ml-5">+</span>
                    </div>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="">
                            Marble blocks are produced in our marble quarry in Lalelik, in the Sarıveliler District of Karaman province. Our quarry with an annual production capacity of 50.000 m³ is 330 km from the Port of Mersin. The marble produced here are exported to countries such as China and India.
                    </div>

                    <div class="">
                            <a href="/increase_main_category/mining/" class="btn btn-outline-light btn-lg text-light  px-5 pt-2  mt-5"> See the Projects</a>
                    </div>


                </div>
            </div>
        </div>

        <div class="card">
            <div class="" id="headingFour">
                <h5 class="mb-0">
                    <div class=" collapsed h1 text-light" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Tourism

                        <span class="ml-5">+</span>
                    </div>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <div class="">
                                            Opened in April 2017 Radisson Hotel; our facility consists of 167 rooms with a covered area spanning ​​20,000 m², an a la Carte restaurant, a main restaurant, 2 bars, 5 multi-purpose halls, an indoor swimming pool and a 1000 m² Spa / Fitness area. The Radisson Blu Hotel is the only five-star hotel in the city of Diyarbakir.
                    </div>
                    <div class="">
                                <a href="/increase_main_category/tourism/" class="btn btn-outline-light btn-lg text-light  px-5 pt-2  mt-5"> See the Projects</a>
                    </div>

                </div>
            </div>
        </div>

        </div>

    </div>


</div>




<style media="screen">
.background-home{

}

html {
	background: url('/wp-content/uploads/2020/02/Projects-background.png') no-repeat center center fixed;
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

.card{
    background:transparent !important;
}


div.collapsed.h1{
    color:#EBDAA7 !important;

}

@media (max-width: 1400px) {
    .h1 {
        font-size:100px;
    }
}

@media (max-width: 1200px) {
    .h1 {
        font-size: 40px;
        margin-top: 25px;
    }
}


.card{
    border:none;
    cursor:pointer;
}
.card-body{
    cursor:text;
}

a.btn.btn-outline-light.btn-lg.text-light.px-5.pt-2.mt-5:hover{
    color:black !important;
}
</style>

<?php get_footer();
