<?php

namespace Songhub\core;

use Songhub\core\database\QueryBuilder;
use Songhub\core\traits\Loggable;

class Repository
{
    use Loggable;
    private QueryBuilder $queryBuilder;

    public function setQueryBuilder(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    }

}