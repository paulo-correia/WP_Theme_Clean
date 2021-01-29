<!-- Section Portfolio -->
<?php
	/**
		* Clean Option - portfolio_status
		*/
		if ( !clean_home_option("portfolio_status") || clean_home_option("portfolio_status") == "on" ) {
?>
	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">
							<?php
								/**
									* Clean Option - titport_txt
									*/
									if ( clean_home_option("titport_txt") && !is_null(clean_home_option("titport_txt")) && !is_array(clean_home_option("titport_txt")) ) {
										echo clean_home_option("titport_txt");
									} else {
									?>
							My works
								<?php } ?>
						</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							<?php
								/**
									* Clean Option - txtport_txt
									*/
									if ( clean_home_option("txtport_txt") && !is_null(clean_home_option("txtport_txt")) && !is_array(clean_home_option("txtport_txt")) ) {
										echo clean_home_option("txtport_txt");
									} else {
							?>
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
							<?php } ?>
						</div>
					</div>

				</div>

			</div><!-- .row -->


            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #1 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
															/**
																* Clean Option - portfsq_image
																*/
															if ( clean_home_option("portfsq_image") && !is_null(clean_home_option("portfsq_image")) && !is_array(clean_home_option("portfsq_image")) ) {
																	echo clean_home_option("portfsq_image");
															} else {
																 echo get_stylesheet_directory_uri().'/images/item-1.jpg';
															}
														 ?>" alt="img01"/>
                            <figcaption>
															<h2>
															<?php
																/**
																	* Clean Option - portfsq_tit
																	*/
																	if ( clean_home_option("portfsq_tit") && !is_null(clean_home_option("portfsq_tit")) && !is_array(clean_home_option("portfsq_tit")) ) {
																		$portfsq_tit = explode( " ", clean_home_option("portfsq_tit") );
																		foreach ($portfsq_tit as $fsq_tit) {
																			echo $fsq_tit."&nbsp;<span>";
																		}
																	} else {
															?>
                                Crazy <span>Shark
																<?php } ?>
																</span>	</h2>
                                <p>
																	<?php
																		/**
																			* Clean Option - portfsq_txt
																			*/
																			if ( clean_home_option("portfsq_txt") && !is_null(clean_home_option("portfsq_txt")) && !is_array(clean_home_option("portfsq_txt")) ) {
																				echo clean_home_option("portfsq_txt");
																			} else {
																	?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #2 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
															/**
																* Clean Option - portssq_image
																*/
																if ( clean_home_option("portssq_image") && !is_null(clean_home_option("portssq_image")) && !is_array(clean_home_option("portssq_image")) ) {
																	echo clean_home_option("portssq_image");
																} else {
															 		echo get_stylesheet_directory_uri().'/images/item-2.jpg';
																}
													 		?>" alt="img02"/>
                            <figcaption>
                                <h2>
																<?php
																		/**
																			* Clean Option - portssq_tit
																			*/
																			if ( clean_home_option("portssq_tit") && !is_null(clean_home_option("portssq_tit")) && !is_array(clean_home_option("portssq_tit")) ) {
																				$portssq_tit = explode( " ", clean_home_option("portssq_tit") );
																				foreach ($portssq_tit as $ssq_tit) {
																					echo $ssq_tit."&nbsp;<span>";
																				}
																			} else {
																	?>
																	Funny <span>Tortoise
																		<?php } ?>
																	</span></h2>
                                <p>
																	<?php
																			/**
																				* Clean Option - portssq_txt
																				*/
																				if ( clean_home_option("portssq_txt") && !is_null(clean_home_option("portssq_txt")) && !is_array(clean_home_option("portssq_txt")) ) {
																					echo clean_home_option("portssq_txt");
																				} else {
																		?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #3 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
														/**
															* Clean Option - porttsq_image
															*/
															if ( clean_home_option("porttsq_image") && !is_null(clean_home_option("porttsq_image")) && !is_array(clean_home_option("porttsq_image")) ) {
																echo clean_home_option("porttsq_image");
															} else {
																echo get_stylesheet_directory_uri().'/images/item-3.jpg';
															}
														?>" alt="img03"/>
                            <figcaption>
                                <h2>
																<?php
																			/**
																				* Clean Option - porttsq_tit
																				*/
																				if ( clean_home_option("porttsq_tit") && !is_null(clean_home_option("porttsq_tit")) && !is_array(clean_home_option("porttsq_tit")) ) {
																					$porttsq_tit = explode( " ", clean_home_option("porttsq_tit") );
																					foreach ($porttsq_tit as $tsq_tit) {
																						echo $tsq_tit."&nbsp;<span>";
																					}
																				} else {
																		?>
																	The <span>Hat
																		<?php } ?>
																	</span></h2>
                                <p>
																	<?php
																				/**
																					* Clean Option - porttsq_txt
																					*/
																					if ( clean_home_option("porttsq_txt") && !is_null(clean_home_option("porttsq_txt")) && !is_array(clean_home_option("porttsq_txt")) ) {
																						echo clean_home_option("porttsq_txt");
																					} else {
																			?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #4 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
														/**
															* Clean Option - porthsq_image
															*/
															if ( clean_home_option("porthsq_image") && !is_null(clean_home_option("porthsq_image")) && !is_array(clean_home_option("porthsq_image")) ) {
																echo clean_home_option("porthsq_image");
															} else {
																echo get_stylesheet_directory_uri().'/images/item-4.jpg';
															}
 														?>" alt="img04"/>
                            <figcaption>
                                <h2>
																	<?php
																				/**
																					* Clean Option - porthsq_tit
																					*/
																					if ( clean_home_option("porthsq_tit") && !is_null(clean_home_option("porthsq_tit")) && !is_array(clean_home_option("porthsq_tit")) ) {
																						$porthsq_tit = explode( " ", clean_home_option("porthsq_tit") );
																						foreach ($porthsq_tit as $hsq_tit) {
																							echo $hsq_tit."&nbsp;<span>";
																						}
																					} else {
																			?>
																	Bang <span>Bang
																		<?php } ?>
																	</span></h2>
                                <p>
																	<?php
																				/**
																					* Clean Option - porthsq_txt
																					*/
																					if ( clean_home_option("porthsq_txt") && !is_null(clean_home_option("porthsq_txt")) && !is_array(clean_home_option("porthsq_txt")) ) {
																						echo clean_home_option("porthsq_txt");
																					} else {
																			?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #5 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
														/**
															* Clean Option - portfvsq_image
															*/
															if ( clean_home_option("portfvsq_image") && !is_null(clean_home_option("portfvsq_image")) && !is_array(clean_home_option("portfvsq_image")) ) {
																echo clean_home_option("portfvsq_image");
															} else {
																echo get_stylesheet_directory_uri().'/images/item-5.jpg';
															}
 														?>" alt="img05"/>
                            <figcaption>
                                <h2>
																	<?php
																				/**
																					* Clean Option - portfvsq_tit
																					*/
																					if ( clean_home_option("portfvsq_tit") && !is_null(clean_home_option("portfvsq_tit")) && !is_array(clean_home_option("portfvsq_tit")) ) {
																						$portfvsq_tit = explode( " ", clean_home_option("portfvsq_tit") );
																						foreach ($portfvsq_tit as $fvsq_tit) {
																							echo $fvsq_tit."&nbsp;<span>";
																						}
																					} else {
																			?>
																	Crypton <span>Dude
																		<?php } ?>
																	</span></h2>
                                <p>
																	<?php
																				/**
																					* Clean Option - portfvsq_txt
																					*/
																					if ( clean_home_option("portfvsq_txt") && !is_null(clean_home_option("portfvsq_txt")) && !is_array(clean_home_option("portfvsq_txt")) ) {
																						echo clean_home_option("portfvsq_txt");
																					} else {
																			?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
										<!-- Image #6 -->
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php
														/**
															* Clean Option - portsxsq_image
															*/
															if ( clean_home_option("portsxsq_image") && !is_null(clean_home_option("portsxsq_image")) && !is_array(clean_home_option("portsxsq_image")) ) {
																echo clean_home_option("portsxsq_image");
															} else {
																echo get_stylesheet_directory_uri().'/images/item-6.jpg';
															}
														 ?>" alt="img06"/>
                            <figcaption>
                                <h2>
																	<?php
																				/**
																					* Clean Option - portsxsq_tit
																					*/
																					if ( clean_home_option("portsxsq_tit") && !is_null(clean_home_option("portsxsq_tit")) && !is_array(clean_home_option("portsxsq_tit")) ) {
																						$portsxsq_tit = explode( " ", clean_home_option("portsxsq_tit") );
																						foreach ($portsxsq_tit as $sxsq_tit) {
																							echo $sxsq_tit."&nbsp;<span>";
																						}
																					} else {
																			?>
																	Don't <span>Poke
																		<?php } ?>
																	</span></h2>
                                <p>
																	<?php
																				/**
																					* Clean Option - portsxsq_txt
																					*/
																					if ( clean_home_option("portsxsq_txt") && !is_null(clean_home_option("portsxsq_txt")) && !is_array(clean_home_option("portsxsq_txt")) ) {
																						echo clean_home_option("portsxsq_txt");
																					} else {
																			?>
																	Lily likes to play with crayons and pencils
																	<?php } ?>
																</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->
<?php
		} // close portfolio_status = on
?>
