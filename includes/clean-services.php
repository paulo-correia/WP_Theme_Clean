<!-- Service File -->
<?php
//
// Simple Icons Array name to unicode
//
$arr_icons = array (
  "icon-user" => "&#xe005", "icon-people" => "&#xe001", "icon-user-female" => "&#xe000",
  "icon-user-follow" => "&#xe002", "icon-user-following" => "&#xe003",
  "icon-user-unfollow" => "&#xe004", "icon-login" => "&#xe066", "icon-logout" => "&#xe065",
  "icon-emoticon-smile" => "&#xe021", "icon-phone" => "&#xe600", "icon-call-end" => "&#xe048",
  "icon-call-in" => "&#xe047", "icon-call-out" => "&#xe046", "icon-map" => "&#xe033",
  "icon-location-pin" => "&#xe096", "icon-direction" => "&#xe042",
  "icon-directions" => "&#xe041" , "icon-compass" => "&#xe045", "icon-layers" => "&#xe034",
  "icon-menu" => "&#xe601", "icon-list" => "&#xe067", "icon-options-vertical" => "&#xe602",
  "icon-options" => "&#xe603", "icon-arrow-down" => "&#xe604", "icon-arrow-left" => "&#xe605",
  "icon-arrow-right" => "&#xe606", "icon-arrow-up" => "&#xe607",
  "icon-arrow-up-circle" => "&#xe078", "icon-arrow-left-circle" => "&#xe07a",
  "icon-arrow-right-circle" => "&#xe079", "icon-arrow-down-circle" => "&#xe07b",
  "icon-check" => "&#xe080", "icon-clock" => "&#xe081", "icon-plus" => "&#xe095",
  "icon-minus" => "&#xe615", "icon-close" => "&#xe082", "icon-event" => "&#xe619",
  "icon-exclamation" => "&#xe617", "icon-organization" => "&#xe616", "icon-trophy" => "&#xe006",
  "icon-screen-smartphone" => "&#xe010", "icon-screen-desktop" => "&#xe011",
  "icon-plane" => "&#xe012", "icon-notebook" => "&#xe013", "icon-mustache" => "&#xe014",
  "icon-mouse" => "&#xe015", "icon-magnet" => "&#xe016", "icon-energy" => "&#xe020",
  "icon-disc" => "&#xe022", "icon-cursor" => "&#xe06e", "icon-cursor-move" => "&#xe023",
  "icon-crop" => "&#xe024", "icon-chemistry" => "&#xe026", "icon-speedometer" => "&#xe007",
  "icon-shield" => "&#xe00e", "icon-screen-tablet" => "&#xe00f", "icon-magic-wand" => "&#xe017",
  "icon-hourglass" => "&#xe018", "icon-graduation" => "&#xe019", "icon-ghost" => "&#xe01a",
  "icon-game-controller" => "&#xe01b", "icon-fire" => "&#xe01c", "icon-eyeglass" => "&#xe01d",
  "icon-envelope-open" => "&#xe01e", "icon-envelope-letter" => "&#xe01f", "icon-bell" => "&#xe027",
  "icon-badge" => "&#xe028", "icon-anchor" => "&#xe029", "icon-wallet" => "&#xe02a",
  "icon-vector" => "&#xe02b", "icon-speech" => "&#xe02c", "icon-puzzle" => "&#xe02d",
  "icon-printer" => "&#xe02e", "icon-present" => "&#xe02f", "icon-playlist" => "&#xe030",
  "icon-pin" => "&#xe031", "icon-picture" => "&#xe032", "icon-handbag" => "&#xe035",
  "icon-globe-alt" => "&#xe036", "icon-globe" => "&#xe037", "icon-folder-alt" => "&#xe039",
  "icon-folder" => "&#xe089", "icon-film" => "&#xe03a", "icon-feed" => "&#xe03b",
  "icon-drop" => "&#xe03e", "icon-drawer" => "&#xe03f", "icon-docs" => "&#xe040",
  "icon-doc" => "&#xe085", "icon-diamond" => "&#xe043", "icon-cup" => "&#xe044",
  "icon-calculator" => "&#xe049", "icon-bubbles" => "&#xe04a", "icon-briefcase" => "&#xe04b",
  "icon-book-open" => "&#xe04c", "icon-basket-loaded" => "&#xe04d", "icon-basket" => "&#xe04e",
  "icon-bag" => "&#xe04f", "icon-action-undo" => "&#xe050", "icon-action-redo" => "&#xe051",
  "icon-wrench" => "&#xe052", "icon-umbrella" => "&#xe053", "icon-trash" => "&#xe054",
  "icon-tag" => "&#xe055", "icon-support" => "&#xe056", "icon-frame" => "&#xe038",
  "icon-size-fullscreen" => "&#xe057", "icon-size-actual" => "&#xe058", "icon-shuffle" => "&#xe059",
  "icon-share-alt" => "&#xe05a", "icon-share" => "&#xe05b", "icon-rocket" => "&#xe05c",
  "icon-question" => "&#xe05d", "icon-pie-chart" => "&#xe05e", "icon-pencil" => "&#xe05f",
  "icon-note" => "&#xe060", "icon-loop" => "&#xe064", "icon-home" => "&#xe069", "icon-grid" => "&#xe06a",
  "icon-graph" => "&#xe06b", "icon-microphone" => "&#xe063", "icon-music-tone-alt" => "&#xe061",
  "icon-music-tone" => "&#xe062", "icon-earphones-alt" => "&#xe03c", "icon-earphones" => "&#xe03d",
  "icon-equalizer" => "&#xe06c", "icon-like" => "&#xe068", "icon-dislike" => "&#xe06d",
  "icon-control-start" => "&#xe06f", "icon-control-rewind" => "&#xe070", "icon-control-play" => "&#xe071",
  "icon-control-pause" => "&#xe072", "icon-control-forward" => "&#xe073", "icon-control-end" => "&#xe074",
  "icon-volume-1" => "&#xe09f", "icon-volume-2" => "&#xe0a0", "icon-volume-off" => "&#xe0a1",
  "icon-calendar" => "&#xe075", "icon-bulb" => "&#xe076", "icon-chart" => "&#xe077", "icon-ban" => "&#xe07c",
  "icon-bubble" => "&#xe07d", "icon-camrecorder" => "&#xe07e", "icon-camera" => "&#xe07f",
  "icon-cloud-download" => "&#xe083", "icon-cloud-upload" => "&#xe084", "icon-envelope" => "&#xe086",
  "icon-eye" => "&#xe087", "icon-flag" => "&#xe088", "icon-heart" => "&#xe08a", "icon-info" => "&#xe08b",
  "icon-key" => "&#xe08c", "icon-link" => "&#xe08d", "icon-lock" => "&#xe08e", "icon-lock-open" => "&#xe08f",
  "icon-magnifier" => "&#xe090", "icon-magnifier-add" => "&#xe091", "icon-magnifier-remove" => "&#xe092",
  "icon-paper-clip" => "&#xe093", "icon-paper-plane" => "&#xe094", "icon-power" => "&#xe097",
  "icon-refresh" => "&#xe098", "icon-reload" => "&#xe099", "icon-settings" => "&#xe09a", "icon-star" => "&#xe09b",
  "icon-symbol-female" => "&#xe09c", "icon-symbol-male" => "&#xe09d", "icon-target" => "&#xe09e",
  "icon-credit-card" => "&#xe025", "icon-paypal" => "&#xe608", "icon-social-tumblr" => "&#xe00a",
  "icon-social-twitter" => "&#xe009", "icon-social-facebook" => "&#xe00b", "icon-social-instagram" => "&#xe609",
  "icon-social-linkedin" => "&#xe60a", "icon-social-pinterest" => "&#xe60b", "icon-social-github" => "&#xe60c",
  "icon-social-google" => "&#xe60d", "icon-social-reddit" => "&#xe60e", "icon-social-skype" => "&#xe60f",
  "icon-social-dribbble" => "&#xe00d", "icon-social-behance" => "&#xe610", "icon-social-foursqare" => "&#xe611",
  "icon-social-soundcloud" => "&#xe612", "icon-social-spotify" => "&#xe613", "icon-social-stumbleupon" => "&#xe614",
  "icon-social-youtube" => "&#xe008", "icon-social-dropbox" => "&#xe00c", "icon-social-vkontakte" => "&#xe618",
  "icon-social-steam" => "&#xe620"
);

