<?php

class SubtractionTest extends TestCase {

      public function testFindsTheDifferenceOfPositiveNumbers()
      {
            $subtraction = new Subtraction();
            $difference = $subtraction->run(5, 0);

            $this->assertEquals(-5, $difference);
      }

      public function testFindsTheDifferenceOfNegativeNumbers()
      {
            $subtraction = new Subtraction();
            $difference = $subtraction->run(-5, 0);

            $this->assertEquals(5, $difference);
      }
}
