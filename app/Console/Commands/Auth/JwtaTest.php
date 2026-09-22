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
            if (is_null($inRoute)) return;

            $itMatches = $parser->isMatch([$action, $method, $pathex], $inMethod, $inRoute);
            if ($itMatches) {
              $this->info("policy '$policy' matches [$inMethod] [$inRoute]");
              if ($action == 'allow') $this->info('You DO have permission to access this resource.');
              else $this->info('You DO NOT have permission to access this resource.');
            }
            else
              {
              $this->info("policy '$policy' does not match [$inMethod] [$inRoute]");
              $this->info("You DO NOT have permissions to access this resource");
            }
          } catch (\Exception $ex) {
            $this->error($ex->getMessage());
          }
        } else {
          $this->error('policy is invalid.');
        }
    }
}
