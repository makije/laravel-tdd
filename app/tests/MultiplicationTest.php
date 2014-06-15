<?php

class MultiplicationTest extends TestCase {

      public function testFindsTheProductOfPositiveNumbers()
      {
            $multiplication = new Multiplication();
            $product = $multiplication->run(5, 5);

            $this->assertEquals(25, $product);
      }

      public function testFindsTheProductOfNegativeNumbers()
      {
            $multiplication = new Multiplication();
            $product = $multiplication->run(5, -5);

            $this->assertEquals(-25, $product);
      }
}
