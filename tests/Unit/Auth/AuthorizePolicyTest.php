<?php
use App\Auth\AuthorizePolicy;

it('[AuthorizePolicy::__construct] can build an instance of AuthorizePolicy', function (string $action, string $methods, string $pathex) {
    $policy = new AuthorizePolicy($action, $methods, $pathex);

    expect($policy->action)->toBe($action);
    expect($policy->methods)->toBe($methods);
    expect($policy->pathex)->toBe($pathex);
})->with([
  ['action'=>'allow','methods'=>'*'  ,'pathex'=>'/.*/'],
  ['action'=>'deny' ,'methods'=>'GET','pathex'=>'/\/admin(\/.*)?/'],
]);

it('[AuthorizePolicy::from] can build an instance of AuthorizePolicy', function (string $key, array $children) {
    $policy = AuthorizePolicy::from($key, $children);

    expect($policy->action)->toBe('allow');
    expect($policy->methods)->toBe('*');
    expect($policy->pathex)->toBe('/.*/');
})->with([
  ['key' => 'allow * /.*/', 'children' => [
      'deny * /\/admin(\/.*)?/',
      'deny * /\/users(\/.*)?/',
      'deny * /\/orgs(\/.*)?/' => [
        'allow * /\/orgs\/reports1(\/.*)?/',
        'allow * /\/orgs\/reports2(\/.*)?/'
      ],
    ]
  ],
]);
