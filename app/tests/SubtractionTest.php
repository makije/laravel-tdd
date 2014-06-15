<?php

class SubtractionTest extends TestCase {

      public function testFindsTheDifferenceOfPositiveNumbers()
      {
            $addition = new Subtraction();
            $difference = $addition->run(5, 0);

            $this->assertEquals(-5, $difference);
      }

      public function testFindsTheDifferenceOfNegativeNumbers()
      {
            $addition = new Subtraction();
            $difference = $addition->run(-5, 0);

            $this->assertEquals(5, $difference);
      }
}
