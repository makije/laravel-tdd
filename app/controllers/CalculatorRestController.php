<?php

class CalculatorRestController extends BaseController {

      public function getIndex()
      {
            return View::make('calculator');
      }
}
