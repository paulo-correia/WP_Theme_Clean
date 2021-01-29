<!-- Section Contact -->
<?php
/**
	* Clean Option - contact_status
	*/
	if ( !clean_home_option("contact_status") || clean_home_option("contact_status") == "on" ) {
?>
	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">
							<?php
							/**
								* Clean Option - titcont_txt
								*/
								if ( clean_home_option("titcont_txt") && !is_null(clean_home_option("titcont_txt")) && !is_array(clean_home_option("titcont_txt")) ) {
									echo clean_home_option("titcont_txt");
								} else {
							?>
							Drop me a line
							<?php } ?>
						</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							<?php
							/**
								* Clean Option - txtcont_txt
								*/
								if ( clean_home_option("txtcont_txt") && !is_null(clean_home_option("txtcont_txt")) && !is_array(clean_home_option("txtcont_txt")) ) {
									echo clean_home_option("txtcont_txt");
								} else {
							?>
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
							<?php } ?>
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

						<div class="ajax-hidden">
								<?php
								/**
									* Clean Option - idcont_txt
									*/
									if ( clean_home_option("idcont_txt") && !is_null(clean_home_option("idcont_txt")) && !is_array(clean_home_option("idcont_txt")) ) {
										$idcont_txt= clean_home_option("idcont_txt");
									} else {
								 		$idcont_txt = 26;
									}

									echo do_shortcode('[contact-form-7 id="'.$idcont_txt.'" title="Contact"]');

								?>
						</div>
						<div class="ajax-response"></div>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->
<?php
	} // close contact_status = on
?>
