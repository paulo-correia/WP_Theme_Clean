<!-- Section Services -->
<?php
	/**
		* Clean Option - service_status
		*/
		if ( !clean_home_option("service_status") || clean_home_option("service_status") == "on" ) {
?>

  <!-- Services start -->
	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">
							<?php
								/**
									* Clean Option - supsq_txt
								  */
								if ( clean_home_option("supsq_txt") && !is_null(clean_home_option("supsq_txt")) && !is_array(clean_home_option("supsq_txt")) ) {
									echo clean_home_option("supsq_txt");
								} else {
						 		?>
							This is what I do
						<?php } ?>
							</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							<?php
								/**
									* Clean Option - infsq_txt
								  */
								if ( clean_home_option("infsq_txt") && !is_null(clean_home_option("infsq_txt")) && !is_array(clean_home_option("infsq_txt")) ) {
									echo clean_home_option("infsq_txt");
								} else {
						 		?>
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						<?php } ?>
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<?php
							 	/**
								  *  Clean Option - iconfsq_txt
								  */
									if ( clean_home_option("iconfsq_txt") && !is_null(clean_home_option("iconfsq_txt")) && !is_array(clean_home_option("iconfsq_txt")) ) {
										echo "<span class='".clean_home_option("iconfsq_txt")."' >\n";
									} else {
							?>
							<span class="icon-magic-wand">
								<?php } ?>
							</span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">
								<?php
									/**
										* Clean Option - titfsq_txt
										*/
									if ( clean_home_option("titfsq_txt") && !is_null(clean_home_option("titfsq_txt")) && !is_array(clean_home_option("titfsq_txt")) ) {
										echo clean_home_option("titfsq_txt");
									} else {
									?>
									Web Design
									<?php } ?>
								</h3>
							<div class="iconbox-desc">
								<?php
									/**
										* Clean Option - txtfsq_txt
										*/
										if ( clean_home_option("txtfsq_txt") && !is_null(clean_home_option("txtfsq_txt")) && !is_array(clean_home_option("txtfsq_txt")) ) {
											echo clean_home_option("txtfsq_txt");
										} else {
										?>
								Good things come to those who wait, but only the things left by those who hustle
								<?php } ?>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<?php
								/**
									*  Clean Option - iconssq_txt
									*/
									if ( clean_home_option("iconssq_txt") && !is_null(clean_home_option("iconssq_txt")) && !is_array(clean_home_option("iconssq_txt")) ) {
										echo "<span class='".clean_home_option("iconssq_txt")."' >\n";
									} else {
							?>
							<span class="icon-puzzle">
								<?php } ?>
							</span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">
								<?php
									/**
										* Clean Option - titssq_txt
										*/
									if ( clean_home_option("titssq_txt") && !is_null(clean_home_option("titssq_txt")) && !is_array(clean_home_option("titssq_txt")) ) {
										echo clean_home_option("titssq_txt");
									} else {
									?>
								Web Programming
								<?php } ?>
							</h3>
							<div class="iconbox-desc">
								<?php
									/**
										* Clean Option - txtfsq_txt
										*/
										if ( clean_home_option("txtssq_txt") && !is_null(clean_home_option("txtssq_txt")) && !is_array(clean_home_option("txtssq_txt")) ) {
											echo clean_home_option("txtssq_txt");
										} else {
										?>
								Good things come to those who wait, but only the things left by those who hustle
								<?php } ?>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<?php
								/**
									* Clean Option - icontsq_txt
									*/
									if ( clean_home_option("icontsq_txt") && !is_null(clean_home_option("icontsq_txt")) && !is_array(clean_home_option("icontsq_txt")) ) {
										echo "<span class='".clean_home_option("icontsq_txt")."' >\n";
									} else {
							?>
							<span class="icon-badge">
								<?php } ?>
							</span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">
								<?php
									/**
										* Clean Option - tittsq_txt
										*/
									if ( clean_home_option("tittsq_txt") && !is_null(clean_home_option("tittsq_txt")) && !is_array(clean_home_option("tittsq_txt")) ) {
										echo clean_home_option("tittsq_txt");
									} else {
									?>
								Branding
								<?php } ?>
							</h3>
							<div class="iconbox-desc">
								<?php
									/**
										* Clean Option - txttsq_txt
										*/
										if ( clean_home_option("txttsq_txt") && !is_null(clean_home_option("txttsq_txt")) && !is_array(clean_home_option("txttsq_txt")) ) {
											echo clean_home_option("txttsq_txt");
										} else {
										?>
								Good things come to those who wait, but only the things left by those who hustle
								<?php } ?>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<?php
								/**
									* Clean Option - iconhsq_txt
									*/
									if ( clean_home_option("iconhsq_txt") && !is_null(clean_home_option("iconhsq_txt")) && !is_array(clean_home_option("iconhsq_txt")) ) {
										echo "<span class='".clean_home_option("iconhsq_txt")."' >\n";
									} else {
							?>
							<span class="icon-question">
								<?php } ?>
							</span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">
								<?php
									/**
										* Clean Option - tithsq_txt
										*/
									if ( clean_home_option("tithsq_txt") && !is_null(clean_home_option("tithsq_txt")) && !is_array(clean_home_option("tithsq_txt")) ) {
										echo clean_home_option("tithsq_txt");
									} else {
									?>
								Consultation
									<?php } ?>
							</h3>
							<div class="iconbox-desc">
								<?php
									/**
										* Clean Option - txthsq_txt
										*/
										if ( clean_home_option("txthsq_txt") && !is_null(clean_home_option("txthsq_txt")) && !is_array(clean_home_option("txthsq_txt")) ) {
											echo clean_home_option("txthsq_txt");
										} else {
										?>
								Good things come to those who wait, but only the things left by those who hustle
								<?php } ?>
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- Services end -->
  <?php
  	} // close services_status = on
  ?>
