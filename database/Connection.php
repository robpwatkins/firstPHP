<?php

class Connection
{
  public static function make()
  {
    try {
      return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'booboo69');
    } catch (PDOException $e) {
     die($e->getMessage());
    }
  }
}