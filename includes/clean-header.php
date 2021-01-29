<!-- Header File -->
<?php

echo '"';

  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e( 'Header', 'clean' );
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"header_status\" >';

  if (!is_null(cl_show_option("header_status"))) {
    if (cl_show_option("header_status")=="on") {
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
  echo '</div>';
  echo '</div>';
  echo '<br>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e( 'Header Image', 'clean');
  echo ':<br> 2365 x 1774 px <br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<img class=\"header_image\" src=\"';
  if (!is_null(cl_show_option("header_image"))) {
    echo cl_show_option("header_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/cover.jpg';
  }
  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"header_image_url\" type=\"text\" name=\"header_image\" size=\"60\" value=\"';
  if (!is_null(cl_show_option("header_image"))) {
    echo cl_show_option("header_image");
  }
  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"header_image_upload\">'.__( 'Upload', 'clean' ).'</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<br>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e( 'Image Blur', 'clean' );
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"header_blur\" >';

  if (!is_null(cl_show_option("header_blur"))) {
    if (cl_show_option("header_blur")=="on") {
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
  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>'.__( 'Header Texts', 'clean' ).':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<input type=\"text\" name=\"sup_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';
  if (!is_null(cl_show_option("sup_txt"))) {
    echo cl_show_option("sup_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"Hello, my name is John Doe and I am\"';
  }
  echo '>';
  echo '<br><br>';
  echo '<input type=\"text\" name=\"mid_txt\" size=\"40\" style=\"margin-left: 36px;\" value=\"';
  if (!is_null(cl_show_option("mid_txt"))) {
    echo cl_show_option("mid_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("Full Stack Web Developer").'\"';
  }
  echo '>';
  echo '<br><br>';
  echo '<input type=\"text\" name=\"inf_txt\" size=\"50\" style=\"margin-left: 36px;\" value=\"';
  if (!is_null(cl_show_option("inf_txt"))) {
    echo cl_show_option("inf_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"creating modern and responsive Web Application\"';
  }
  echo '>';
  echo '</div>';
  echo '</div>';
  //echo '</div>';
  echo '<br>';
echo '"';
