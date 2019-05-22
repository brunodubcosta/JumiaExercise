<?php

namespace models;
use classes\DB;

abstract class Model
{
    /** @var DB */
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }
}