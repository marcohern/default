<?php
use App\Auth\AuthorizePolicy;

it('[AuthorizePolicy::__construct] can build an instance of AuthorizePolicy', function (string $action, string $methods, string $pathex) {
    $policy = new AuthorizePolicy($action, $methods, $pathex);

    expect($policy->action)->toBe($action);
    expect($policy->methods)->toBe($methods);
    expect($policy->pathex)->toBe($pathex);
})->with([
  ['action'=>'allow','methods'=>'*','pathex'=>'/.*/']
]);
