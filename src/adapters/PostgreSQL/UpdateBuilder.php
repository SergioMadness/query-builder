<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

use pwf\components\querybuilder\adapters\MySQL\UpdateBuilder as AUpdateBuilder;

class UpdateBuilder extends AUpdateBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"' . $this->getTable() . '"';
    }
}