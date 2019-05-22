<?php

namespace classes\interfaces;

interface IEntity
{
    public static function getTableName(): string;
    public static function getColumns(): array;
}