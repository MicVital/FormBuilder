<?php

namespace Modules\Formbuilder\Repositories\Cache;

use Modules\Formbuilder\Repositories\FormbuilderRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheFormbuilderDecorator extends BaseCacheDecorator implements FormbuilderRepository
{
    public function __construct(FormbuilderRepository $formbuilder)
    {
        parent::__construct();
        $this->entityName = 'formbuilder.formbuilders';
        $this->repository = $formbuilder;
    }
}
