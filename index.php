<?php

require 'functions.php';

$animals = ['dog', 'cat'];

// dd($animals);

if (canEnter(35)) {
  echo 'come on in';
} else {
  echo 'get on outta heeaaaaaa';
}

require 'index.view.php';