<!-- Section Skills -->
<?php
/**
	* Clean Option - skills_status
	*/
	if ( !clean_home_option("skills_status") || clean_home_option("skills_status") == "on" ) {
?>
    <!-- Skills start -->

    <section class="pfblock pfblock-gray" id="skills">

			<div class="container">

				<div class="row skills">

					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">
																	<?php
																		/**
																			* Clean Option - titskill_txt
																			*/
																			if ( clean_home_option("titskill_txt") && !is_null(clean_home_option("titskill_txt")) && !is_array(clean_home_option("titskill_txt")) ) {
																				echo clean_home_option("titskill_txt");
																			} else {
																			?>
																	My Skills
																	<?php } ?>
																</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
																	<?php
																		/**
																			* Clean Option - txtskill_txt
																			*/
																			if ( clean_home_option("txtskill_txt") && !is_null(clean_home_option("txtskill_txt")) && !is_array(clean_home_option("txtskill_txt")) ) {
																				echo clean_home_option("txtskill_txt");
																			} else {
																			?>
                                    No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
																	<?php } ?>
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="<?php
							/**
								* Clean Option - skillfpt_per
								*/
								if ( clean_home_option("skillfpt_per") && !is_null(clean_home_option("skillfpt_per")) && !is_array(clean_home_option("skillfpt_per")) ) {
									echo clean_home_option("skillfpt_per");
								} else {
						?>80<?php } ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">
															<?php
																/**
																	* Clean Option - skillfpt_per
																	*/
																	if ( clean_home_option("skillfpt_per") && !is_null(clean_home_option("skillfpt_per")) && !is_array(clean_home_option("skillfpt_per")) ) {
																		echo clean_home_option("skillfpt_per");
																	} else {
															?>
															80
														<?php } ?>
														</span>
                        </span>
						<h3 class="text-center">
							<?php
								/**
									* Clean Option - skillfpt_tit
									*/
									if ( clean_home_option("skillfpt_tit") && !is_null(clean_home_option("skillfpt_tit")) && !is_array(clean_home_option("skillfpt_tit")) ) {
										echo clean_home_option("skillfpt_tit");
									} else {
									?>
							Programming
							<?php } ?>
						</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
							<span data-percent="<?php
							/**
								* Clean Option - skillspt_per
								*/
								if ( clean_home_option("skillspt_per") && !is_null(clean_home_option("skillspt_per")) && !is_array(clean_home_option("skillspt_per")) ) {
									echo clean_home_option("skillspt_per");
								} else {
						?>90<?php } ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">
															<?php
																/**
																	* Clean Option - skillspt_per
																	*/
																	if ( clean_home_option("skillspt_per") && !is_null(clean_home_option("skillspt_per")) && !is_array(clean_home_option("skillspt_per")) ) {
																		echo clean_home_option("skillspt_per");
																	} else {
															?>
															90
															<?php } ?>
														</span>
                        </span>
						<h3 class="text-center">
							<?php
								/**
									* Clean Option - skillspt_tit
									*/
									if ( clean_home_option("skillspt_tit") && !is_null(clean_home_option("skillspt_tit")) && !is_array(clean_home_option("skillspt_tit")) ) {
										echo clean_home_option("skillspt_tit");
									} else {
									?>
							Design
							<?php } ?>
						</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="<?php
						/**
							* Clean Option - skilltpt_per
							*/
							if ( clean_home_option("skilltpt_per") && !is_null(clean_home_option("skilltpt_per")) && !is_array(clean_home_option("skilltpt_per")) ) {
								echo clean_home_option("skilltpt_per");
							} else {
					?>85<?php } ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">
															<?php
															/**
																* Clean Option - skilltpt_per
																*/
																if ( clean_home_option("skilltpt_per") && !is_null(clean_home_option("skilltpt_per")) && !is_array(clean_home_option("skilltpt_per")) ) {
																	echo clean_home_option("skilltpt_per");
																} else {
														?>
															85
															<?php } ?>
														</span>
                        </span>
						<h3 class="text-center">
							<?php
							/**
								* Clean Option - skilltpt_tit
								*/
								if ( clean_home_option("skilltpt_tit") && !is_null(clean_home_option("skilltpt_tit")) && !is_array(clean_home_option("skilltpt_tit")) ) {
									echo clean_home_option("skilltpt_tit");
								} else {
							?>
							Marketing
							<?php } ?>
						</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">

						<span data-percent="<?php
						/**
							* Clean Option - skillfhpt_per
							*/
							if ( clean_home_option("skillfhpt_per") && !is_null(clean_home_option("skillfhpt_per")) && !is_array(clean_home_option("skillfhpt_per")) ) {
								echo clean_home_option("skillfhpt_per");
							} else {
					?>95<?php } ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">
															<?php
															/**
																* Clean Option - skillfhpt_per
																*/
																if ( clean_home_option("skillfhpt_per") && !is_null(clean_home_option("skillfhpt_per")) && !is_array(clean_home_option("skillfhpt_per")) ) {
																	echo clean_home_option("skillfhpt_per");
																} else {
														?>
															95
															<?php } ?>
														</span>
                        </span>
						<h3 class="text-center">
							<?php
							/**
								* Clean Option - skillfhpt_tit
								*/
								if ( clean_home_option("skillfhpt_tit") &&  !is_null(clean_home_option("skillfhpt_tit")) && !is_array(clean_home_option("skillfhpt_tit")) ) {
									echo clean_home_option("skillfhpt_tit");
								} else {
						  ?>
							UI / UX
							<?php } ?>
						</h3>
					</div>

				</div><!--End row -->

			</div>

    </section>

    <!-- Skills end -->
<?php
	} // close skills_status = on
?>
