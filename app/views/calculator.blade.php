@extends('layouts.master')

@section('content')

      <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                  <h1>The Calculator API</h1>

                  <h2>Methods</h2>

                  <table class="table">
                        <thead>
                              <tr>
                                    <th>
                                          Url
                                    </th>
                                    <th>
                                          Arguments
                                    </th>
                                    <th>
                                          Example
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>
                                          {{action('CalculatorRestController@postAddition')}}
                                    </td>
                                    <td>
                                          array of numeric
                                    </td>
                                    <td>
                                          curl -H "Content-Type: application/json" -d '{"arguments":[1, 1, 3.5]}' {{action('CalculatorRestController@postAddition')}}
                                    </td>
                              </tr>
                              <tr>
                                    <td>
                                          {{action('CalculatorRestController@postSubtracion')}}
                                    </td>
                                    <td>
                                          array of numeric
                                    </td>
                                    <td>
                                          curl -H "Content-Type: application/json" -d '{"arguments":[1, 1, 3.5]}' {{action('CalculatorRestController@postSubtracion')}}
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>
      </div>

@stop
