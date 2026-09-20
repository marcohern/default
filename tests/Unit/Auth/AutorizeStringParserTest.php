<?php

namespace Tests\Unit\Auth;

use PHPUnit\Framework\TestCase;
use App\Auth\AutorizeStringParser;
use App\Auth\AuthorizePolicy;

class AutorizeStringParserTest extends TestCase
{
  /**
   * A basic unit test example.
   */
  public function test_isValid_allow_all_methods_and_all_api_paths(): void
  {
    $parser = new AutorizeStringParser;

    $isValid = $parser->isValid('allow * \/api\/.*');

    $this->assertTrue($isValid);
  }

  public function test_isValid_deny_all_methods_within_admin_path(): void
  {
    $parser = new AutorizeStringParser;

    $isValid = $parser->isValid('deny * \/api\/admin\/.*');
    
    $this->assertTrue($isValid);
  }

  public function test_extractPolicy_works(): void
  {
    $parser = new AutorizeStringParser;
    $expected = new AuthorizePolicy('allow','*','\/api\/.*');

    $actual1 = $parser->extractPolicy('allow * \/api\/.*');
    $actual2 = $parser->extractPolicy('deny * \/api\/.*');

    $this->assertEquals($expected, $actual1);
    $this->assertNotEquals($expected, $actual2);
  }
}
