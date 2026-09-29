<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_issues_a_token_that_authorizes_the_auth_routes(): void
    {
        $user = User::factory()->create(['password' => 'secret']);

        $token = $this->postJson('/api/auth/login', ['email' => $user->email, 'password' => 'secret'])
            ->assertOk()
            ->json('access_token');

        $this->withToken($token)->postJson('/api/auth/me')
            ->assertOk()
            ->assertJsonPath('user.id', $user->id)
            ->assertJsonPath('scope', ['allow * /\/api\/auth(\/.*)?/']);
    }

    public function test_auth_routes_are_forbidden_when_the_token_scope_does_not_cover_them(): void
    {
        $user = User::factory()->create();
        $token = auth('api')->claims(['scope' => ['allow GET /\/api\/cv_profiles/']])->login($user);

        $this->withToken($token)->postJson('/api/auth/me')->assertForbidden();
    }

    public function test_auth_routes_require_a_token(): void
    {
        $this->postJson('/api/auth/me')->assertUnauthorized();
    }
}
