<?php

namespace pwf\components\querybuilder\adapters\MySQL;

class DeleteBuilder extends \pwf\components\querybuilder\abstraction\DeleteBuilder
{

    use \pwf\components\querybuilder\traits\QueryBuilder,
        \pwf\components\querybuilder\traits\Conditional,
        \pwf\components\querybuilder\traits\Parameterized;

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
            $result.='WHERE '.$where;
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