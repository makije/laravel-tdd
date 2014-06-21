<?php

class SubtracionTest extends TestCase {

      public function testFindsTheDifferenceOfPositiveNumbers()
      {
            $subtracion = new Subtracion();
            $difference = $subtracion->run(5, 0);

            $this->assertEquals(-5, $difference);
      }

      public function testFindsTheDifferenceOfNegativeNumbers()
      {
            $subtraction = new Subtracion();
            $difference = $subtraction->run(-5, 0);

            $this->assertEquals(5, $difference);
      }
}
