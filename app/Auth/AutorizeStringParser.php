<?php

namespace App\Auth;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AutorizeStringParser
{
  private const REGEX = '/^(allow|deny) (\*|((GET|POST|PUT|PATCH|DELETE),)*(GET|POST|PUT|PATCH|DELETE)) (.+)$/';
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

  public function extract(string $policy): array | null
  {
    $groups = null;
    $itMatches = preg_match(self::REGEX, $policy, $groups);
    if ($itMatches) return [$groups[1],$groups[2],$groups[6]];
    return null;
  }
}
