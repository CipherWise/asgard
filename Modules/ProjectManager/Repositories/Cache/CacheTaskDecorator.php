<?php namespace Modules\ProjectManager\Repositories\Cache;

use Modules\ProjectManager\Repositories\TaskRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTaskDecorator extends BaseCacheDecorator implements TaskRepository
{
    public function __construct(TaskRepository $task)
    {
        parent::__construct();
        $this->entityName = 'projectmanager.tasks';
        $this->repository = $task;
    }
}
