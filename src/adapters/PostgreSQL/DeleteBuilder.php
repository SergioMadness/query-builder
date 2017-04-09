<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

class DeleteBuilder extends \pwf\components\querybuilder\adapters\MySQL\DeleteBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"'.$this->getTable().'"';
    }
}