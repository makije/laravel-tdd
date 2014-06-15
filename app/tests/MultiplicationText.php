<?php

class MultiplicationTest extends TestCase {

      public function testFindsTheProductOfPositiveNumbers()
      {
            $addition = new Multiplication();
            $product = $addition->run(5, 5);

            $this->assertEquals(25, $product);
      }

      public function testFindsTheProductOfNegativeNumbers()
      {
            $addition = new Multiplication();
            $product = $addition->run(-5, -5);

            $this->assertEquals(-25, $product);
      }
}
