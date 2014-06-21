<?php

class Calculator {

      protected $result = null;
      protected $operands = [];
      protected $operation;

      public function getResult()
      {
            if(is_null($this->result))
                  return 0;

            return $this->result;
      }

      public function setOperands()
      {
            $this->operands = func_get_args();
      }

      public function setOperation($operation)
      {
            $this->operation = $operation;
      }

      public function calculate()
      {
            foreach($this->operands as $num)
            {
                  if(!is_numeric($num))
                        throw new InvalidArgumentException('NaN');

                  $this->result = $this->operation->run($num, $this->result);
            }

            return $this->result;
      }
}
