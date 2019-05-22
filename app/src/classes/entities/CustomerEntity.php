<?php

namespace classes\entities;

use classes\interfaces\IEntity;

class CustomerEntity implements IEntity
{
    //Customer Entity Info
    private const TABLE_NAME = "customer";

    public const COLUMN_ID = "id";
    public const COLUMN_NAME = "name";
    public const COLUMN_PHONE = "phone";

    private const COLUMNS = [
        self::COLUMN_ID,
        self::COLUMN_NAME,
        self::COLUMN_NAME,
    ];

    //Props
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $phone;

    /** @var bool */
    private $isPhoneValid;

    /** @var string */
    private $countryName;

    /** @var string */
    private $countryCode;

    //Get

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @return bool
     */
    public function isPhoneValid(): bool
    {
        return $this->isPhoneValid;
    }

    //Set

    /**
     * @param string $value
     */
    public function setName(string $value)
    {
        $this->name = $value;
    }

    /**
     * @param string $value
     */
    public function setPhone(string $value)
    {
        $this->phone = $value;
    }

    /**
     * @param bool $value
     */
    public function setIsPhoneValid(bool $value)
    {
        $this->isPhoneValid = $value;
    }

    /**
     * @param string $value
     */
    public function setCountryCode(string $value)
    {
        $this->countryCode = $value;
    }

    /**
     * @param string $value
     */
    public function setCountryName(string $value)
    {
        $this->countryName = $value;
    }

    //override from IEntity

    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return self::TABLE_NAME;
    }

    /**
     * @return array
     */
    public static function getColumns(): array
    {
        return self::COLUMNS;
    }

}
