<?php

class Subtraction implements IOperation {
      public function run($num, $current)
      {
            return $current - $num;
      }
}
