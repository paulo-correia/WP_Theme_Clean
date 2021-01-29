<!-- Section Cta -->
<?php
/**
	* Clean Option - cta_status
	*/
	if ( !clean_home_option("cta_status") || clean_home_option("cta_status") == "on" ) {
?>
	<!-- CallToAction start -->

	<section class="calltoaction"
	<?php
	/**
		* Clean Option - cta_image
		*/
		if ( clean_home_option("cta_image") && !is_null(clean_home_option("cta_image")) && !is_array(clean_home_option("cta_image")) ) {
			echo 'style=background:url("'.clean_home_option("cta_image").'")';
		}
	?>
		>
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">
						<?php
						/**
							* Clean Option - titcta_txt
							*/
							if ( clean_home_option("titcta_txt") && !is_null(clean_home_option("titcta_txt")) && !is_array(clean_home_option("titcta_txt")) ) {
								echo clean_home_option("titcta_txt");
							} else {
						?>
						ARE YOU READY TO START?
						<?php } ?>
					</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						<?php
						/**
							* Clean Option - txtcta_txt
							*/
							if ( clean_home_option("txtcta_txt") && !is_null(clean_home_option("txtcta_txt")) && !is_array(clean_home_option("txtcta_txt")) ) {
								echo clean_home_option("txtcta_txt");
							} else {
						?>
						I'm available for freelance projects.
						<?php } ?>
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">
						<?php
						/**
							* Clean Option - btncta_txt
							*/
							if ( clean_home_option("btncta_txt") && !is_null(clean_home_option("btncta_txt")) && !is_array(clean_home_option("btncta_txt")) ) {
								echo clean_home_option("btncta_txt");
							} else {
						?>
						Hire Me
						<?php } ?>
					</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->
<?php
	} // close cta_status = on
?>
