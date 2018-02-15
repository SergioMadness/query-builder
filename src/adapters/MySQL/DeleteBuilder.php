<?php

namespace pwf\components\querybuilder\adapters\MySQL;

use pwf\components\querybuilder\traits\Conditional;
use pwf\components\querybuilder\traits\QueryBuilder;
use pwf\components\querybuilder\traits\Parameterized;
use pwf\components\querybuilder\abstraction\DeleteBuilder as ADeleteBuilder;

class DeleteBuilder extends ADeleteBuilder
{

    use QueryBuilder,
        Conditional,
        Parameterized;

    /**
     * @inheritdoc
     */
    protected function buildWhere()
    {
        $result = '';

        $where = $this->getConditionBuilder()
            ->setCondition($this->getWhere())
            ->generate();

        if ($where != '') {
            $result .= 'WHERE ' . $where;
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return $this->getTable();
    }
}