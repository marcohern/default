<?php

namespace App\Console\Commands\Auth;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

//{--role=} {--in=}
#[Signature('jwta:add {policy} {--role=} {--in=?}')]
#[Description('Command description')]
class JwtaAdd extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $policy = $this->argument('policy');
        $roleName = $this->option('role');
        $in = $this->option('in');
        $disk = Storage::disk('local');
        $filepath = "auth/roles/$roleName.json";
        if (!$disk->exists($filepath)) $this->error('role does not exists! '.$filepath);
        
        $policies = json_decode($disk->get($filepath));
        if (array_key_exists($in, $policies)) $key = $in;
        else
        {
          $key = array_search($in, $policies);
          if (is_integer($key))
          {
            unset($policies[$key]);
            $key = $in;
            $policies[$key] = [];
          }
          else
          {
            $this->error('policy not found! ['.$in.']'); 
            return;
          }
        }
        
        $policies[$key][] = $policy;
        $disk->put($filepath, json_encode($policies));
    }
}
