<?php

class Division implements IOperation {

      public function run($num, $current)
      {
            if(is_null($current))
                  return $num;

            return $current / $num;
      }
}
