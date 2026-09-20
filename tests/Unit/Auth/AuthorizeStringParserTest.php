<?php

use App\Auth\AutorizeStringParser;

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
    $isValid2 = $this->parser->isValid('deny PATCH \/api\/admin(\/.*)?');
    $isValid3 = $this->parser->isValid('accept PULLUP \/whatever');
    $isValid4 = $this->parser->isValid('reject SIMMER someother');
    
    //Assert
    expect($isValid1)->toBeTrue();
    expect($isValid2)->toBeTrue();
    expect($isValid3)->toBeFalse();
    expect($isValid4)->toBeFalse();
});

test('[AutorizeStringParser::extract] can extract components from valid authorization string', function () {
    //Test
    list($action1,$methods1,$pathex1) = $this->parser->extract('allow * \/api\/.*');
    list($action2,$methods2,$pathex2) = $this->parser->extract('deny DELETE \/api\/users\/.*');

    //Assert
    expect($action1)->toBe('allow');
    expect($methods1)->toBe('*');
    expect($pathex1)->toBe('\/api\/.*');
    expect($action2)->toBe('deny');
    expect($methods2)->toBe('DELETE');
    expect($pathex2)->toBe('\/api\/users\/.*');
});

test('[AutorizeStringParser::extract] cannot extract components from invalid authorization string', function () {
    //Test
    $result = $this->parser->extract('allow GET,POST,PULL \/api\/.*');

    //Assert
    expect($result)->toBe(null);
});