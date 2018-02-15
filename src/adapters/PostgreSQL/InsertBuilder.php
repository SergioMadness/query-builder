<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

use pwf\components\querybuilder\adapters\MySQL\InsertBuilder as AInsertBuilder;

class InsertBuilder extends AInsertBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"' . $this->getTable() . '"';
    }
}