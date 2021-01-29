<!-- Contact File -->
<?php
echo '"';
  echo '<div class=\"row\"><!-- Open Contact Row 1 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  _e( 'Contact', 'clean' );
  echo ':</div><!-- Close Contact Space -->';
  echo '<div class=\"col-sm-8\"><!-- Open Contact Data -->';
  echo '<select name=\"contact_status\" >';

  if (!is_null(cl_show_option("contact_status"))) {
    if (cl_show_option("contact_status")=="on") {
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
  echo '</div><!-- Close Contact Data -->';
  echo '</div><!-- Close Contact Row -->';
  echo '<div class=\"row\"><!-- Open Contact Row 2 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  echo '<br><br>';
  _e( 'Contact Texts', 'clean' );
  echo ':<br><br>';
  echo '</div><!-- Close Contact Space -->';
  echo '<div class=\"col-sm-8\"><!-- Open Contact Data -->';
  echo '<br>';
  echo '<input type=\"text\" name=\"titcont_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("titcont_txt"))) {
    echo cl_show_option("titcont_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("Drop me a line").'\"';
  }

  echo '>';
  echo '<br><br>';
  echo '<textarea name=\"txtcont_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtcont_txt"))) {
    echo ">".cl_show_option("txtcont_txt")."</textarea>";
  } else {
    echo 'placeholder=\"No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.\">';
    echo '</textarea>';
  }

  echo '</div><!-- Close Contact Data -->';
  echo '</div><!-- Close Contact Row -->';
  echo '<div class=\"row\"><!-- Open Contact Row 3 -->';
  echo '<div class=\"col-sm-2\"><!-- Open Contact Space -->';
  echo '<br><br>';
  _e( 'Contact Form', 'clean' );
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\"><!-- Open Contact Data -->';
  echo '<br>';
  echo 'ID: <input type=\"text\" name=\"idcont_txt\" size=\"5\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("idcont_txt"))) {
    echo cl_show_option("idcont_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"26\"';
  }

  echo '>';
  echo '</div><!-- Close Contact Data -->';
  echo '</div><!-- Close Contact Row -->';



echo '"';
