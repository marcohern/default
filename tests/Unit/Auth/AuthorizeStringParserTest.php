<?php

use App\Auth\AutorizeStringParser;

beforeEach(function () {
    $this->parser = new AutorizeStringParser;
});

// Runs AFTER every test in this file
afterEach(function ()
{
  
});

test('[AutorizeStringParser::isValid] can validate propper authorization string', function (string $policy) {
    //Test
    $isValid = $this->parser->isValid($policy);
    
    //Assert
    expect($isValid)->toBeTrue();
})->with([
  ['policy' => 'allow * /.*/'], //allow everything,
  ['policy' => 'allow GET,PUT,PATCH,POST,DELETE /.*/'], //allow everything explicitely
  ['policy' => 'deny * /\/admin(\/.*)?/'], //deny /admin or /admin/*
  ['policy' => 'allow * /\/entity(\/.*)?/'], //allow /entity or /entity/*
  ['policy' => 'deny POST /\/entity(\/.*)?/'], //deny POST /entity or /entity/*
]);

test('[AutorizeStringParser::extract] can extract components from valid authorization string', function (string $policy, array $components) {
    //Test
    list($action,$methods,$pathex) = $this->parser->extract($policy);

    //Assert
    expect($action)->toBe($components[0]);
    expect($methods)->toBe($components[1]);
    expect($pathex)->toBe($components[2]);
})->with([
  ['policy' => 'allow * /.*/', 'components' => ['allow','*','/.*/']], //allow everything,
  ['policy' => 'allow * /abc/', 'components' => ['allow','*','/abc/']],
  ['policy' => 'allow GET,PUT,PATCH,POST,DELETE /.*/', 'components' => ['allow','GET,PUT,PATCH,POST,DELETE','/.*/']], //allow everything explicitely
  ['policy' => 'deny * /\/admin(\/.*)?/', 'components' => ['deny','*','/\/admin(\/.*)?/']], //deny /admin or /admin/*
  ['policy' => 'allow * /\/entity(\/.*)?/', 'components' => ['allow','*','/\/entity(\/.*)?/']], //allow /entity or /entity/*
  ['policy' => 'deny POST /\/entity(\/.*)?/', 'components' => ['deny','POST','/\/entity(\/.*)?/']], //deny POST /entity or /entity/*
  ]);

test('[AutorizeStringParser::extract] cannot extract components from invalid authorization string', function (string $policy, int $failWith) {
    
    //Test
    list($action,$methods,$pathex) = $this->parser->extract($policy);

    //Assert
    expect($action)->toBe($failWith);
})->with([
  ['policy' => 'allow GET,POST,PULL /.*/', 'failWith' => AutorizeStringParser::FAIL_POLICY_INVALID],
  ['policy' => 'allow + /.*/', 'failWith' => AutorizeStringParser::FAIL_POLICY_INVALID],
  ['policy' => 'accept * /abc/', 'failWith' => AutorizeStringParser::FAIL_POLICY_INVALID],
  ['policy' => 'reject POST /edf/', 'failWith' => AutorizeStringParser::FAIL_POLICY_INVALID],
  ['policy' => 'allow * /', 'failWith' => AutorizeStringParser::FAIL_PATH_INVALID],
  ['policy' => 'allow GET abc', 'failWith' => AutorizeStringParser::FAIL_PATH_INVALID],
]);;