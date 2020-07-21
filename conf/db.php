<?php


class DB {
   const USER = "root";
   const PASS = "root";
   const HOST = "localhost";
   const DB = "mvc";


   public static function connToDB() {
      $user = self::USER;
      $pass = self::PASS;
      $host = self::HOST;
      $db = self::DB;

      return new PDO("mysql:host=$host; dbname=$db", $user, $pass);
   }
}


