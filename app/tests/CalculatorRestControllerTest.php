<?php

class CalculatorRestControllerTest extends TestCase {

      /**
       * A basic functional test example.
       *
       * @return void
       */
      public function testGetIndex()
      {
            $crawler = $this->client->request('GET', '/calculator');

            $this->assertTrue($this->client->getResponse()->isOk());
      }

      public function testPostAdditionWithNoArguments()
      {
            $response = $this->call('POST', '/calculator/addition', array('' => array()));
            $this->assertEquals(406, $response->getStatusCode());
      }

      public function testPostAdditionWithAnInsufficientAmountOfArguments()
      {
            $response = $this->call('POST', '/calculator/addition', array('arguments' => array(1)));
            $this->assertEquals(406, $response->getStatusCode());
      }

      public function testPostAdditionWithInvalidArguments()
      {
            $response = $this->call('POST', '/calculator/addition', array('arguments' => array('foo', 'bar')));
            $result = json_decode($response->getContent());

            $this->assertEquals(406, $response->getStatusCode());
            $this->assertEquals('NaN', $result->error);
      }

      public function testPostAdditionWithValidArguments()
      {
            $response = $this->call('POST', '/calculator/addition', array('arguments' => array(1, 1)));
            $json = json_decode($response->getContent());

            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEquals(2, $json->result);
      }

      public function testPostAdditionWithValidDecimalArguments()
      {
            $response = $this->call('POST', '/calculator/addition', array('arguments' => array(1.5, 1, 2)));
            $json = json_decode($response->getContent());

            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEquals(4.5, $json->result);
      }

      public function testPostSubtracionWithNoArguments()
      {
            $response = $this->call('POST', '/calculator/subtracion', array('' => array()));
            $this->assertEquals(406, $response->getStatusCode());
      }

      public function testPostSubtracionWithAnInsufficientAmountOfArguments()
      {
            $response = $this->call('POST', '/calculator/subtracion', array('arguments' => array(1)));
            $this->assertEquals(406, $response->getStatusCode());
      }

      public function testPostSubtractionWithInvalidArguments()
      {
            $response = $this->call('POST', '/calculator/subtracion', array('arguments' => array('foo', 'bar')));
            $result = json_decode($response->getContent());

            $this->assertEquals(406, $response->getStatusCode());
            $this->assertEquals('NaN', $result->error);
      }

      public function testPostSubtractionWithValidPositiveArguments()
      {
            $response = $this->call('POST', '/calculator/subtracion', array('arguments' => array(2, 1)));
            $result = json_decode($response->getContent());

            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEquals(1, $result->result);
      }

      public function testPostSubtractionWithValidNegativeArguments()
      {
            $response = $this->call('POST', '/calculator/subtracion', array('arguments' => array(-2, -1)));
            $result = json_decode($response->getContent());

            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEquals(-1, $result->result);
      }
}
