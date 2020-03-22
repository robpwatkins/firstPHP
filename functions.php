<?php

function dd($val) {
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}

function canEnter($age) {
  return $age > 21;
}

function connectToDb() 
{
    try {
      return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'booboo69');
    } catch (PDOException $e) {
      echo 'Nope: ' . $e->getMessage();
    }
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from todos');
  
  $statement->execute();
  
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}