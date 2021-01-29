<!-- Aqui vão estar as configurações de Rodapé -->
<?php
//
// Simple Icons Array name to unicode
//
$footer_icons = array (
  "fa-adjust"=>"&#xf042", "fa-adn"=>"&#xf170", "fa-align-center"=>"&#xf037", "fa-align-justify"=>"&#xf039",
  "fa-align-left"=>"&#xf036", "fa-align-right"=>"&#xf038", "fa-ambulance"=>"&#xf0f9", "fa-anchor"=>"&#xf13d",
  "fa-android"=>"&#xf17b", "fa-angle-double-down"=>"&#xf103", "fa-angle-double-left"=>"&#xf100", "fa-angle-double-right"=>"&#xf101",
  "fa-angle-double-up"=>"&#xf102", "fa-angle-down"=>"&#xf107", "fa-angle-left"=>"&#xf104", "fa-angle-right"=>"&#xf105",
  "fa-angle-up"=>"&#xf106", "fa-apple"=>"&#xf179", "fa-archive"=>"&#xf187", "fa-arrow-circle-down"=>"&#xf0ab",
  "fa-arrow-circle-left"=>"&#xf0a8", "fa-arrow-circle-o-down"=>"&#xf01a", "fa-arrow-circle-o-left"=>"&#xf190", "fa-arrow-circle-o-right"=>"&#xf18e",
  "fa-arrow-circle-o-up"=>"&#xf01b", "fa-arrow-circle-right"=>"&#xf0a9", "fa-arrow-circle-up"=>"&#xf0aa", "fa-arrow-down"=>"&#xf063",
  "fa-arrow-left"=>"&#xf060", "fa-arrow-right"=>"&#xf061", "fa-arrow-up"=>"&#xf062", "fa-arrows"=>"&#xf047",
  "fa-arrows-alt"=>"&#xf0b2", "fa-arrows-h"=>"&#xf07e", "fa-arrows-v"=>"&#xf07d", "fa-asterisk"=>"&#xf069",
  "fa-backward"=>"&#xf04a", "fa-ban"=>"&#xf05e", "fa-bar-chart"=>"&#xf080", "fa-bar-chart-o"=>"&#xf080",
  "fa-barcode"=>"&#xf02a", "fa-bars"=>"&#xf0c9", "fa-beer"=>"&#xf0fc", "fa-bell"=>"&#xf0f3",
  "fa-bell-o"=>"&#xf0a2", "fa-bitbucket"=>"&#xf171", "fa-bitbucket-square"=>"&#xf172", "fa-bitcoin "=>"&#xf15a",
  "fa-bold"=>"&#xf032", "fa-bolt"=>"&#xf0e7", "fa-book"=>"&#xf02d", "fa-bookmark"=>"&#xf02e",
  "fa-bookmark-o"=>"&#xf097", "fa-briefcase"=>"&#xf0b1", "fa-btc"=>"&#xf15a", "fa-bug"=>"&#xf188",
  "fa-building-o"=>"&#xf0f7", "fa-bullhorn"=>"&#xf0a1", "fa-bullseye"=>"&#xf140", "fa-calendar"=>"&#xf073",
  "fa-calendar-o"=>"&#xf133", "fa-camera"=>"&#xf030", "fa-camera-retro"=>"&#xf083", "fa-caret-down"=>"&#xf0d7",
  "fa-caret-left"=>"&#xf0d9", "fa-caret-right"=>"&#xf0da", "fa-caret-square-o-down"=>"&#xf150", "fa-caret-square-o-left"=>"&#xf191",
  "fa-caret-square-o-right"=>"&#xf152", "fa-caret-square-o-up"=>"&#xf151", "fa-caret-up"=>"&#xf0d8", "fa-certificate"=>"&#xf0a3",
  "fa-chain "=>"&#xf0c1", "fa-chain-broken"=>"&#xf127", "fa-check"=>"&#xf00c", "fa-check-circle"=>"&#xf058",
  "fa-check-circle-o"=>"&#xf05d", "fa-check-square"=>"&#xf14a", "fa-check-square-o"=>"&#xf046", "fa-chevron-circle-down"=>"&#xf13a",
  "fa-chevron-circle-left"=>"&#xf137", "fa-chevron-circle-right"=>"&#xf138", "fa-chevron-circle-up"=>"&#xf139", "fa-chevron-down"=>"&#xf078",
  "fa-chevron-left"=>"&#xf053", "fa-chevron-right"=>"&#xf054", "fa-chevron-up"=>"&#xf077", "fa-circle"=>"&#xf111",
  "fa-circle-o"=>"&#xf10c", "fa-clipboard"=>"&#xf0ea", "fa-clock-o"=>"&#xf017", "fa-close "=>"&#xf00d",
  "fa-cloud"=>"&#xf0c2", "fa-cloud-download"=>"&#xf0ed", "fa-cloud-upload"=>"&#xf0ee", "fa-cny "=>"&#xf157",
  "fa-code"=>"&#xf121", "fa-code-fork"=>"&#xf126", "fa-coffee"=>"&#xf0f4", "fa-cog"=>"&#xf013",
  "fa-cogs"=>"&#xf085", "fa-columns"=>"&#xf0db", "fa-comment"=>"&#xf075", "fa-comment-o"=>"&#xf0e5",
  "fa-comments"=>"&#xf086", "fa-comments-o"=>"&#xf0e6", "fa-compass"=>"&#xf14e", "fa-compress"=>"&#xf066",
  "fa-copy "=>"&#xf0c5", "fa-credit-card"=>"&#xf09d", "fa-crop"=>"&#xf125", "fa-crosshairs"=>"&#xf05b",
  "fa-css3"=>"&#xf13c", "fa-cut "=>"&#xf0c4", "fa-cutlery"=>"&#xf0f5", "fa-dashboard "=>"&#xf0e4",
  "fa-dedent "=>"&#xf03b", "fa-desktop"=>"&#xf108", "fa-dollar "=>"&#xf155", "fa-dot-circle-o"=>"&#xf192",
  "fa-download"=>"&#xf019", "fa-dribbble"=>"&#xf17d", "fa-dropbox"=>"&#xf16b", "fa-edit "=>"&#xf044",
  "fa-eject"=>"&#xf052", "fa-ellipsis-h"=>"&#xf141", "fa-ellipsis-v"=>"&#xf142", "fa-envelope"=>"&#xf0e0",
  "fa-envelope-o"=>"&#xf003", "fa-eraser"=>"&#xf12d", "fa-eur"=>"&#xf153", "fa-euro "=>"&#xf153",
  "fa-exchange"=>"&#xf0ec", "fa-exclamation"=>"&#xf12a", "fa-exclamation-circle"=>"&#xf06a", "fa-exclamation-triangle"=>"&#xf071",
  "fa-expand"=>"&#xf065", "fa-external-link"=>"&#xf08e", "fa-external-link-square"=>"&#xf14c", "fa-eye"=>"&#xf06e",
  "fa-eye-slash"=>"&#xf070", "fa-facebook"=>"&#xf09a", "fa-facebook-f "=>"&#xf09a", "fa-facebook-square"=>"&#xf082",
  "fa-fast-backward"=>"&#xf049", "fa-fast-forward"=>"&#xf050", "fa-feed "=>"&#xf09e", "fa-female"=>"&#xf182",
  "fa-fighter-jet"=>"&#xf0fb", "fa-file"=>"&#xf15b", "fa-file-o"=>"&#xf016", "fa-file-text"=>"&#xf15c",
  "fa-file-text-o"=>"&#xf0f6", "fa-files-o"=>"&#xf0c5", "fa-film"=>"&#xf008", "fa-filter"=>"&#xf0b0",
  "fa-fire"=>"&#xf06d", "fa-fire-extinguisher"=>"&#xf134", "fa-flag"=>"&#xf024", "fa-flag-checkered"=>"&#xf11e",
  "fa-flag-o"=>"&#xf11d", "fa-flash "=>"&#xf0e7", "fa-flask"=>"&#xf0c3", "fa-flickr"=>"&#xf16e",
  "fa-floppy-o"=>"&#xf0c7", "fa-folder"=>"&#xf07b", "fa-folder-o"=>"&#xf114", "fa-folder-open"=>"&#xf07c",
  "fa-folder-open-o"=>"&#xf115", "fa-font"=>"&#xf031", "fa-forward"=>"&#xf04e", "fa-foursquare"=>"&#xf180",
  "fa-frown-o"=>"&#xf119", "fa-gamepad"=>"&#xf11b", "fa-gavel"=>"&#xf0e3", "fa-gbp"=>"&#xf154",
  "fa-gear "=>"&#xf013", "fa-gears "=>"&#xf085", "fa-gift"=>"&#xf06b", "fa-github"=>"&#xf09b",
  "fa-github-alt"=>"&#xf113", "fa-github-square"=>"&#xf092", "fa-gittip "=>"&#xf184", "fa-glass"=>"&#xf000",
  "fa-globe"=>"&#xf0ac", "fa-google-plus"=>"&#xf0d5", "fa-google-plus-square"=>"&#xf0d4", "fa-gratipay"=>"&#xf184",
  "fa-group "=>"&#xf0c0", "fa-h-square"=>"&#xf0fd", "fa-hand-o-down"=>"&#xf0a7", "fa-hand-o-left"=>"&#xf0a5",
  "fa-hand-o-right"=>"&#xf0a4", "fa-hand-o-up"=>"&#xf0a6", "fa-hdd-o"=>"&#xf0a0", "fa-headphones"=>"&#xf025",
  "fa-heart"=>"&#xf004", "fa-heart-o"=>"&#xf08a", "fa-home"=>"&#xf015", "fa-hospital-o"=>"&#xf0f8",
  "fa-html5"=>"&#xf13b", "fa-image "=>"&#xf03e", "fa-inbox"=>"&#xf01c", "fa-indent"=>"&#xf03c",
  "fa-info"=>"&#xf129", "fa-info-circle"=>"&#xf05a", "fa-inr"=>"&#xf156", "fa-italic"=>"&#xf033",
  "fa-jpy"=>"&#xf157", "fa-key"=>"&#xf084", "fa-keyboard-o"=>"&#xf11c", "fa-krw"=>"&#xf159",
  "fa-laptop"=>"&#xf109", "fa-leaf"=>"&#xf06c", "fa-legal "=>"&#xf0e3", "fa-lemon-o"=>"&#xf094",
  "fa-level-down"=>"&#xf149", "fa-level-up"=>"&#xf148", "fa-lightbulb-o"=>"&#xf0eb", "fa-link"=>"&#xf0c1",
  "fa-linkedin"=>"&#xf0e1", "fa-linkedin-square"=>"&#xf08c", "fa-linux"=>"&#xf17c", "fa-list"=>"&#xf03a",
  "fa-list-alt"=>"&#xf022", "fa-list-ol"=>"&#xf0cb", "fa-list-ul"=>"&#xf0ca", "fa-location-arrow"=>"&#xf124",
  "fa-lock"=>"&#xf023", "fa-long-arrow-down"=>"&#xf175", "fa-long-arrow-left"=>"&#xf177", "fa-long-arrow-right"=>"&#xf178",
  "fa-long-arrow-up"=>"&#xf176", "fa-magic"=>"&#xf0d0", "fa-magnet"=>"&#xf076", "fa-mail-forward "=>"&#xf064",
  "fa-mail-reply "=>"&#xf112", "fa-mail-reply-all "=>"&#xf122", "fa-male"=>"&#xf183", "fa-map-marker"=>"&#xf041",
  "fa-maxcdn"=>"&#xf136", "fa-medkit"=>"&#xf0fa", "fa-meh-o"=>"&#xf11a", "fa-microphone"=>"&#xf130",
  "fa-microphone-slash"=>"&#xf131", "fa-minus"=>"&#xf068", "fa-minus-circle"=>"&#xf056", "fa-minus-square"=>"&#xf146",
  "fa-minus-square-o"=>"&#xf147", "fa-mobile"=>"&#xf10b", "fa-mobile-phone "=>"&#xf10b", "fa-money"=>"&#xf0d6",
  "fa-moon-o"=>"&#xf186", "fa-music"=>"&#xf001", "fa-navicon "=>"&#xf0c9", "fa-outdent"=>"&#xf03b",
  "fa-pagelines"=>"&#xf18c", "fa-paperclip"=>"&#xf0c6", "fa-paste "=>"&#xf0ea", "fa-pause"=>"&#xf04c",
  "fa-pencil"=>"&#xf040", "fa-pencil-square"=>"&#xf14b", "fa-pencil-square-o"=>"&#xf044", "fa-phone"=>"&#xf095",
  "fa-phone-square"=>"&#xf098", "fa-photo "=>"&#xf03e", "fa-picture-o"=>"&#xf03e", "fa-pinterest"=>"&#xf0d2",
  "fa-pinterest-square"=>"&#xf0d3", "fa-plane"=>"&#xf072", "fa-play"=>"&#xf04b", "fa-play-circle"=>"&#xf144",
  "fa-play-circle-o"=>"&#xf01d", "fa-plus"=>"&#xf067", "fa-plus-circle"=>"&#xf055", "fa-plus-square"=>"&#xf0fe",
  "fa-plus-square-o"=>"&#xf196", "fa-power-off"=>"&#xf011", "fa-print"=>"&#xf02f", "fa-puzzle-piece"=>"&#xf12e",
  "fa-qrcode"=>"&#xf029", "fa-question"=>"&#xf128", "fa-question-circle"=>"&#xf059", "fa-quote-left"=>"&#xf10d",
  "fa-quote-right"=>"&#xf10e", "fa-random"=>"&#xf074", "fa-refresh"=>"&#xf021", "fa-remove "=>"&#xf00d",
  "fa-renren"=>"&#xf18b", "fa-reorder "=>"&#xf0c9", "fa-repeat"=>"&#xf01e", "fa-reply"=>"&#xf112",
  "fa-reply-all"=>"&#xf122", "fa-retweet"=>"&#xf079", "fa-rmb "=>"&#xf157", "fa-road"=>"&#xf018",
  "fa-rocket"=>"&#xf135", "fa-rotate-left "=>"&#xf0e2", "fa-rotate-right "=>"&#xf01e", "fa-rouble "=>"&#xf158",
  "fa-rss"=>"&#xf09e", "fa-rss-square"=>"&#xf143", "fa-rub"=>"&#xf158", "fa-ruble "=>"&#xf158",
  "fa-rupee "=>"&#xf156", "fa-save "=>"&#xf0c7", "fa-scissors"=>"&#xf0c4", "fa-search"=>"&#xf002",
  "fa-search-minus"=>"&#xf010", "fa-search-plus"=>"&#xf00e", "fa-share"=>"&#xf064", "fa-share-square"=>"&#xf14d",
  "fa-share-square-o"=>"&#xf045", "fa-shield"=>"&#xf132", "fa-shopping-cart"=>"&#xf07a", "fa-sign-in"=>"&#xf090",
  "fa-sign-out"=>"&#xf08b", "fa-signal"=>"&#xf012", "fa-sitemap"=>"&#xf0e8", "fa-skype"=>"&#xf17e",
  "fa-smile-o"=>"&#xf118", "fa-sort"=>"&#xf0dc", "fa-sort-alpha-asc"=>"&#xf15d", "fa-sort-alpha-desc"=>"&#xf15e",
  "fa-sort-amount-asc"=>"&#xf160", "fa-sort-amount-desc"=>"&#xf161", "fa-sort-asc"=>"&#xf0de", "fa-sort-desc"=>"&#xf0dd",
  "fa-sort-down "=>"&#xf0dd", "fa-sort-numeric-asc"=>"&#xf162", "fa-sort-numeric-desc"=>"&#xf163", "fa-sort-up "=>"&#xf0de",
  "fa-spinner"=>"&#xf110", "fa-square"=>"&#xf0c8", "fa-square-o"=>"&#xf096", "fa-stack-overflow"=>"&#xf16c",
  "fa-star"=>"&#xf005", "fa-star-half"=>"&#xf089", "fa-star-half-empty "=>"&#xf123", "fa-star-half-full "=>"&#xf123",
  "fa-star-half-o"=>"&#xf123", "fa-star-o"=>"&#xf006", "fa-step-backward"=>"&#xf048", "fa-step-forward"=>"&#xf051",
  "fa-stethoscope"=>"&#xf0f1", "fa-stop"=>"&#xf04d", "fa-strikethrough"=>"&#xf0cc", "fa-subscript"=>"&#xf12c",
  "fa-suitcase"=>"&#xf0f2", "fa-sun-o"=>"&#xf185", "fa-superscript"=>"&#xf12b", "fa-table"=>"&#xf0ce",
  "fa-tablet"=>"&#xf10a", "fa-tachometer"=>"&#xf0e4", "fa-tag"=>"&#xf02b", "fa-tags"=>"&#xf02c",
  "fa-tasks"=>"&#xf0ae", "fa-terminal"=>"&#xf120", "fa-text-height"=>"&#xf034", "fa-text-width"=>"&#xf035",
  "fa-th"=>"&#xf00a", "fa-th-large"=>"&#xf009", "fa-th-list"=>"&#xf00b", "fa-thumb-tack"=>"&#xf08d",
  "fa-thumbs-down"=>"&#xf165", "fa-thumbs-o-down"=>"&#xf088", "fa-thumbs-o-up"=>"&#xf087", "fa-thumbs-up"=>"&#xf164",
  "fa-ticket"=>"&#xf145", "fa-times"=>"&#xf00d", "fa-times-circle"=>"&#xf057", "fa-times-circle-o"=>"&#xf05c",
  "fa-tint"=>"&#xf043", "fa-toggle-down "=>"&#xf150", "fa-toggle-right "=>"&#xf152", "fa-toggle-up "=>"&#xf151",
  "fa-trash-o"=>"&#xf014", "fa-trello"=>"&#xf181", "fa-trophy"=>"&#xf091", "fa-truck"=>"&#xf0d1",
  "fa-try"=>"&#xf195", "fa-tumblr"=>"&#xf173", "fa-tumblr-square"=>"&#xf174", "fa-turkish-lira "=>"&#xf195",
  "fa-twitter"=>"&#xf099", "fa-twitter-square"=>"&#xf081", "fa-umbrella"=>"&#xf0e9", "fa-underline"=>"&#xf0cd",
  "fa-undo"=>"&#xf0e2", "fa-unlink "=>"&#xf127", "fa-unlock"=>"&#xf09c", "fa-unlock-alt"=>"&#xf13e",
  "fa-unsorted "=>"&#xf0dc", "fa-upload"=>"&#xf093", "fa-usd"=>"&#xf155", "fa-user"=>"&#xf007",
  "fa-user-md"=>"&#xf0f0", "fa-users"=>"&#xf0c0", "fa-video-camera"=>"&#xf03d", "fa-vimeo-square"=>"&#xf194",
  "fa-vk"=>"&#xf189", "fa-volume-down"=>"&#xf027", "fa-volume-off"=>"&#xf026", "fa-volume-up"=>"&#xf028",
  "fa-warning "=>"&#xf071", "fa-weibo"=>"&#xf18a", "fa-wheelchair"=>"&#xf193", "fa-windows"=>"&#xf17a",
  "fa-won "=>"&#xf159", "fa-wrench"=>"&#xf0ad", "fa-xing"=>"&#xf168", "fa-xing-square"=>"&#xf169",
  "fa-yen "=>"&#xf157", "fa-youtube"=>"&#xf167", "fa-youtube-play"=>"&#xf16a", "fa-youtube-square"=>"&#xf166"

);

