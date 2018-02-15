<?php

class PostgreSQLInsertBuilderTest extends \PHPUnit_Framework_TestCase
{
    public static $stubBuilder;

    protected function setUp()
    {
        self::$stubBuilder = \Codeception\Util\Stub::construct('\pwf\components\querybuilder\adapters\PostgreSQL\InsertBuilder');
    }

    protected function tearDown()
    {
        self::$stubBuilder = null;
    }

    public function testBuilder()
    {
        $params   = [
            'PARAM1' => 1,
            'PARAM2' => 2,
            'PARAM3' => 3,
        ];
        $expected = 'INSERT INTO "table_test" (PARAM1, PARAM2, PARAM3) VALUES (?, ?, ?)';

        self::$stubBuilder->table('table_test')->setParams($params);

        $this->assertEquals($expected, self::$stubBuilder->generate());

        $this->assertEquals(array_values($params), self::$stubBuilder->getParams());
    }
}