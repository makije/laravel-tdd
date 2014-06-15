<?php

class CalculatorTest extends TestCase {

      public function setUp()
      {
            $this->calc = new Calculator();
      }

      public function tearDown()
      {
            Mockery::close();
      }

      public function testInstance()
      {
            new Calculator();
      }

      public function testResultDefaultsToZero()
      {
            $this->assertSame(0, $this->calc->getResult());
      }

      public function testAddsNumbers()
      {
            $mock = Mockery::mock('Addition');
            $mock->shouldReceive('run')
                  ->once()
                  ->with(5, 0)
                  ->andReturn(5);

            $this->calc->setOperands(5);
            $this->calc->setOperation($mock);
            $result = $this->calc->calculate();
            $this->assertEquals(5, $result);
      }

      /**
       * @expectedException InvalidArgumentException
       */
      public function testRequiresNumericValue()
      {
            $this->calc->setOperands('five');
            $result = $this->calc->calculate();
      }

      public function testAcceptsMultipleArgs()
      {
            $mock = Mockery::mock('Addition');
            $mock->shouldReceive('run')
                  ->andReturn(10);

            $this->calc->setOperands(1, 2, 3, 4);
            $this->calc->setOperation($mock);
            $result = $this->calc->calculate();

            $this->assertEquals(10, $result);
      }

      public function testSubtract()
      {
            $mock = Mockery::mock('Subtraction');
            $mock->shouldReceive('run')
                  ->once()
                  ->with(4, 0)
                  ->andReturn(-4);

            $this->calc->setOperands(4);
            $this->calc->setOperation($mock);
            $result = $this->calc->calculate();

            $this->assertEquals(-4, $result);
      }

      public function testMultipliesNumbers()
      {
            $mock = Mockery::mock('Multiplication');
            $mock->shouldReceive('run')
                  ->andReturn(30);

            $this->calc->setOperands(2, 3, 5);
            $this->calc->setOperation($mock);
            $result = $this->calc->calculate();

            $this->assertEquals(30, $result);
      }

      public function testDivisionNumbers()
      {
            $mock = Mockery::mock('Division');
            $mock->shouldReceive('run')
                  ->andReturn(5);

            $this->calc->setOperands(10, 2);
            $this->calc->setOperation($mock);
            $result = $this->calc->calculate();

            $this->assertEquals(5, $result);
      }
}
