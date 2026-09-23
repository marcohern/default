<?php

namespace App\Auth;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
class AuthorizePolicy
{
  public readonly string $action;
  public readonly string $methods;
  public readonly string $pathex;
  public readonly array $children;

  protected static function fromStdClass(stdClass $policy): self
  {
    return new self($policy->action, $policy->methods, $policy->pathex, $policy->children);
  }

  protected static function fromArray(array $policy, array $children): self
  {
    return new self($policy[0], $policy[1], $policy[2], $children);
  }

  protected static function fromString(string $policy, array $children): self
  {
    $parser = new AutorizeStringParser;
    $array = $parser->extract($policy);
    return self::fromArray($array, $children);
  }

  protected static function fromObject(self $policy): self
  {
    return new self($policy->action, $policy->methods, $policy->pathex, $policy->children);
  }

  public static function from($policy, array $children=[]): self
  {
    if (is_string($policy)) return self::fromString($policy);
    if (is_array($policy)) return self::fromArray($policy);
    if ($policy instanceof stdClass) return self::fromStdClass($policy);
    if ($policy instanceof self) return new self($policy->action, $policy->methods, $policy->pathex, $children);
    throw new BadRequestHttpException('unable to cast ['.typeof($policy).'] to type ['.self::class.']');
  }

  public function __construct(string $action, string $methods, string $pathex, array $children=[])
  {
    $this->action = $action;
    $this->methods = $methods;
    $this->pathex = $pathex;
    $this->children = [];
    foreach ($children as $child)
    {
      $this->children[] = self::from($child);
    }
  }
}
