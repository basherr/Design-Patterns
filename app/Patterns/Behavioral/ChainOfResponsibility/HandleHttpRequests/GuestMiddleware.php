<?php namespace App\Patterns\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class GuestMiddleware extends AbstractMiddleware
{
  public function handle(Request $request) {
    if($request->user) {
      return false;
    }
    return parent::handle($request);
  }
}
