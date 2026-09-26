<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use Marcohern\Jwtauthorize\Middleware\Authorize;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Tests\TestCase;

uses(TestCase::class);

it('[Authorize::class] middleware allows access if the user is subscribed', function () {
    // 1. Arrange: Create a state that satisfies the middleware
    $user = User::factory()->make(['id' => 1]);
    $token = JWTAuth::claims([
      'scope'=> ['a' => 'allow', 'm'=>'GET', 'r'=>'/.*/']
    ])->fromUser($user);

    // 2. Arrange: Define a test route wrapped in the middleware
    Route::get('/test-subscribed', function () {
        return response('Success', 200);
    })->middleware(Authorize::class);

    // 3. Act & Assert: Act as the user and make a request to the test route
    $this->withHeader('Authorization', 'Bearer ' . $token)
        ->get('/test-subscribed')
        ->assertOk()
        ->assertSee('Success');
});