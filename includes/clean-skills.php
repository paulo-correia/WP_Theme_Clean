<!-- Skills File -->
<?php

echo '"';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e('Skills', 'clean');
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"skills_status\" >';

  if (!is_null(cl_show_option("skills_status"))) {
    if (cl_show_option("skills_status")=="on") {
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
  _e('Skills Texts', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<input type=\"text\" name=\"titskill_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("titskill_txt"))) {
    echo cl_show_option("titskill_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("My Skills").'\"';
  }

  echo '>';
  echo '<br><br>';
  echo '<textarea name=\"txtskill_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtskill_txt"))) {
    echo ">".cl_show_option("txtskill_txt")."</textarea>";
  } else {
    echo 'placeholder=\"No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.\">';
    echo '</textarea>';
  }

  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Percentage Titles', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Percentage', 'clean');
  echo ': <input type=\"text\" name=\"skillfpt_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillfpt_tit"))) {
    echo 'value=\"'.cl_show_option("skillfpt_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Programming").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Second Percentage', 'clean').': <input type=\"text\" name=\"skillspt_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillspt_tit"))) {
    echo 'value=\"'.cl_show_option("skillspt_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Design").'\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Third Percentage', 'clean');
  echo ': <input type=\"text\" name=\"skilltpt_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skilltpt_tit"))) {
    echo 'value=\"'.cl_show_option("skilltpt_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Marketing").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Fourth Percentage', 'clean').': <input type=\"text\" name=\"skillfhpt_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillfhpt_tit"))) {
    echo 'value=\"'.cl_show_option("skillfhpt_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Ui / Ux").'\"';
  }

  echo '>';
  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Percentages', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Percentage', 'clean');
  echo ': <input type=\"text\" name=\"skillfpt_per\" size=\"4\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillfpt_per"))) {
    echo 'value=\"'.cl_show_option("skillfpt_per").'\"';
  } else {
    echo 'placeholder=\"80\"';
  }

  echo '>&nbsp;%';
  echo '&nbsp;'.__('Second Percentage', 'clean').': <input type=\"text\" name=\"skillspt_per\" size=\"4\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillspt_per"))) {
    echo 'value=\"'.cl_show_option("skillspt_per").'\"';
  } else {
    echo 'placeholder=\"90\"';
  }

  echo '>&nbsp;%';
  echo '<br><br>';
  _e('Third Percentage', 'clean');
  echo ': <input type=\"text\" name=\"skilltpt_per\" size=\"4\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skilltpt_per"))) {
    echo 'value=\"'.cl_show_option("skilltpt_per").'\"';
  } else {
    echo 'placeholder=\"85\"';
  }

  echo '>&nbsp;%';
  echo '&nbsp;'.__('Fourth Percentage', 'clean').': <input type=\"text\" name=\"skillfhpt_per\" size=\"4\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("skillfhpt_per"))) {
    echo 'value=\"'.cl_show_option("skillfhpt_per").'\"';
  } else {
    echo 'placeholder=\"95\"';
  }

  echo '>&nbsp;%';
  echo '</div>';
  echo '</div>';
  echo '<br>';
echo '"';
