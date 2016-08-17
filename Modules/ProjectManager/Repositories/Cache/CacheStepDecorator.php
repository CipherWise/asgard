<?php namespace Modules\ProjectManager\Repositories\Cache;

use Modules\ProjectManager\Repositories\StepRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheStepDecorator extends BaseCacheDecorator implements StepRepository
{
    public function __construct(StepRepository $step)
    {
        parent::__construct();
        $this->entityName = 'projectmanager.steps';
        $this->repository = $step;
    }
}
