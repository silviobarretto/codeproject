<?php

namespace CarreiraEad\Providers;

use Illuminate\Support\ServiceProvider;

class CarreiraEadRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \CarreiraEad\Repositories\ClientRepository::class,
            \CarreiraEad\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\CursoRepository::class,
            \CarreiraEad\Repositories\CursoRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\UserRepository::class,
            \CarreiraEad\Repositories\UserRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\MemberRepository::class,
            \CarreiraEad\Repositories\MemberRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\ProjectMemberRepository::class,
            \CarreiraEad\Repositories\ProjectMemberRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\ProjectRepository::class,
            \CarreiraEad\Repositories\ProjectRepositoryEloquent::class
        );

        $this->app->bind(
            \CarreiraEad\Repositories\ProjectNoteRepository::class,
            \CarreiraEad\Repositories\ProjectNoteRepositoryEloquent::class
        );
    }
}
