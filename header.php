<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php wp_head(); ?>

</head>
<body>

  	<!-- Preloader -->

		<div id="preloader">
  		<div id="status"></div>
  	</div>

		<?php
			/**
				* Clean Option - header_status
				*/
				if ( !clean_home_option("header_status") || clean_home_option("header_status") == "on" ) {
		?>

  	<!-- Home start -->

		<?php
			/**
				* Clean Option - header_image
				*/
				$header_image_style='';
				if ( clean_home_option("header_image") && !is_null(clean_home_option("header_image")) && !is_array(clean_home_option("header_image")) ) {
					$header_image_style='style="background:url('.clean_home_option("header_image").')"';
				}
				echo '<section id="home" class="pfblock-image screen-height" '.$header_image_style.'>';
		 ?>
          <div class="home-overlay"
					<?php
					/**
						* Clean Option - header_blur
						*/
						if ( clean_home_option("header_blur") && !is_null(clean_home_option("header_blur")) ) {
							if ( clean_home_option("header_blur") == "off" ) {
							echo "style='background-image: unset' ";
							} // close header_blur
						} // close header_blur = off
					?>
					></div>
  		<div class="intro">
  			<div class="start">
					<?php
						/**
							* Clean Option - sup_txt
						  */
						if ( clean_home_option("sup_txt") && !is_null(clean_home_option("sup_txt")) && !is_array(clean_home_option("sup_txt")) ) {
							echo clean_home_option("sup_txt");
						} else {
				 		?>
					Hello, my name is John Doe and I am
				<?php } ?>
				</div>
  			<h1>
					<?php
						/**
							* Clean Option - mid_txt
						  */
						if ( clean_home_option("mid_txt") && !is_null(clean_home_option("mid_txt")) && !is_array(clean_home_option("mid_txt")) ) {
							echo clean_home_option("mid_txt");
						} else {
				 		?>
					Full Stack Web Developer
				<?php } ?>
				</h1>
  			<div class="start">
					<?php
						/**
							* Clean Option - inf_txt
						  */
						if ( clean_home_option("inf_txt") && !is_null(clean_home_option("inf_txt")) && !is_array(clean_home_option("inf_txt")) ) {
							echo clean_home_option("inf_txt");
						} else {
				 		?>
					creating modern and responsive Web Application
				<?php } ?>
					</div>
  		</div>

          <a href="#services">
  		<div class="scroll-down">
              <span>
                  <i class="fa fa-angle-down fa-2x"></i>
              </span>
  		</div>
          </a>

  	</section>

  	<!-- Home end -->
		<?php
				}	// close header_status = on
		 ?>

  	<!-- Navigation start -->

  	<header class="header">

  		<nav class="navbar navbar-custom" role="navigation">

  			<div class="container">

  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" href="index.html"><?php echo get_userdata(1)->first_name;  ?></a>
  				</div>

					<?php if ( has_nav_menu( 'primary' ) ) : ?>
		      <?php
								$menuLocations = get_nav_menu_locations();
		            $menuID = $menuLocations['primary'];
		            $primaryNav = wp_get_nav_menu_items($menuID);
		      ?>
		        <ul class="nav navbar-nav navbar-right ">
		      <?php
		            foreach ( $primaryNav as $navItem ) {
		              echo '<li>';
		              echo '<a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
		              echo '</li>';
		            }

		      ?>
		        </ul>
				  <?php endif; ?>

  			</div><!-- .container -->

  		</nav>

  	</header>

  	<!-- Navigation end -->
