<?php

namespace pwf\components\querybuilder\adapters\MySQL;

use pwf\components\querybuilder\traits\QueryBuilder;
use pwf\components\querybuilder\traits\Parameterized;
use pwf\components\querybuilder\abstraction\InsertBuilder as AInsertBuilder;

class InsertBuilder extends AInsertBuilder
{

    use QueryBuilder,
        Parameterized {
        getParams as parentGetParams;
    }

    /**
     * @inheritdoc
     */
    protected function buildFields()
    {
        $fields = array_keys($this->parentGetParams());
        $placeholders = $fields;
        array_walk($placeholders,
            function (&$value) {
                $value = '?';
            });
        return '(' . implode(', ', $fields) . ') VALUES (' . implode(', ',
                $placeholders) . ')';
    }

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return $this->getTable();
    }

    /**
     * Get params
     *
     * @return array
     */
    public function getParams()
    {
        return array_values($this->parentGetParams());
    }
}