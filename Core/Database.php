<?php

namespace Core;

use PDO;

class Database
{

    public $connection, $statement;

    public function __construct($config, $user = 'root', $password = 'root')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {


        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {

        return $this->statement->fetch();
    }

    public function findOrFail()
    {

        $result = $this->find();

        if (!$result) {
            abort();
        }
        return $result;
    }
}
