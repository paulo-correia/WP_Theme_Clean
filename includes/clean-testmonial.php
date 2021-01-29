<!-- Testmonial File -->
<?php
echo '"';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e('Testmonial', 'clean');
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"tesl_status\" >';

  if (!is_null(cl_show_option("tesl_status"))) {
    if (cl_show_option("tesl_status")=="on") {
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
  echo '<br><br>';
  _e('Texts of Testimonies','clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('Title', 'clean');
  echo ': <input type=\"text\" name=\"tittesl_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("tittesl_txt"))) {
    echo cl_show_option("tittesl_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("What my clients say").'\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Subtitle', 'clean');
  echo ': <textarea name=\"txttesl_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txttesl_txt"))) {
    echo ">".cl_show_option("txttesl_txt")."</textarea>";
  } else {
    echo 'placeholder=\"No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.\">';
    echo '</textarea>';
  }

  echo '<br><br>';
  _e('First Testimony', 'clean');
  echo ': <textarea name=\"teslfd_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("teslfd_txt"))) {
    echo ">".cl_show_option("teslfd_txt")."</textarea>";
  } else {
    echo 'placeholder=\"Work with John was a pleasure. He understood exactly what I wanted and created an awesome site for my company.\">';
    echo '</textarea>';
  }

  echo '<br><br>';
  _e('First Name', 'clean');
  echo ': <input type=\"text\" name=\"teslfn_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("teslfn_txt"))) {
    echo cl_show_option("teslfn_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"Pino Caruso\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Second Testimony', 'clean');
  echo ': <textarea name=\"teslsd_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("teslsd_txt"))) {
    echo ">".cl_show_option("teslsd_txt")."</textarea>";
  } else {
    echo 'placeholder=\"I\'m really happy with the results. Get 100% satisfaction is difficult but Alex got it without problems.\">';
    echo '</textarea>';
  }

  echo '<br><br>';
  _e('Second Name', 'clean');
  echo ': <input type=\"text\" name=\"teslsn_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("teslsn_txt"))) {
    echo cl_show_option("teslsn_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"Jane Doe\"';
  }

  echo '>';
  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Testimonials Images', 'clean');
  echo ':<br> 210 x 140 px<br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<img class=\"teslfd_image\" src=\"';

  if (!is_null(cl_show_option("teslfd_image"))) {
    echo cl_show_option("teslfd_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/client-1.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"teslfd_image_url\" type=\"text\" name=\"teslfd_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("teslfd_image"))) {
    echo cl_show_option("teslfd_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"teslfd_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  echo '<img class=\"teslsd_image\" src=\"';

  if (!is_null(cl_show_option("teslsd_image"))) {
    echo cl_show_option("teslsd_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/client-2.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"teslsd_image_url\" type=\"text\" name=\"teslsd_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("teslsd_image"))) {
    echo cl_show_option("teslsd_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"teslsd_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '</div>';
  echo '</div>';
  echo '<br>';


echo '"';


?>
