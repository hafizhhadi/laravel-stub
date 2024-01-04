<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Profiles\UserRepository;
use App\Repositories\Profiles\UserRepoInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Profiles
        $this -> app -> bind(UserRepoInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
