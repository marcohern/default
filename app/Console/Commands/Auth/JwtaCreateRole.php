<?php

namespace App\Console\Commands\Auth;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

#[Signature('jwta:create-role {role-name} {--allow-all-by-default}')]
#[Description('Create a new role.')]
class JwtaCreateRole extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
      $roleName = $this->argument('role-name');
      $filepath = "auth/roles/$roleName.json";
      $policies = ['deny * /.*/'];
      if ($this->option('allow-all-by-default')) {
        $policies[0] = 'allow * /.*/';
      }
      $disk = Storage::disk('local');
      if ($disk->exists($filepath))
      {
        $this->error('role allready exists: '.$filepath);
      }
      
      $disk->put($filepath, json_encode($policies));
    }
}
