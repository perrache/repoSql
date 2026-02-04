<?php

namespace Perrache\Reposql;

use PgSql\Connection;

class Sql
{
    private Connection $conn;

    public function __construct(string $conn_string)
    {
        $this->conn = pg_connect($conn_string);
    }

    public function ddl(string $sql)
    {
        return pg_query($this->conn, $sql);
    }

    public function dml(string $sql)
    {
        return pg_fetch_all(pg_query($this->conn, $sql));
    }
}
