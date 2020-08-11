<?php namespace App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class AuthMiddleware extends AbstractMiddleware
{
  public function handle(Request $request) {
    if($request->user !== 'basheer') {
      return false;
    }
    return parent::handle($request);
  }
}
