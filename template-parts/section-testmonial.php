<!-- Section Testmonial -->
<?php
/**
	* Clean Option - tesl_status
	*/
	if ( !clean_home_option("tesl_status") || clean_home_option("tesl_status") == "on" ) {
?>

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">

            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">
							<?php
							/**
								* Clean Option - tittesl_txt
								*/
								if ( clean_home_option("tittesl_txt") && !is_null(clean_home_option("tittesl_txt")) && !is_array(clean_home_option("tittesl_txt")) ) {
									echo clean_home_option("tittesl_txt");
								} else {
							?>
							What my clients say
							<?php } ?>
						</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							<?php
							/**
								* Clean Option - txttesl_txt
								*/
								if ( clean_home_option("txttesl_txt") && !is_null(clean_home_option("txttesl_txt")) && !is_array(clean_home_option("txttesl_txt")) ) {
									echo clean_home_option("txttesl_txt");
								} else {
							?>
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
							<?php } ?>
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="<?php
										/**
											* Clean Option - teslfd_image
											*/
											if ( clean_home_option("teslfd_image") && !is_null(clean_home_option("teslfd_image")) && !is_array(clean_home_option("teslfd_image")) ) {
												echo clean_home_option("teslfd_image");
											} else {
												echo get_stylesheet_directory_uri().'/images/client-1.jpg';
											}
										 ?>" alt="client-1" />
                    <blockquote>
                      <p>
												<?php
												/**
													* Clean Option - teslfd_txt
													*/
													if ( clean_home_option("teslfd_txt") && !is_null(clean_home_option("teslfd_txt")) && !is_array(clean_home_option("teslfd_txt")) ) {
														echo clean_home_option("teslfd_txt");
													} else {
												?>
												Work with John was a pleasure. He understood exactly what I wanted and created an awesome site for my company.
												<?php } ?>
											</p>
                      <footer>
												<?php
												/**
													* Clean Option - teslfn_txt
													*/
													if ( clean_home_option("teslfn_txt") && !is_null(clean_home_option("teslfn_txt")) && !is_array(clean_home_option("teslfn_txt")) ) {
														echo clean_home_option("teslfn_txt");
													} else {
												?>
												Pino Caruso
												<?php } ?>
											</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="<?php
										/**
											* Clean Option - teslsd_image
											*/
											if ( clean_home_option("teslsd_image") && !is_null(clean_home_option("teslsd_image")) && !is_array(clean_home_option("teslsd_image")) ) {
												echo clean_home_option("teslsd_image");
											} else {
												echo get_stylesheet_directory_uri().'/images/client-2.jpg';
											}
										  ?>" alt="client-2" />
                    <blockquote>
                      <p>
												<?php
												/**
													* Clean Option - teslsd_txt
													*/
													if ( clean_home_option("teslsd_txt") && !is_null(clean_home_option("teslsd_txt")) && !is_array(clean_home_option("teslsd_txt")) ) {
														echo clean_home_option("teslsd_txt");
													} else {
												?>
												I'm really happy with the results. Get 100% satisfaction is difficult but Alex got it without problems.
												<?php } ?>
											</p>
                      <footer>
												<?php
												/**
													* Clean Option - teslsn_txt
													*/
													if ( clean_home_option("teslsn_txt") && !is_null(clean_home_option("teslsn_txt")) && !is_array(clean_home_option("teslsn_txt")) ) {
														echo clean_home_option("teslsn_txt");
													} else {
												?>
												Jane Doe
												<?php } ?>
											</footer>
                    </blockquote>
                </div>

            </div>

            </div><!-- .row -->


		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->
<?php
	} // close tesl_status = on
?>
