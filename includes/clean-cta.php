<!-- Call To Action File -->
<?php

echo '"';
  echo '<div class=\"row\"><!-- Open Cta Row 1 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Cta Space -->';
  _e( 'Call To Action', 'clean' );
  echo ':</div><!-- Close Cta Space -->';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"cta_status\" ><!-- Open Cta Data -->';

  if (!is_null(cl_show_option("cta_status"))) {
    if (cl_show_option("cta_status")=="on") {
      echo '<option value=\"on\">'.__( 'On', 'clean' ).'</option>';
      echo '<option value=\"off\">'.__( 'Off', 'clean' ).'</option>';
    } else {
      echo '<option value=\"off\">'.__( 'Off', 'clean' ).'</option>';
      echo '<option value=\"on\">'.__( 'On', 'clean' ).'</option>';
    }
  } else {
    echo '<option value=\"on\">'.__( 'On', 'clean' ).'</option>';
    echo '<option value=\"off\">'.__( 'Off', 'clean' ).'</option>';
  }

  echo '</select>';
  echo '</div><!-- Close Cta Data -->';
  echo '</div><!-- Close Cta Row -->';
  echo '<div class=\"row\"><!-- Open Cta Row 2 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  echo '<br><br>';
  _e( 'Call To Action Texts', 'clean' );
  echo ':<br><br>';
  echo '</div><!-- Close Cta Space -->';
  echo '<div class=\"col-sm-8\"><!-- Open Cta Data -->';
  echo '<br>';
  echo '<input type=\"text\" name=\"titcta_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("titcta_txt"))) {
    echo cl_show_option("titcta_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("Are you ready to start?").'\"';
  }

  echo '>';
  echo '<br><br>';
  echo '<textarea name=\"txtcta_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtcta_txt"))) {
    echo ">".cl_show_option("txtcta_txt")."</textarea>";
  } else {
    echo 'placeholder=\"I\'m available for freelance projects.\">';
    echo '</textarea>';
  }

  echo '</div><!-- Close Cta Data -->';
  echo '</div><!-- Close Cta Row -->';
  echo '<div class=\"row\"><!-- Open Cta Row 3 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  echo '<br><br>';
  _e( 'Button Text', 'clean' );
  echo ':<br><br>';
  echo '</div><!-- Close Cta Space -->';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<input type=\"text\" name=\"btncta_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("btncta_txt"))) {
    echo cl_show_option("btncta_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("Hire Me").'\"';
  }

  echo '>';
  echo '</div><!-- Close Cta Data -->';
  echo '</div><!-- Close Cta Row -->';
  echo '<div class=\"row\"><!-- Open Cta Row 4 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  echo '<br><br>';
  _e( 'Background Image', 'clean' );
  echo ':<br> 1920 x 300 px<br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<img class=\"cta_image\" src=\"';

  if (!is_null(cl_show_option("cta_image"))) {
    echo cl_show_option("cta_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/bkg_cta-3.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"cta_image_url\" type=\"text\" name=\"cta_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("cta_image"))) {
    echo cl_show_option("cta_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"cta_image_upload\">'.__( 'Upload', 'clean' ).'</a>';
  echo '</div>';
  echo '</div><!-- Close Cta Row -->';
  echo '<br>';

echo '"';
