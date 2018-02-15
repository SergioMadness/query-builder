<?php

namespace pwf\components\querybuilder\abstraction;

use pwf\components\querybuilder\interfaces\InsertBuilder as IInsertBuilder;

abstract class InsertBuilder implements IInsertBuilder
{

    /**
     * Build table part
     *
     * @return string
     */
    protected abstract function buildTable();

    /**
     * Build fields part
     *
     * @return string
     */
    protected abstract function buildFields();

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

        $result .= 'INSERT INTO ' . $table . ' ' . $fields;

        return $result;
    }
}