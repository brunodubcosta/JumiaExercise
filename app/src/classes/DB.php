<?php

namespace classes;

use PDO;

class DB
{
    private const DATABASE_PATH = "/../util/sample.db";

    /** @var string */
    protected $connectionString = "sqlite:" . __DIR__ . self::DATABASE_PATH;

    /**
     * @param string $sql
     *
     * @return array
     */
    public function executeObject(string $sql)
    {
        $database = new PDO($this->connectionString);
        $table = $database->query($sql);
        $data = [];

        while ($row = $table->fetch()) {
            $data[] = $row;
        }

        return $data;
    }
}
