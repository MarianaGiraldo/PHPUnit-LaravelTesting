<?php

namespace Tests\Unit\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    public function test_profile()
    {
        Storage::fake('local');
        $response = $this->post('photo',[
            'photo' => $photo = UploadedFile::fake()->image('photo.jpeg')
        ]);
        Storage::disk('local')->assertExists("photos/{$photo->hashName()}");
        $response->assertRedirect('photo');

    }
}
