<?php

namespace App\Console\Commands\Auth;

use App\Auth\AutorizeStringParser;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('jwta:test {policy} {method=GET} {route?}')]
#[Description('Command description')]
class JwtaTest extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $policy = $this->argument('policy');
        $parser = new AutorizeStringParser;

        if ($parser->isValid($policy)) {
          try {
            list($action, $method, $pathex) = $parser->extract($policy);
            $this->info("policy is valid! [{$action}] [{$method}] [{$pathex}]");

            $inMethod = $this->argument('method');
            $inRoute = $this->argument('route');
          } catch (\Exception $ex) {
            $this->error($ex->getMessage());
          }
        } else {
          $this->error('policy is invalid.');
        }
    }
}
