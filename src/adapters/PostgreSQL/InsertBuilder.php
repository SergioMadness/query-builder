<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

class InsertBuilder extends \pwf\components\querybuilder\adapters\MySQL\InsertBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"'.$this->getTable().'"';
    }
}