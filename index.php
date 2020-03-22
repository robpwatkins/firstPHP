<?php

class Task {
  public $description;

  public $completed = false;

  public function  __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }

  public function isComplete()
  {
    return $this->completed;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Steak the 69 nacho'),
  new Task('Do a puzzler')
];

$tasks[0]->complete();

require 'index.view.php';