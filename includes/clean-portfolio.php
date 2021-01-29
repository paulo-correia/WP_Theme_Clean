<!-- Portfolio File -->
<?php

echo '"';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e('Portfolio', 'clean');
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"portfolio_status\" >';

  if (!is_null(cl_show_option("portfolio_status"))) {
    if (cl_show_option("portfolio_status")=="on") {
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
  _e('Portfolio Texts', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<input type=\"text\" name=\"titport_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("titport_txt"))) {
    echo cl_show_option("titport_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("My Works").'\"';
  }

  echo '>';
  echo '<br><br>';
  echo '<textarea name=\"txtport_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtport_txt"))) {
    echo ">".cl_show_option("txtport_txt")."</textarea>";
  } else {
    echo 'placeholder=\"No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.\">';
    echo '</textarea>';
  }

  echo '</div>';
  echo '</div>';
  //echo '</div>';
  //echo '</div>';
  //echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>'.__('Titles', 'clean').':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Square', 'clean');
  echo ':<input type=\"text\" name=\"portfsq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("portfsq_tit"))) {
    echo 'value=\"'.cl_show_option("portfsq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Crazy Shark").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Second Square', 'clean').':<input type=\"text\" name=\"portssq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("portssq_tit"))) {
    echo 'value=\"'.cl_show_option("portssq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Funny Tortoise").'\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Third Square', 'clean');
  echo ':<input type=\"text\" name=\"porttsq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("porttsq_tit"))) {
    echo 'value=\"'.cl_show_option("porttsq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("The Hat").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Fourth Square', 'clean').':<input type=\"text\" name=\"porthsq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("porthsq_tit"))) {
    echo 'value=\"'.cl_show_option("porthsq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Bang Bang").'\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Fifth Square', 'clean');
  echo ':<input type=\"text\" name=\"portfvsq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("portfvsq_tit"))) {
    echo 'value=\"'.cl_show_option("portfvsq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Crypton Dude").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Sixth Square', 'clean').':<input type=\"text\" name=\"portsxsq_tit\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("portsxsq_tit"))) {
    echo 'value=\"'.cl_show_option("portsxsq_tit").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Don't Poke").'\"';
  }

  echo '>';
  echo '</div>';
  echo '</div>';
  echo '<br>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Texts', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  _e('First Square', 'clean');
  echo ':<textarea name=\"portfsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("portfsq_txt"))) {
    echo ">".cl_show_option("portfsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '&nbsp;'.__('Second Square', 'clean').':<textarea name=\"portssq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("portssq_txt"))) {
    echo ">".cl_show_option("portssq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '<br><br>';
  _e('Third Square', 'clean');
  echo ':<textarea name=\"porttsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("porttsq_txt"))) {
    echo ">".cl_show_option("porttsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '&nbsp;'.__('Fourth Square', 'clean').':<textarea name=\"porthsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("porthsq_txt"))) {
    echo ">".cl_show_option("porthsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '<br><br>';
  _e('Fifth Square', 'clean');
  echo ':<textarea name=\"portfvsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("portfvsq_txt"))) {
    echo ">".cl_show_option("portfvsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '&nbsp;'.__('Sixth Square', 'clean').':<textarea name=\"portsxsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("portsxsq_txt"))) {
    echo ">".cl_show_option("portsxsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"'.strtoupper("Lily likes to play with crayons and pencils").'\">';
    echo '</textarea>';
  }

  echo '</div>';
  echo '</div>';
  echo '<br><br>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Images', 'clean');
  echo ':<br> 2560 x 1600 px <br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  // 1a Imagem
  echo '<img class=\"portfsq_image\" src=\"';

  if (!is_null(cl_show_option("portfsq_image"))) {
    echo cl_show_option("portfsq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-1.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"portfsq_image_url\" type=\"text\" name=\"portfsq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("portfsq_image"))) {
    echo cl_show_option("portfsq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"portfsq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  // 2a Imagem
  echo '<img class=\"portssq_image\" src=\"';

  if (!is_null(cl_show_option("portssq_image"))) {
    echo cl_show_option("portssq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-2.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"portssq_image_url\" type=\"text\" name=\"portssq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("portssq_image"))) {
    echo cl_show_option("portssq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"portssq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  // 3a Imagem
  echo '<img class=\"porttsq_image\" src=\"';

  if (!is_null(cl_show_option("porttsq_image"))) {
    echo cl_show_option("porttsq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-3.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"porttsq_image_url\" type=\"text\" name=\"porttsq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("porttsq_image"))) {
    echo cl_show_option("porttsq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"porttsq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  // 4a Imagem
  echo '<img class=\"porthsq_image\" src=\"';

  if (!is_null(cl_show_option("porthsq_image"))) {
    echo cl_show_option("porthsq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-4.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"porthsq_image_url\" type=\"text\" name=\"porthsq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("porthsq_image"))) {
    echo cl_show_option("porthsq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"porthsq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  // 5a Imagem
  echo '<img class=\"portfvsq_image\" src=\"';

  if (!is_null(cl_show_option("portfvsq_image"))) {
    echo cl_show_option("portfvsq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-5.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"portfvsq_image_url\" type=\"text\" name=\"portfvsq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("portfvsq_image"))) {
    echo cl_show_option("portfvsq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"portfvsq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '<br><br>';
  // 6a Imagem
  echo '<img class=\"portsxsq_image\" src=\"';

  if (!is_null(cl_show_option("portsxsq_image"))) {
    echo cl_show_option("portsxsq_image").'\"';
  } else {
    echo '../wp-content/themes/clean/images/item-6.jpg';
  }

  echo '\" height=\"100\" width=\"100\" />&nbsp;';
  echo '<input class=\"portsxsq_image_url\" type=\"text\" name=\"portsxsq_image\" size=\"60\" value=\"';

  if (!is_null(cl_show_option("portsxsq_image"))) {
    echo cl_show_option("portsxsq_image");
  }

  echo '\" >&nbsp;';
  echo '<a href=\"#\" class=\"portsxsq_image_upload\">'.__('Upload', 'clean').'</a>';
  echo '</div>';
  echo '</div>';
  echo '<br>';
echo '"';
