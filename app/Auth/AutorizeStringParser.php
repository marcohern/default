<?php

namespace App\Auth;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AutorizeStringParser
{
  private const REGEX = '/^(allow|deny) (\*|((GET|POST|PUT|PATCH|DELETE),)*(GET|POST|PUT|PATCH|DELETE)) (.+)$/';
  public const FAIL_POLICY_INVALID = 1;
  public const FAIL_PATH_INVALID = 2;

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

  public function extract(string $policy): array | int
  {
    $results = null;
    $itMatches = preg_match(self::REGEX, $policy, $groups);
    if ($itMatches === 1)
    {
      $pathex = $groups[6];
      set_error_handler(static fn() => true);
      $isInvalid = (@preg_match($pathex, 'x') === false);
      restore_error_handler();
      if ($isInvalid) return [self::FAIL_PATH_INVALID,preg_last_error(),null];
      return [$groups[1],$groups[2],$pathex];
      
      return $results;
    }
    return [self::FAIL_POLICY_INVALID,null,null];
  }
}