echo '"';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  _e( 'Footer', 'clean' );
  echo ':</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<select name=\"footer_status\" >';

  if (!is_null(cl_show_option("footer_status"))) {
    if (cl_show_option("footer_status")=="on") {
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
  _e( 'Social networks', 'clean' );
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo __('First Icon', 'clean').': <select name=\"foot_ficon\" style=\"margin-left: 36px; font-family: \'FontAwesome\';\">';

  if (!is_null(cl_show_option("foot_ficon"))) {
    $option = cl_show_option("foot_ficon");
    echo '<option value=\"'.$option.'\" selected>'.$footer_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"fa-facebook\" selected>'.$footer_icons["fa-facebook"].'</option>';
    unset($footer_icons["fa-facebook"]);
  }
  foreach ($footer_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '&nbsp;'.__('Second Icon', 'clean').': <select name=\"foot_sicon\" style=\"margin-left: 36px; font-family: \'FontAwesome\';\">';

  if (!is_null(cl_show_option("foot_sicon"))) {
    $option = cl_show_option("foot_sicon");
    echo '<option value=\"'.$option.'\" selected>'.$footer_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"fa-twitter\" selected>'.$footer_icons["fa-twitter"].'</option>';
    unset($footer_icons["fa-twitter"]);
  }
  foreach ($footer_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '<br><br>';
  echo __('Third Icon', 'clean').': <select name=\"foot_ticon\" style=\"margin-left: 36px; font-family: \'FontAwesome\';\">';

  if (!is_null(cl_show_option("foot_ticon"))) {
    $option = cl_show_option("foot_ticon");
    echo '<option value=\"'.$option.'\" selected>'.$footer_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"fa-google-plus\" selected>'.$footer_icons["fa-google-plus"].'</option>';
    unset($footer_icons["fa-google-plus"]);
  }
  foreach ($footer_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '&nbsp;'.__('Fourth Icon', 'clean').': <select name=\"foot_hicon\" style=\"margin-left: 36px; font-family: \'FontAwesome\';\">';

  if (!is_null(cl_show_option("foot_hicon"))) {
    $option = cl_show_option("foot_hicon");
    echo '<option value=\"'.$option.'\" selected>'.$footer_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"fa-pinterest\" selected>'.$footer_icons["fa-pinterest"].'</option>';
    unset($footer_icons["fa-pinterest"]);
  }
  foreach ($footer_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '<br><br>';
  echo __('Fifth Icon', 'clean').': <select name=\"foot_vicon\" style=\"margin-left: 36px; font-family: \'FontAwesome\';\">';

  if (!is_null(cl_show_option("foot_vicon"))) {
    $option = cl_show_option("foot_vicon");
    echo '<option value=\"'.$option.'\" selected>'.$footer_icons[$option].'</option>';
    unset($arr_icons[$option]);
  } else {
    echo '<option value=\"fa-envelope\" selected>'.$footer_icons["fa-envelope"].'</option>';
    unset($footer_icons["fa-envelope"]);
  }
  foreach ($footer_icons as $key => $value) {
    echo '<option value=\"'.$key.'\">'.$value.'</option>';
  }

  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class=\"row\">';
  echo '<div class=\"col-sm-2\">';
  echo '<br><br>';
  _e( 'Links to Social Networks', 'clean');
  echo ':<br><br>';
  echo '</div>';
  echo '<div class=\"col-sm-8\">';
  echo '<br>';
  echo __('First', 'clean').': <input type=\"text\" name=\"foot_f_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("foot_f_txt"))) {
    echo cl_show_option("foot_f_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"index.html#\"';
  }

  echo '>';

  if (!is_null(cl_show_option("foot_f_nwin"))) {
    if (clean_home_option("foot_f_nwin") == "On") {
      $foot_f_nwin="checked";
    } else {
      $foot_f_nwin="";
    }
  } else {
    $foot_f_nwin="";
  }

  echo '&nbsp;<input type=\"checkbox\" name=\"foot_f_nwin\" value=\"On\" '.$foot_f_nwin.' >';
  echo '<label for=\"foot_f_nwin\">&nbsp;'.__('Open in new window', 'clean').'</label>';
  echo '<br><br>';
  echo __('Second', 'clean').': <input type=\"text\" name=\"foot_s_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("foot_s_txt"))) {
    echo cl_show_option("foot_s_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"index.html#\"';
  }

  echo '>';

  if (!is_null(cl_show_option("foot_s_nwin"))) {
    if (clean_home_option("foot_s_nwin") == "On") {
      $foot_s_nwin="checked";
    } else {
      $foot_s_nwin="";
    }
  } else {
    $foot_s_nwin="";
  }

  echo '&nbsp;<input type=\"checkbox\" name=\"foot_s_nwin\" value=\"On\" '.$foot_s_nwin.' >';
  echo '<label for=\"foot_s_nwin\">&nbsp;'.__('Open in new window', 'clean').'</label>';
  echo '<br><br>';
  echo __('Third', 'clean').': <input type=\"text\" name=\"foot_t_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("foot_t_txt"))) {
    echo cl_show_option("foot_t_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"index.html#\"';
  }

  echo '>';

  if (!is_null(cl_show_option("foot_t_nwin"))) {
    if (clean_home_option("foot_t_nwin") == "On") {
      $foot_t_nwin="checked";
    } else {
      $foot_t_nwin="";
    }
  } else {
    $foot_t_nwin="";
  }

  echo '&nbsp;<input type=\"checkbox\" name=\"foot_t_nwin\" value=\"On\" '.$foot_t_nwin.' >';
  echo '<label for=\"foot_t_nwin\">&nbsp;'.__('Open in new window', 'clean').'</label>';
  echo '<br><br>';
  echo __('Fourth', 'clean').': <input type=\"text\" name=\"foot_h_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("foot_h_txt"))) {
    echo cl_show_option("foot_h_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"index.html#\"';
  }

  echo '>';

  if (!is_null(cl_show_option("foot_h_nwin"))) {
    if (clean_home_option("foot_h_nwin") == "On") {
      $foot_h_nwin="checked";
    } else {
      $foot_h_nwin="";
    }
  } else {
    $foot_h_nwin="";
  }

  echo '&nbsp;<input type=\"checkbox\" name=\"foot_h_nwin\" value=\"On\" '.$foot_h_nwin.' >';
  echo '<label for=\"foot_h_nwin\">&nbsp;'.__('Open in new window', 'clean').'</label>';
  echo '<br><br>';
  echo __('Fifth', 'clean').': <input type=\"text\" name=\"foot_v_txt\" size=\"35\" style=\"margin-left: 36px;\" value=\"';

  if (!is_null(cl_show_option("foot_v_txt"))) {
    echo cl_show_option("foot_v_txt").'\"';
  } else {
    echo '\" ';
    echo 'placeholder=\"index.html#\"';
  }

  echo '>';

  if (!is_null(cl_show_option("foot_v_nwin"))) {
    if (clean_home_option("foot_v_nwin") == "On") {
      $foot_h_nwin="checked";
    } else {
      $foot_h_nwin="";
    }
  } else {
    $foot_h_nwin="";
  }

  echo '&nbsp;<input type=\"checkbox\" name=\"foot_v_nwin\" value=\"On\" '.$foot_h_nwin.' >';
  echo '<label for=\"foot_v_nwin\">&nbsp;'.__('Open in new window', 'clean').'</label>';
  echo '<br><br>';
  echo '</div>';
  echo '</div>';
echo '"';