echo '"';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e('Services', 'clean');
  echo ':';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"service_status\" >';

  if (!is_null(cl_show_option("service_status"))) {
    if (cl_show_option("service_status")=="on") {
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
  _e('Services Texts', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo '<input type=\"text\" name=\"supsq_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("supsq_txt"))) {
    echo cl_show_option("supsq_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"'.strtoupper("This is what I do").'\"';
  }

  echo '>';
  echo '<br><br>';
  echo '<textarea name=\"infsq_txt\" cols=\"80\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("infsq_txt"))) {
    echo ">".cl_show_option("infsq_txt")."</textarea>";
  } else {
    echo 'placeholder=\"No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.\">';
    echo '</textarea>';
  }

  echo '</div>';
  echo '</div>';

  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Icons', 'clean');
  echo ':<br><br>';
  echo '</div>';

  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Square', 'clean');

  echo ': <select name=\"iconfsq_txt\" style=\"margin-left: 36px; font-family: \'Simple-Line-Icons\';\">';

  if (!is_null(cl_show_option("iconfsq_txt"))) {
    $option = cl_show_option("iconfsq_txt");
    echo '<option value=\"'.$option.'\" selected>'.$arr_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"icon-magic-wand\" selected>'.$arr_icons["icon-magic-wand"].'</option>';
    unset($arr_icons["icon-magic-wand"]);
  }
  foreach ($arr_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '&nbsp;'.__('Second Square', 'clean').': <select name=\"iconssq_txt\" style=\"margin-left: 36px; font-family: \'Simple-Line-Icons\';\">';

  if (!is_null(cl_show_option("iconssq_txt"))) {
    $option = cl_show_option("iconssq_txt");
    echo '<option value=\"'.$option.'\" selected>'.$arr_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"icon-puzzle\" selected>'.$arr_icons["icon-puzzle"].'</option>';
    unset($arr_icons["icon-puzzle"]);
  }
  foreach ($arr_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '&nbsp;'.__('Third Square', 'clean').': <select name=\"icontsq_txt\" style=\"margin-left: 36px; font-family: \'Simple-Line-Icons\';\">';

  if (!is_null(cl_show_option("icontsq_txt"))) {
    $option = cl_show_option("icontsq_txt");
    echo '<option value=\"'.$option.'\" selected>'.$arr_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"icon-badge\" selected>'.$arr_icons["icon-badge"].'</option>';
    unset($arr_icons["icon-badge"]);
  }
  foreach ($arr_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '&nbsp;'.__('Fourth Square', 'clean').': <select name=\"iconhsq_txt\" style=\"margin-left: 36px; font-family: \'Simple-Line-Icons\';\">';

  if (!is_null(cl_show_option("iconhsq_txt"))) {
    $option = cl_show_option("iconhsq_txt");
    echo '<option value=\"'.$option.'\" selected>'.$arr_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"icon-question\" selected>'.$arr_icons["icon-question"].'</option>';
    unset($arr_icons["icon-question"]);
  }
  foreach ($arr_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '</div>';
  echo '</div>';

  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Titles', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Square', 'clean');
  echo ':<input type=\"text\" name=\"titfsq_txt\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("titfsq_txt"))) {
    echo 'value=\"'.cl_show_option("titfsq_txt").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Web Design").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Second Square', 'clean').':<input type=\"text\" name=\"titssq_txt\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("titssq_txt"))) {
    echo 'value=\"'.cl_show_option("titssq_txt").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Web Programming").'\"';
  }

  echo '>';
  echo '<br><br>';
  _e('Third Square', 'clean');
  echo ':<input type=\"text\" name=\"tittsq_txt\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("tittsq_txt"))) {
    echo 'value=\"'.cl_show_option("tittsq_txt").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Branding").'\"';
  }

  echo '>';
  echo '&nbsp;'.__('Fourth Square', 'clean').':<input type=\"text\" name=\"tithsq_txt\" size=\"30\" style=\"margin-left: 36px;\" ';

  if (!is_null(cl_show_option("tithsq_txt"))) {
    echo 'value=\"'.cl_show_option("tithsq_txt").'\"';
  } else {
    echo 'placeholder=\"'.strtoupper("Consultation").'\"';
  }

  echo '>';
  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e('Texts', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  _e('First Square', 'clean');
  echo ': <textarea name=\"txtfsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtfsq_txt"))) {
    echo '>'.cl_show_option("txtfsq_txt").'</textarea>';
  } else {
    echo 'placeholder=\"Good things come to those who wait, but only the things left by those who hustle.\"></textarea>';
  }

  echo '&nbsp;'.__('Second Square', 'clean').': <textarea name=\"txtssq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txtssq_txt"))) {
    echo '>'.cl_show_option("txtssq_txt").'</textarea>';
  } else {
    echo 'placeholder=\"Good things come to those who wait, but only the things left by those who hustle.\"></textarea>';
  }

  echo '<br><br>';
  _e('Third Square', 'clean');
  echo ': <textarea name=\"txttsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txttsq_txt"))) {
    echo '>'.cl_show_option("txttsq_txt").'</textarea>';
  } else {
    echo 'placeholder=\"Good things come to those who wait, but only the things left by those who hustle.\"></textarea>';
  }

  echo '&nbsp;'.__('Fourth Square', 'clean').': <textarea name=\"txthsq_txt\" cols=\"40\" style=\"margin-left: 36px;\"';

  if (!is_null(cl_show_option("txthsq_txt"))) {
    echo '>'.cl_show_option("txthsq_txt").'</textarea>';
  } else {
    echo 'placeholder=\"Good things come to those who wait, but only the things left by those who hustle.\"></textarea>';
  }

  echo '</div>';
  echo '</div>';
  echo '<br>';

echo '"';
