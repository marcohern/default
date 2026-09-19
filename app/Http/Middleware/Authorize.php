<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $payload = auth()->payload();
      $scope = $payload['scope'];
      $methodMatches = false;
      $uriMatches = false;
      if ($scope) {
        $method = $request->method();
        $uri = $request->getRequestUri();
        foreach ($scope as $item) {
          $scopeMethod = $item['m'];
          $uriMethod = $item['r'];
          $methodMatches = Str::match("/$scopeMethod/",$method);
          $uriMatches = Str::match("/$uriMethod/",$uri);
          //dd(['scope'=>$item,'method'=>$method,'uri'=>$uri,'methodMatches'=>$methodMatches,'uriMatches'=>$uriMatches]);
          if ($methodMatches && $uriMatches) {
            if ($item['a'] === 'a') return $next($request);
          }
        }
      }
      throw new AuthorizationException('Access denied.');
    }
}
