<?php


class Routing {
   public static function buildRoute() {
      $controllerName = 'IndexController';
      $modelName = "IndexModel";
      $actionName = "Index";

      $route = explode("/", $_SERVER['REQUEST_URI']);

//      check controller
      if ($route[1] !== '') {
         $controllerName = ucfirst($route[1] . 'Controller');
         $modelName = ucfirst($route[1] . "Model");
      }

      include CONTROLLER_PATH . $controllerName . ".php";
      include MODEL_PATH . $modelName . ".php";

//      check action name
      if (isset($route[2])) {
         $actionName = $route[2];
      }

      $controller = new $controllerName();
      $controller->$actionName();
   }

   public function errorPage() {

   }
}