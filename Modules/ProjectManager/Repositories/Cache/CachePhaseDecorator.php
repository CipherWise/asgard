<?php namespace Modules\ProjectManager\Repositories\Cache;

use Modules\ProjectManager\Repositories\PhaseRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePhaseDecorator extends BaseCacheDecorator implements PhaseRepository
{
    public function __construct(PhaseRepository $phase)
    {
        parent::__construct();
        $this->entityName = 'projectmanager.phases';
        $this->repository = $phase;
    }
}
