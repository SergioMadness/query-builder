<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

use pwf\components\querybuilder\adapters\MySQL\DeleteBuilder as ADeleteBuilder;

class DeleteBuilder extends ADeleteBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"' . $this->getTable() . '"';
    }
}