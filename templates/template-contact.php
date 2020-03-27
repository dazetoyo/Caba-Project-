
<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>


<div class="container responsive-header-margin">

          <div class="h1 mt-5" style="color:#3C3421">
              Address
          </div>

    <div class="row">
      <div class="col-12 col-lg-7">


              <div class="h3 text-dark mt-5">
                  Barbu Văcărescu boulevard, nr. 102
District 2, 020283, Bucharest
              </div>
              <div class="ml-0 ml-md-3 h3 text-dark" style="line-height:2;">
                    +40 737 11 11 44 <br/>
                    FAX: +90 312 439 43 36 <br/>
                    sales@102theaddress.ro <br/>
                    Open: 9:00 - 18:00
              </div>

              <div class="mt-md-5 pt-md-5">
                  <a href="/location/" class="btn btn-outline-dark btn-lg text-dark font-weight-bold px-5 pt-2 pb-3" style="    max-width: 250px;">
    <small><strong>LOCATION MAP</strong></small>
</a>
              </div>

      </div>

      <div class="col-12 col-lg-5">
          <div class="h4 mt-5 text-dark mb-5">
              You can fill in the following dialog box for your request suggestions and complaint
          </div>

          <div class="">
              <?php echo do_shortcode( '[contact-form-7 id="154" title="EN - MD FORM"]' ) ?>
          </div>
      </div>
    </div>


</div>

<style media="screen">

    input.btn.btn-lg.btn-outline-dark.px-5.py-3.text-dark.wpcf7-form-control.wpcf7-submit{
        font-size:12px;
        margin-top:15px;

    }
    span.wpcf7-form-control-wrap.acceptance-463.cf{
        margin-top:15px !important;
    }
    input.btn.btn-lg.btn-outline-dark.px-5.py-3.text-dark.wpcf7-form-control.wpcf7-submit:hover{
        color:white !important;
    }


@media (max-width:765px) {

	.h1{
		font-size:40px;
	}
	.tab-child{
		top:180px;
	}

}



</style>

<?php get_footer(); ?>
