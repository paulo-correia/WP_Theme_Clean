<!-- Menu File -->
<?php

wp_enqueue_style( 'clean_admin_bs', get_template_directory_uri() . '/css/bootstrap.min.css');

if (!current_user_can('manage_options')) {
  return;
}

if (function_exists('wp_enqueue_media')) {
    wp_enqueue_media();
} else {
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}

?>
<!-- meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" /> -->
<br>
<br>
<?php

$container_options = ["Header", "Services", "Portfolio", "Skills", "Call To Action", "Testmonial", "Contact", "Footer"];
$container_onclick = ["header", "services", "portfolio", "skills", "cta", "testmonial", "contact", "footer"];

$container_menu_option_space = "<div class='row'><div class='col-sm-2 black-bkg'>&nbsp;<!-- Space --></div></div>";

function cl_show_option($option) {
  $cl_options = get_option('clean_theme_options');
  if (isset($cl_options[$option])) {
    return $cl_options[$option];
  }
}

function receive_data($value, $arr_values) {

  if (isset($_POST[$value])) {

    if (strlen($_POST[$value])>=1 ) {
      $arr_values[ $value ] = $_POST[ $value ];
    } else {
      $arr_values[ $value ] = null;
    }

  } else {
    $arr_values[ $value ] = null;
  }

  return $arr_values;

}

$option_content="help";

