<?php namespace Modules\ProjectManager\Repositories\Cache;

use Modules\ProjectManager\Repositories\MilestoneRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMilestoneDecorator extends BaseCacheDecorator implements MilestoneRepository
{
    public function __construct(MilestoneRepository $milestone)
    {
        parent::__construct();
        $this->entityName = 'projectmanager.milestones';
        $this->repository = $milestone;
    }
}
