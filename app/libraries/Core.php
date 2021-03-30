<?php
 /*
  * App Core Class
  * Create URL & Load Core Controller
  * URL Format is Controller/method/params
  */
  class Core {
      protected $currentController = 'Pages';
      protected $currentMethod = 'index';
      protected $params = [];

      public function __construct() {
        $this->getUrl();
      }

      public function getUrl() {
        echo $_GET['url'];
      }
  }