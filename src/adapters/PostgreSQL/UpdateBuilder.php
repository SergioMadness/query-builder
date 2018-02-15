<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

class UpdateBuilder extends \pwf\components\querybuilder\adapters\MySQL\UpdateBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"'.$this->getTable().'"';
    }
}