<?php

namespace Tests;

use App\Repositories\UploadRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Http\UploadedFile;
use SplFileObject;
use Symfony\Component\HttpFoundation\File\UploadedFile as File;

ini_set('memory_limit','2048M');

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    /**
     * @var UploadRepository
     */
    protected $uploadRepository;

    protected function setUp() : void {
        parent::setUp();
        $this->uploadRepository = app(UploadRepository::class);
    }

    /**
     * @return File
     */
    protected function setupFile(): File
    {
        \File::copy(public_path('/uploads/upload.png'), public_path('/test/upload.png'));
        return new File(
            public_path('/test/') . 'upload.png',
            'upload',
            'png',
            null,
            true);
    }
}
