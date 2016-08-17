<?php namespace Modules\ProjectManager\Repositories\Cache;

use Modules\ProjectManager\Repositories\ProjectRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProjectDecorator extends BaseCacheDecorator implements ProjectRepository
{
    public function __construct(ProjectRepository $project)
    {
        parent::__construct();
        $this->entityName = 'projectmanager.projects';
        $this->repository = $project;
    }
}
