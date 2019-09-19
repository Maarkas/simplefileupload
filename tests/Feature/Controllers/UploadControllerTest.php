<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UploadControllerTest extends TestCase
{
    /**
     * Testing if main upload index route opens
     *
     * @return void
     */
    public function testHomeRouteOpens(): void
    {
        $response = $this->get('/upload');
        $response->assertStatus(200);
    }

    private function storeFile() {
        $fileContent = $this->setupFile();
        return $this->uploadRepository->store('Test File', $fileContent);
    }

    public function testUploadShowOpens(): void
    {
        $file = $this->storeFile();
        $response = $this->get('/upload/', ['upload' => $file]);
        $response->assertStatus(200);
    }
}
