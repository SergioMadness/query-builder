<?php

namespace pwf\components\querybuilder\traits;

use pwf\components\querybuilder\interfaces\QueryBuilder;
use pwf\components\querybuilder\traits\QueryBuilder as QueryBuilderTrait;

trait SelectBuilder
{

    use QueryBuilderTrait;

    /**
     * Select fields
     *
     * @var array
     */
    private $selectFields = ['*'];

    /**
     * Limit
     *
     * @var int
     */
    private $limit = 0;

    /**
     * Offset
     *
     * @var int
     */
    private $offset = 0;

    /**
     * Having condition
     *
     * @var array
     */
    private $having = [];

    /**
     * Joins
     *
     * @var array
     */
    private $join = [];

    /**
     * Unions
     *
     * @var array
     */
    private $union = [];

    /**
     * Grouping
     *
     * @var array
     */
    private $group = [];

    /**
     * Order
     *
     * @var array
     */
    private $order = [];

    /**
     *
     * @param mixed $group
     * @return $this
     */
    public function group($group)
    {
        $this->group = (array)$group;
        return $this;
    }

    /**
     * Get group
     *
     * @return array
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set limit
     *
     * @param int $limit
     * @return $this
     */
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Get limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set offset
     *
     * @param int $offset
     * @return $this
     */
    public function offset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Get offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set having condition
     *
     * @param mixed $condition
     * @return $this
     */
    public function having($condition)
    {
        $this->having = array_merge($this->having, (array)$condition);
        return $this;
    }

    /**
     * Get having
     *
     * @return array
     */
    public function getHaving()
    {
        return $this->having;
    }

    /**
     * Set select fields
     *
     * @param array $fields
     * @return $this
     */
    public function select(array $fields)
    {
        $this->selectFields = $fields;
        return $this;
    }

    /**
     * Get select fields
     *
     * @return array
     */
    public function getSelect()
    {
        return $this->selectFields;
    }

    /**
     * Add union
     *
     * @param QueryBuilder $query
     * @return $this
     */
    public function union(QueryBuilder $query)
    {
        $this->union[] = $query;
        return $this;
    }

    /**
     * Get union
     *
     * @return array
     */
    public function getUnion()
    {
        return $this->union;
    }

    /**
     * Join table
     *
     * @param string $table
     * @param mixed $condition
     * @param int $joinType
     * @return $this
     */
    public function join($table, $condition, $joinType = self::JOIN_LEFT)
    {
        $this->join[] = [
            'table' => $table,
            'condition' => $condition,
            'jointType' => $joinType
        ];
        return $this;
    }

    /**
     * Set joins
     *
     * @param array $joins
     * @return $this
     */
    public function setJoins(array $joins)
    {
        $this->join = $joins;
        return $this;
    }

    /**
     * Get join
     *
     * @return array
     */
    public function getJoin()
    {
        return $this->join;
    }

    /**
     * Set order
     *
     * @param array $order
     * @return SelectBuilder
     */
    public function order($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get order
     *
     * @return array
     */
    public function getOrder()
    {
        return $this->order;
    }
}