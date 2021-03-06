<?php

namespace pwf\components\querybuilder\abstraction;

abstract class SelectBuilder implements \pwf\components\querybuilder\interfaces\SelectBuilder
{
    /**
     * FOR UPDATE mode
     *
     * @var bool
     */
    private $forUpdate = false;

    /**
     * Build select part
     *
     * @return string
     */
    protected abstract function buildSelectFields();

    /**
     * Build where part
     *
     * @return string
     */
    protected abstract function buildWhere();

    /**
     * Build having part
     *
     * @return string
     */
    protected abstract function buildHaving();

    /**
     * Build join part
     *
     * @return string
     */
    protected abstract function buildJoin();

    /**
     * Build union part
     *
     * @return string
     */
    protected abstract function buildUnion();

    /**
     * Build from part
     *
     * @return string
     */
    protected abstract function buildTable();

    /**
     * Build limit part
     *
     * @return string
     */
    protected abstract function buildLimit();

    /**
     * Build group part
     *
     * @return string
     */
    protected abstract function buildGroup();

    /**
     * Build order by part
     *
     * @return string
     */
    protected abstract function buildOrder();

    /**
     * Set 'for update' mode
     *
     * @param bool $flag
     * @return \pwf\components\querybuilder\abstraction\SelectBuilder
     */
    public function forUpdate($flag = true)
    {
        $this->forUpdate = $flag;
        return $this;
    }

    /**
     * Get flag 'for update'
     *
     * @return bool
     */
    public function isForUpdate()
    {
        return $this->forUpdate;
    }

    /**
     * Generate query
     *
     * @return string
     */
    public function generate()
    {
        $result = '';

        $table  = $this->buildTable();
        $select = $this->buildSelectFields();
        $where  = $this->buildWhere();
        $having = $this->buildHaving();
        $join   = $this->buildJoin();
        $limit  = $this->buildLimit();
        $group  = $this->buildGroup();
        $union  = $this->buildUnion();
        $order  = $this->buildOrder();

        $result .= 'SELECT '.$select.' FROM '.$table;
        if ($join != '') {
            $result .= ' '.$join;
        }
        if ($where != '') {
            $result .= ' '.$where;
        }
        if ($group != '') {
            $result .= ' '.$group;
        }
        if ($order != '') {
            $result .= ' '.$order;
        }
        if ($limit != '') {
            $result .= ' '.$limit;
        }
        if ($having != '') {
            $result .= ' '.$having;
        }
        if ($union != '') {
            $result = '('.$result.')'.$union;
        }

        if ($this->isForUpdate()) {
            $result .= ' FOR UPDATE';
        }

        return $result;
    }
}