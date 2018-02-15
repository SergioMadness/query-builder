<?php

namespace pwf\components\querybuilder\abstraction;

use pwf\components\querybuilder\interfaces\DeleteBuilder as IDeleteBuilder;

abstract class DeleteBuilder implements IDeleteBuilder
{

    /**
     * Build table part
     *
     * @return string
     */
    protected abstract function buildTable();

    /**
     * Build where part
     *
     * @return string
     */
    protected abstract function buildWhere();

    /**
     * Generate query
     *
     * @return string
     */
    public function generate()
    {
        $result = '';

        $table = $this->buildTable();
        $where = $this->buildWhere();

        $result .= 'DELETE FROM ' . $table;

        if ($where != '') {
            $result .= ' ' . $where;
        }

        return $result;
    }
}