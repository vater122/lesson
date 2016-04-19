<?php


class Router
{
  public function run()
  {
      $ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
      $act = isset($_GET['act']) ? $_GET['act'] : 'All';

      $controllerName = $ctrl . 'Controller';
      $controller = new $controllerName;

      $method = 'action' . $act;
      $controller->$method();
  }
}