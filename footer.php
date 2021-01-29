<?php
/**
	* Clean Option - footer_status
	*/
	if ( !clean_home_option("footer_status") || clean_home_option("footer_status") == "on" ) {
?>
<!-- Footer start -->

<footer id="footer">
  <div class="container">
    <div class="row">

      <div class="col-sm-12">

        <ul class="social-links">
					<!-- First Social Network -->
          <li><a href=
					<?php
					/**
						* Clean Option - foot_f_txt
						*/
					if ( clean_home_option("foot_f_txt") && !is_null(clean_home_option("foot_f_txt")) && !is_array(clean_home_option("foot_f_txt")) ) {
						echo '"'.clean_home_option("foot_f_txt").'"';
					} else {
						echo '"index.html#"';
					}
					/**
						* Clean Option - foot_f_nwin
						*/
					if ( clean_home_option("foot_f_nwin") && !is_null(clean_home_option("foot_f_nwin"))  ) {
						if (clean_home_option("foot_f_nwin") == "On") {
							echo 'target="_blank"';
						}
					}
					?>
					class="wow fadeInUp" ><i class=
					<?php
					/**
						* Clean Option - foot_ficon
						*/
					if ( clean_home_option("foot_ficon") && !is_null(clean_home_option("foot_ficon")) && !is_array(clean_home_option("foot_ficon")) ) {
						echo '"fa '.clean_home_option("foot_ficon").'"';
					} else {
						echo '"fa fa-facebook"';
					}
          ?>
					></i></a></li>
					<!-- Second Social Network -->
          <li><a href=
					<?php
					/**
						* Clean Option - foot_s_txt
						*/
					if ( clean_home_option("foot_s_txt") && !is_null(clean_home_option("foot_s_txt")) && !is_array(clean_home_option("foot_s_txt")) ) {
						echo '"'.clean_home_option("foot_s_txt").'"';
					} else {
						echo '"index.html#"';
						}
					/**
						* Clean Option - foot_s_nwin
						*/
					if ( clean_home_option("foot_s_nwin") && !is_null(clean_home_option("foot_s_nwin")) ) {
						if (clean_home_option("foot_s_nwin") == "On") {
							echo 'target="_blank"';
						}
					}
					?>
					class="wow fadeInUp" data-wow-delay=".1s"><i class=
					<?php
					/**
						* Clean Option - foot_sicon
						*/
					if ( clean_home_option("foot_sicon") && !is_null(clean_home_option("foot_sicon")) && !is_array(clean_home_option("foot_sicon")) ) {
						echo '"fa '.clean_home_option("foot_sicon").'"';
					} else {
						echo '"fa fa-twitter"';
					}
					?>
          ></i></a></li>
					<!-- Third Social Network -->
          <li><a href=
					<?php
					/**
						* Clean Option - foot_t_txt
						*/
					if ( clean_home_option("foot_t_txt") && !is_null(clean_home_option("foot_t_txt")) && !is_array(clean_home_option("foot_t_txt")) ) {
						echo '"'.clean_home_option("foot_t_txt").'"';
					} else {
						echo '"index.html#"';
					}
					/**
						* Clean Option - foot_t_nwin
						*/
					if ( clean_home_option("foot_t_nwin") && !is_null(clean_home_option("foot_t_nwin")) ) {
						if (clean_home_option("foot_t_nwin") == "On") {
							echo 'target="_blank"';
						}
					}
					?>
				 class="wow fadeInUp" data-wow-delay=".2s"><i class=
				 <?php
					/**
						* Clean Option - foot_ticon
						*/
					if ( clean_home_option("foot_ticon") && !is_null(clean_home_option("foot_ticon")) && !is_array(clean_home_option("foot_ticon")) ) {
						echo '"fa '.clean_home_option("foot_ticon").'"';
					} else {
						echo '"fa fa-google-plus"';
					}
					?>
          ></i></a></li>
					<!-- Forth Social Network -->
          <li><a href=
					<?php
					/**
						* Clean Option - foot_h_txt
						*/
					if ( clean_home_option("foot_h_txt") && !is_null(clean_home_option("foot_h_txt")) && !is_array(clean_home_option("foot_h_txt")) ) {
						echo '"'.clean_home_option("foot_h_txt").'"';
					} else {
						echo '"index.html#"';
					}
					/**
						* Clean Option - foot_h_nwin
						*/
					if ( clean_home_option("foot_h_nwin") && !is_null(clean_home_option("foot_h_nwin")) ) {
						if (clean_home_option("foot_h_nwin") == "On") {
							echo 'target="_blank"';
						}
					}
					?>
					class="wow fadeInUp" data-wow-delay=".4s"><i class=
					<?php
					/**
						* Clean Option - foot_hicon
						*/
					if ( clean_home_option("foot_hicon") && !is_null(clean_home_option("foot_hicon")) && !is_array(clean_home_option("foot_hicon")) ) {
						echo '"fa '.clean_home_option("foot_hicon").'"';
					} else {
						echo '"fa fa-pinterest"';
					}
					?>
          ></i></a></li>
					<!-- Five Social Network -->
          <li><a href=
						<?php
						/**
							* Clean Option - foot_v_txt
							*/
						if ( clean_home_option("foot_v_txt") &&  !is_null(clean_home_option("foot_v_txt")) && !is_array(clean_home_option("foot_v_txt")) ) {
							echo '"'.clean_home_option("foot_v_txt").'"';
						} else {
							echo '"index.html#"';
						}
						/**
							* Clean Option - foot_v_nwin
							*/
						if ( clean_home_option("foot_v_nwin") && !is_null(clean_home_option("foot_v_nwin")) ) {
							if (clean_home_option("foot_v_nwin") == "On") {
								echo 'target="_blank"';
							}
						}
						?>
						 class="wow fadeInUp" data-wow-delay=".5s"><i class=
						 <?php
					/**
						* Clean Option - foot_vicon
						*/
					if ( clean_home_option("foot_vicon") && !is_null(clean_home_option("foot_vicon")) && !is_array(clean_home_option("foot_vicon")) ) {
						echo '"fa '.clean_home_option("foot_vicon").'"';
					} else {
						echo '"fa fa-envelope"';
					}
          ?>
					></i></a></li>
        </ul>

        <p class="heart">
                      Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                  </p>
                  <p class="copyright">
                      © 2015 John Doe | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>
        </p>

      </div>

    </div><!-- .row -->
  </div><!-- .container -->
</footer>

<!-- Footer end -->
<?php
	} // close footer_status = on
?>

<!-- Scroll to top -->

<div class="scroll-up">
  <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

  <!-- Scroll to top end-->

<?php wp_footer(); ?>

</body>
</html>
