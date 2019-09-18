<?php

namespace App\Providers;

use App\Repositories\UploadRepository;
use App\Repositories\UploadRepositoryInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class UploadServiceProvider
 * @package App\Repositories
 */
class UploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrapping upload repository with its interface
     */
    public function register()
    {
        $this->app->bind(
        UploadRepositoryInterface::class,
        UploadRepository::class
        );
    }
}