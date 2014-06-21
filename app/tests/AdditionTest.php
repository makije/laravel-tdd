<?php

class AdditionTest extends TestCase {

      public function testFindsTheSumOfPositiveNumbers()
      {
            $addition = new Addition();
            $sum = $addition->run(5, 5);

            $this->assertEquals(10, $sum);
      }

      public function testFindsTheSumOfNegativeNumbers()
      {
            $addition = new Addition();
            $sum = $addition->run(-5, 5);

            $this->assertEquals(0, $sum);
      }
}
