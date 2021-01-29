<?php

/**
 * Class Routing
 */
class Routing
{

  /** @var _uri */
  private $_uri;
  /** @var _request */
  private $_request;
  /** @var _content */
  private $_content;

  /**
   * @return _uri && _request
   */
  public function __construct() {
    $this->_uri = $_SERVER['REQUEST_URI'];
    $this->_request = $_SERVER['REQUEST_METHOD'];
  }

  /**
   * @return array
   */
  public function browser_request(): array {
    switch($this->_request) {
      case 'GET':
         $_GET['method'] = $this->_request;
         return $_GET;
      break;
      case 'POST':
          $_POST['method'] = $this->_request;
         return $_POST;
      break;
    }

  }

  /**
   * @return array
   */
  public function uri_request() {

    $uri = $this->_uri;

    if (empty($uri)) {
      $this->_content = [
        "content" => null,
        "uri"=> $this->_uri,
      ];
      return $this->_content;
    }

    if (!empty($uri)) {
      $pos = strpos($uri, "?");
      $sub = substr($uri, 0, $pos);
      $aft_pos = mb_strlen($sub, 'utf8');
      $aft_pos++;
      $aft = substr($uri, $aft_pos);

      if(empty($sub)) {
        $sub = $uri;
      }

      $posid = strpos($uri, "=");
      $posid++;
      $id = substr($uri, $posid);

      if ($id == "clean_options.php") {
        $_SESSION['token'] = md5(uniqid(rand(), true));
        //$_SESSION['updated'] = false;
        include_once("clean-menu.php");
      }

      if ($id == "clean_options.php&settings-updated=true") {
        $_SESSION['token'] = md5(uniqid(rand(), true));
        //$_SESSION['updated'] = true;
        include_once("clean-menu.php");
      }

    }

  }

}

$routing = new Routing();

$routing->uri_request();
