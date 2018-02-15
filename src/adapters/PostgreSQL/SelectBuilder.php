<?php

namespace pwf\components\querybuilder\adapters\PostgreSQL;

use pwf\components\querybuilder\adapters\MySQL\SelectBuilder as ASelectBuilder;

class SelectBuilder extends ASelectBuilder
{

    /**
     * @inheritdoc
     */
    protected function buildLimit()
    {
        $result = '';

        if (($limit = $this->getLimit()) > 0) {
            $result .= 'LIMIT ' . $limit;
        }
        if (($offset = $this->getOffset()) > 0) {
            $result .= ' ';
            $result .= 'OFFSET ' . $offset;
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    protected function buildTable()
    {
        return '"' . $this->getTable() . '"';
    }
}