<?php

namespace Tests\Feature;

use Tests\TestCase;

class CvPageTest extends TestCase
{
    /**
     * The CV page renders the cv view.
     */
    public function test_cv_page_renders_the_cv_view(): void
    {
        $response = $this->withoutVite()->get(route('cv'));

        $response->assertOk();
        $response->assertViewIs('cv');
        $response->assertSee('About Me');
    }
}