if (isset($_POST["submit"])) {

  //Receiving Data

  $arr_data = get_option('clean_theme_options');

  if( WP_DEBUG === true ) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }

  $option_content="help";

  // header
  if (isset($_POST["header_status"])) {

    $arr_data[ "header_status" ] = $_POST["header_status"];

    $arr_data = receive_data("header_image", $arr_data);

    $arr_data[ "header_blur" ] = $_POST["header_blur"];

    $arr_data = receive_data("sup_txt", $arr_data);

    $arr_data = receive_data("mid_txt", $arr_data);

    $arr_data = receive_data("inf_txt", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="header";
  }

  //services
  if (isset($_POST["service_status"])) {
    $arr_data[ "service_status" ] = $_POST["service_status"];

    $arr_data = receive_data("supsq_txt", $arr_data);

    $arr_data = receive_data("infsq_txt", $arr_data);

    $arr_data[ "iconfsq_txt" ] = $_POST["iconfsq_txt"];

    $arr_data = receive_data("titfsq_txt", $arr_data);

    $arr_data = receive_data("txtfsq_txt", $arr_data);

    $arr_data[ "iconssq_txt" ] = $_POST["iconssq_txt"];

    $arr_data = receive_data("titssq_txt", $arr_data);

    $arr_data = receive_data("txtssq_txt", $arr_data);

    $arr_data[ "icontsq_txt" ] = $_POST["icontsq_txt"];

    $arr_data = receive_data("tittsq_txt", $arr_data);

    $arr_data = receive_data("txttsq_txt", $arr_data);

    $arr_data[ "iconhsq_txt" ] = $_POST["iconhsq_txt"];

    $arr_data = receive_data("tithsq_txt", $arr_data);

    $arr_data = receive_data("txthsq_txt", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="services";
  }

  //portfolio
  if (isset($_POST["portfolio_status"])) {

    $arr_data[ "portfolio_status" ] = $_POST["portfolio_status"];

    $arr_data = receive_data("titport_txt", $arr_data);

    $arr_data = receive_data("txtport_txt", $arr_data);

    // First Square

    $arr_data = receive_data("portfsq_tit", $arr_data);

    $arr_data = receive_data("portfsq_txt", $arr_data);

    $arr_data = receive_data("portfsq_image", $arr_data);

    // Second Square

    $arr_data = receive_data("portssq_tit", $arr_data);

    $arr_data = receive_data("portssq_txt", $arr_data);

    $arr_data = receive_data("portssq_image", $arr_data);

    // Third Square

    $arr_data = receive_data("porttsq_tit", $arr_data);

    $arr_data = receive_data("porttsq_txt", $arr_data);

    $arr_data = receive_data("porttsq_image", $arr_data);

    // Forth Square

    $arr_data = receive_data("porthsq_tit", $arr_data);

    $arr_data = receive_data("porthsq_txt", $arr_data);

    $arr_data = receive_data("porthsq_image", $arr_data);

    // Five Square

    $arr_data = receive_data("portfvsq_tit", $arr_data);

    $arr_data = receive_data("portfvsq_txt", $arr_data);

    $arr_data = receive_data("portfvsq_image", $arr_data);

    // Sixth Square

    $arr_data = receive_data("portsxsq_tit", $arr_data);

    $arr_data = receive_data("portsxsq_txt", $arr_data);

    $arr_data = receive_data("portsxsq_image", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="portfolio";
  }

  //skills
  if (isset($_POST["skills_status"])) {

    $arr_data[ "skills_status" ] = $_POST["skills_status"];

    $arr_data = receive_data("titskill_txt", $arr_data);

    $arr_data = receive_data("txtskill_txt", $arr_data);

    $arr_data = receive_data("skillfpt_tit", $arr_data);

    $arr_data = receive_data("skillfpt_per", $arr_data);

    $arr_data = receive_data("skillspt_tit", $arr_data);

    $arr_data = receive_data("skillspt_per", $arr_data);

    $arr_data = receive_data("skilltpt_tit", $arr_data);

    $arr_data = receive_data("skilltpt_per", $arr_data);

    $arr_data = receive_data("skillfhpt_tit", $arr_data);

    $arr_data = receive_data("skillfhpt_per", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="skills";

  }

  //cta
  if (isset($_POST["cta_status"])) {

    $arr_data[ "cta_status" ] = $_POST["cta_status"];

    $arr_data = receive_data("titcta_txt", $arr_data);

    $arr_data = receive_data("txtcta_txt", $arr_data);

    $arr_data = receive_data("btncta_txt", $arr_data);

    $arr_data = receive_data("cta_image", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="cta";

  }

  //testmonial
  if (isset($_POST["tesl_status"])) {

    $arr_data[ "tesl_status" ] = $_POST["tesl_status"];

    $arr_data = receive_data("tittesl_txt", $arr_data);

    $arr_data = receive_data("txttesl_txt", $arr_data);

    $arr_data = receive_data("teslfd_txt", $arr_data);

    $arr_data = receive_data("teslfn_txt", $arr_data);

    $arr_data = receive_data("teslsd_txt", $arr_data);

    $arr_data = receive_data("teslsn_txt", $arr_data);

    $arr_data = receive_data("teslfd_image", $arr_data);

    $arr_data = receive_data("teslsd_image", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="testmonial";
  }

  //contact
  if (isset($_POST["contact_status"])) {

    $arr_data[ "contact_status" ] = $_POST["contact_status"];

    $arr_data = receive_data("titcont_txt", $arr_data);

    $arr_data = receive_data("txtcont_txt", $arr_data);

    $arr_data = receive_data("idcont_txt", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="contact";
  }

  //footer
  if (isset($_POST["footer_status"])) {

    $arr_data[ "footer_status" ] = $_POST["footer_status"];

    $arr_data = receive_data("foot_ficon", $arr_data);

    $arr_data = receive_data("foot_f_txt", $arr_data);

    $arr_data = receive_data("foot_f_nwin", $arr_data);

    $arr_data = receive_data("foot_sicon", $arr_data);

    $arr_data = receive_data("foot_s_txt", $arr_data);

    $arr_data = receive_data("foot_s_nwin", $arr_data);

    $arr_data = receive_data("foot_ticon", $arr_data);

    $arr_data = receive_data("foot_t_txt", $arr_data);

    $arr_data = receive_data("foot_t_nwin", $arr_data);

    $arr_data = receive_data("foot_hicon", $arr_data);

    $arr_data = receive_data("foot_h_txt", $arr_data);

    $arr_data = receive_data("foot_h_nwin", $arr_data);

    $arr_data = receive_data("foot_vicon", $arr_data);

    $arr_data = receive_data("foot_v_txt", $arr_data);

    $arr_data = receive_data("foot_v_nwin", $arr_data);


    update_option('clean_theme_options', $arr_data);

    $option_content="footer";
  }

    ?>

      <div class="alert alert-success">
      <p><strong><?php _e( 'Options saved', 'clean' ); ?></strong></p>
      </div>
<?php

}

?>
<script type="text/javascript">
function showHide(item) {

<?php
  if( WP_DEBUG === true ) {
?>
       console.log('showHide: '+item);
<?php
  }
?>

  const content = document.getElementById('option-content');

 switch (item) {
   case 'header':
      header = String(
      <?php
       include_once "clean-header.php";
       ?>
     );
     content.innerHTML = header;
     imgUpload('.header_image');
     insertRow(item);
   break;
   case 'services':
      services = String(
      <?php
       include_once "clean-services.php";
      ?>
    );
    content.innerHTML = services;
    insertRow(item);
   break;
   case 'portfolio':
      portfolio = String(
      <?php
         include_once "clean-portfolio.php";
      ?>
      );
      content.innerHTML = portfolio;
      imgUpload('.portfsq_image');
      imgUpload('.portssq_image');
      imgUpload('.porttsq_image');
      imgUpload('.porthsq_image');
      imgUpload('.portfvsq_image');
      imgUpload('.portsxsq_image');
      insertRow(item);
   break;
   case 'skills':
        skills = String(
        <?php
           include_once "clean-skills.php";
        ?>
        );
        content.innerHTML = skills;
        insertRow(item);
   break;
   case 'cta':
        cta = String(
        <?php
           include_once "clean-cta.php";
        ?>
        );
        content.innerHTML = cta;
        imgUpload('.cta_image');
        insertRow(item);
   break;
   case 'testmonial':
        testmonial = String(
        <?php
           include_once "clean-testmonial.php";
        ?>
        );
        content.innerHTML = testmonial;
        imgUpload('.teslfd_image');
        imgUpload('.teslsd_image');
        insertRow(item);
   break;
   case 'contact':
        contact = String(
        <?php
           include_once "clean-contact.php";
        ?>
        );
        content.innerHTML = contact;
        insertRow(item);
   break;
   case 'footer':
        footer = String(
        <?php
           include_once "clean-footer.php";
        ?>
        );
        content.innerHTML = footer;
        insertRow(item);
   break;

  default:
       help = String(
       <?php
          include_once "clean-help.php";
       ?>
       );
       content.innerHTML = help;
       insertRow('help');
    };
}

function imgUpload(name){
  jQuery(document).ready(function($) {

<?php
  if( WP_DEBUG === true ) {
?>
  console.log('imgUpload: '+name);
<?php
  }
?>
      $(name+'_upload').click(function(e) {
              e.preventDefault();

              var custom_uploader = wp.media({
                  title: '<?php _e("Custom Image", "clean"); ?>',
                  button: {
                      text: '<?php _e("Upload Image", "clean"); ?>'
                  },
                  multiple: false
              })
              .on('select', function() {
                  var attachment = custom_uploader.state().get('selection').first().toJSON();
                  $(name).attr('src', attachment.url);
<?php
  if( WP_DEBUG === true ) {
?>

                  console.log("imgUlpoad change url to: "+attachment.url);
<?php
  }
?>
                  $(name+'_url').val(attachment.url);

              })
              .open();
          });
      });
}

function insertRow(type){

<?php
  if( WP_DEBUG === true ) {
?>
  console.log('insertRow: '+type);
<?php
  }
?>

  const menu = document.getElementById('menu-item');

  menuspace = { header : 3, services : 9, portfolio : 48, skills: 3, cta: 3, testmonial : 17, contact : 0, footer: 7, help : 0 };
  menuitem = [];

  ret = "";
  text = "<div id='inserted-on-"+type+"'>";

  for(var index in menuspace) {
    menuitem.push(index);
  };

<?php
  if( WP_DEBUG === true ) {
?>
  console.log('insertRow:');
  console.log(menuitem);
<?php
  }
?>
  removeDivs(menuitem);

  switch (type) {
    case 'header':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'services':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'portfolio':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'skills':
      ret = populateDiv(times = menuspace[type], text);
    break;
    case 'cta':
      ret = populateDiv(times = menuspace[type], text);
    break;
    case 'testmonial':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'contact':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'footer':
        ret = populateDiv(times = menuspace[type], text);
    break;
    case 'help':
        ret = populateDiv(times = menuspace[type], text);
    break;
  };

  document.getElementById('menu-item').innerHTML += ret;

}

function removeDivs(names) {
<?php
  if( WP_DEBUG === true ) {
?>
  console.log('removeDivs:');
  console.log(names);
<?php
  }
?>

  for (var i = 0; i <names.length; i++) {
    exists = document.getElementById('inserted-on-'+names[i]);
    if (exists !== null) {
      document.getElementById('inserted-on-'+names[i]).remove();
    }
  };

}

function populateDiv(qty, text) {

<?php
  if( WP_DEBUG === true ) {
?>
  console.log('populateDiv: '+qty+' , '+text);
<?php
  }
?>

  if (qty == 0) {
    return "</div>";
  }

  for (i = 0; i < qty; i++) {
    text += "<div class='row'><div class='col-sm-2 black-bkg'>&nbsp;<!-- Space "+i+" --></div></div>";
  }

  return text;

}

</script>


<form method="post" >
<!-- action="options.php" -->
<div class="container2">
  <!-- Start Container -->
  <div class="row">
    <div class="col-sm-12 black-bkg">&nbsp;</center></div>
  </div>
  <div class="row">
    <div class="col-sm-12 black-bkg"><center><?php _e('Clean Theme Options', 'clean') ?></center></div>
  </div>
  <div class="row">
    <div class="col-sm-12 black-bkg">&nbsp;</div>
  </div>

<?php
    // Space after start
    echo $container_menu_option_space;
    echo '<div class="row">';
    echo '<div id="menu-item" class="col-sm-2 black-bkg">';

    foreach ($container_options as $key => $text) {
      $onclick = $container_onclick[$key];
      echo '<a href="#" onclick="showHide(';
      echo "'".$onclick."'";
      echo ');" >'.__($text, 'clean').'</a>';
      echo $container_menu_option_space;
    }

    echo '</div>';
    echo '<div id="option-content" class="col-sm-10" >';
    if (isset($option_content)) {

      echo '<script type="text/javascript">';

      switch ($option_content) {
        case 'header':
          echo "showHide('header');";
        break;

        case 'services':
          echo "showHide('services');";
        break;

        case 'portfolio':
          echo "showHide('portfolio');";
        break;

        case 'skills':
          echo "showHide('skills');";
        break;

        case 'cta':
          echo "showHide('cta');";
        break;

        case 'testmonial':
          echo "showHide('testmonial');";
        break;

        case 'contact':
          echo "showHide('contact');";
        break;

        case 'footer':
          echo "showHide('footer');";
        break;

        case 'help':
          echo "showHide('help');";
        break;

      }

      echo '</script>';

    }
    echo '</div>';
    echo '</div>';

?>
<div class="row">
  <div class="col-sm-12 black-bkg">
<?php
  settings_fields( 'clean_theme_options' );
  do_settings_sections('clean_post');
  submit_button(__('Save Settings', 'clean'))
?>
  </div>
</div>
  <!-- End Container -->
</div>

</form>
