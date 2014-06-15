<?php

class Addition implements IOperation {
      public function run($num, $current)
      {
            return $current + $num;
      }
}
