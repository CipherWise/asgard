<?php namespace Modules\ProjectManager\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\ProjectManager\Repositories\ProjectRepository',
            function () {
                $repository = new \Modules\ProjectManager\Repositories\Eloquent\EloquentProjectRepository(new \Modules\ProjectManager\Entities\Project());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ProjectManager\Repositories\Cache\CacheProjectDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\ProjectManager\Repositories\PhaseRepository',
            function () {
                $repository = new \Modules\ProjectManager\Repositories\Eloquent\EloquentPhaseRepository(new \Modules\ProjectManager\Entities\Phase());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ProjectManager\Repositories\Cache\CachePhaseDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\ProjectManager\Repositories\MilestoneRepository',
            function () {
                $repository = new \Modules\ProjectManager\Repositories\Eloquent\EloquentMilestoneRepository(new \Modules\ProjectManager\Entities\Milestone());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ProjectManager\Repositories\Cache\CacheMilestoneDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\ProjectManager\Repositories\TaskRepository',
            function () {
                $repository = new \Modules\ProjectManager\Repositories\Eloquent\EloquentTaskRepository(new \Modules\ProjectManager\Entities\Task());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ProjectManager\Repositories\Cache\CacheTaskDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\ProjectManager\Repositories\StepRepository',
            function () {
                $repository = new \Modules\ProjectManager\Repositories\Eloquent\EloquentStepRepository(new \Modules\ProjectManager\Entities\Step());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ProjectManager\Repositories\Cache\CacheStepDecorator($repository);
            }
        );
// add bindings





    }
}
