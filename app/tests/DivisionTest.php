<?php

class DivisionTest extends TestCase {

      public function testFindsTheQuotientOfPositiveNumbers()
      {
            $division = new Division();
            $quotient = $division->run(5, 5);

            $this->assertEquals(1, $quotient);
      }

      public function testFindsTheQuotientOfNegativeNumbers()
      {
            $division = new Division();
            $quotient = $division->run(-5, -5);

            $this->assertEquals(1, $quotient);
      }
}
