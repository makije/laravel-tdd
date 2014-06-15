<?php

class AdditionTest extends TestCase {

      public function testFindsTheSumOfPositiveNumbers()
      {
            $addition = new Addition();
            $sum = $addition->run(5, 0);

            $this->assertEquals(5, $sum);
      }

      public function testFindsTheSumOfNegativeNumbers()
      {
            $addition = new Addition();
            $sum = $addition->run(-5, 0);

            $this->assertEquals(-5, $sum);
      }
}
