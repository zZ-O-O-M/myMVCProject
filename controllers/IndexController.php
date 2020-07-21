<?php

class IndexController extends Controller {

   private $pageTpl = '/views/main.tpl.php';

   public function __construct() {
      parent::__construct();
      $this->model = new IndexModel();
      $this->view = new View();
   }

   public function index() {
      $this->pageData['title'] = "Вход в личный кабинет";

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         if (!$this->login()) {
            $this->pageData['error'] = "Неверный логин или пароль";
         } else {
            print_r($this->getUserData());
         }
      }

      $this->view->render($this->pageTpl, $this->pageData);

   }

   public function login() {
      $userData = $this->getUserData();
      if (!$this->model->checkUser($userData)) {
         return false;
      }
      return true;
   }

   public function getUserData() {
      $res = [];
      $res['login'] = $_POST['login'];
      $res['password'] = $_POST['password'];

      return $res;
   }
}