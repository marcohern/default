<?php

namespace App\Auth;

class AuthorizePolicy
{
  public readonly string $action;
  public readonly string $methods;
  public readonly string $pathex;

  public function __construct(string $action, string $methods, string $pathex)
  {
    $this->action = $action;
    $this->methods = $methods;
    $this->pathex = $pathex;
  }
}
