<?php

class View {
   public function __construct() {
   }

   public function render($tpl, $pageData) {
      include ROOT . $tpl;
   }
}