<?php

namespace pwf\components\querybuilder\adapters\MySQL;

use pwf\components\querybuilder\traits\Conditional;
use pwf\components\querybuilder\traits\QueryBuilder;
use pwf\components\querybuilder\traits\Parameterized;
use pwf\components\querybuilder\abstraction\UpdateBuilder as AUpdateBuilder;

class UpdateBuilder extends AUpdateBuilder
{

    use QueryBuilder,
        Conditional,
        Parameterized {
        getParams as parentGetParams;
    }

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
    protected function buildFields()
    {
        $result = '';

        $fields = array_keys($this->parentGetParams());
        foreach ($fields as $value) {
            if ($result != '') {
                $result .= ', ';
            }
            $result .= $value . '=?';
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

    /**
     * @inheritdoc
     */
    public function getParams()
    {
        return array_values(array_merge($this->parentGetParams(),
            $this->getConditionBuilder()->getParams()));
    }
}