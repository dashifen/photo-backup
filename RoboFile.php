<?php

use Robo\Tasks;

require 'vendor/autoload.php';

class RoboFile extends Tasks
{
  function hello(string $world): void
  {
    $this->say('Hello, ' . $world);
  }
}
