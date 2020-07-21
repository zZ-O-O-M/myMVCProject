<?php

class IndexModel extends Model {

   public function __construct() {
      parent::__construct();
   }

   public function checkUser($userData) {
      $params = [];
      $params['login'] = $userData['login'];
      $params['password'] = md5((int)$userData['password']);

      $sql = "SELECT * FROM `users` WHERE `login` = :login AND `password` = :password";

      $stmt = $this->db->prepare($sql);
      $stmt->execute($params);
      return $stmt->fetch();
   }

}