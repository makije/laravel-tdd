<?php

class CalculatorRestController extends BaseController {

      public function getIndex()
      {
            return View::make('calculator');
      }

      public function postAddition()
      {
            if(!Input::has('arguments'))
            {
                  return Response::json(array('error' => 'No arguments provided'), 406);
            }

            if(count(Input::get('arguments')) <= 1)
            {
                  return Response::json(array('error' => 'Not enough arguments'), 406);
            }

            try
            {
                  $calculator = new Calculator();
                  call_user_func_array(array($calculator, 'setOperands'), Input::get('arguments'));
                  $calculator->setOperation(new Addition());
                  $result = $calculator->calculate();
                  return Response::json(array('result' => $result));
            }
            catch(InvalidArgumentException $e)
            {
                  return Response::json(array('error' => $e->getMessage()), 406);
            }
      }

      public function postSubtracion()
      {
            if(!Input::has('arguments'))
            {
                  return Response::json(array('error' => 'No arguments provided'), 406);
            }

            if(count(Input::get('arguments')) <= 1)
            {
                  return Response::json(array('error' => 'Not enough arguments'), 406);
            }

            try
            {
                  $calculator = new Calculator();
                  call_user_func_array(array($calculator, 'setOperands'), Input::get('arguments'));
                  $calculator->setOperation(new Subtracion());
                  $result = $calculator->calculate();
                  return Response::json(array('result' => $result));
            }
            catch(InvalidArgumentException $e)
            {
                  return Response::json(array('error' => $e->getMessage()), 406);
            }
      }
}
