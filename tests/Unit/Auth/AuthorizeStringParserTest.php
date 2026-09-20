<?php

use App\Auth\AutorizeStringParser;
use App\Auth\AuthorizePolicy;

beforeEach(function () {
    $this->parser = new AutorizeStringParser;
});

// Runs AFTER every test in this file
afterEach(function ()
{
  
});

test('[AutorizeStringParser::isValid] can validate authorization string', function () {
    //Test
    $isValid1 = $this->parser->isValid('allow * \/api\/.*');
    $isValid2 = $this->parser->isValid('deny * \/api\/admin(\/.*)?');
    
    //Assert
    expect($isValid1)->toBeTrue();
    expect($isValid2)->toBeTrue();
});

test('[AutorizeStringParser::extractPolicy] works', function () {
    //Setup
    $expected = new AuthorizePolicy('allow','*','\/api\/.*');

    //Test
    $actual1 = $this->parser->extractPolicy('allow * \/api\/.*');
    $actual2 = $this->parser->extractPolicy('deny * \/api\/.*');

    //Assert
    expect($actual1)->toMatchObject($expected);
    expect($actual2)->not->toMatchObject($expected);
});

