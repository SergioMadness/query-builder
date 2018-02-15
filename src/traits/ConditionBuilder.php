<?php

namespace pwf\components\querybuilder\traits;

trait ConditionBuilder
{

    use Parameterized;
    /**
     * Conditions
     *
     * @var array
     */
    private $condition = [];

    /**
     * Set params
     *
     * @param array $condition
     * @return $this
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Get conditions
     *
     * @return array
     */
    public function getCondition()
    {
        return $this->condition;
    }
}