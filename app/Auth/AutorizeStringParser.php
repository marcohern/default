<?php

namespace App\Auth;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AutorizeStringParser
{
  private const ACTIONS = 'allow|deny';
  private const METHODS = 'GET|POST|PUT|PATCH|DELETE|HEAD|OPTIONS|CONNECT|TRACE';
  private const REGEX = '/^('.self::ACTIONS.') (\*|(('.self::METHODS.'),)*('.self::METHODS.')) ([^\s]+)$/';

  /**
   * Create a new class instance.
   */
  public function __construct()
  {
      //
  }

  public function isValid(string $policy): bool
  {
    return Str::isMatch(self::REGEX, $policy);
  }

  public function extract(string $policy): array
  {
    $results = null;
    $itMatches = preg_match(self::REGEX, $policy, $groups);
    if ($itMatches === 1)
    {
      $pathex = $groups[6];
      set_error_handler(static fn() => true);
      $isInvalid = (@preg_match($pathex, 'x') === false);
      restore_error_handler();
      if ($isInvalid) throw new BadRequestHttpException('Path in policy invalid. ['.preg_last_error().'] '.preg_last_error_msg());
      return [$groups[1],$groups[2],$pathex];
      
      return $results;
    }
    throw new BadRequestHttpException('Policy invalid.');
  }

  public function isMatch(array $policy, string $method, string $uri): bool
  {
    $actions = $policy[0];
    $methods = $policy[1];
    $pathex  = $policy[2];
    $pathsMatch = false;
    $pathMatchEval = preg_match($pathex, $uri);
    
    if ($pathMatchEval === 1) $pathsMatch = true;
    else $pathsMatch = false;

    if ($pathsMatch) return true;
    return false;
  }
}
