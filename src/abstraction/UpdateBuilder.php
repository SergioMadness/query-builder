<?php

namespace pwf\components\querybuilder\abstraction;

use pwf\components\querybuilder\interfaces\InsertBuilder as IInsertBuilder;

abstract class UpdateBuilder extends InsertBuilder implements IInsertBuilder
{

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
        $fields = $this->buildFields();
        $where = $this->buildWhere();

        $result .= 'UPDATE ' . $table . ' SET ' . $fields;

        if ($where != '') {
            $result .= ' ' . $where;
        }

        return $result;
    }
}