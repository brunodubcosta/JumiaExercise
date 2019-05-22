<?php

namespace classes\factories;

use classes\entities\CustomerEntity;
use classes\helpers\CustomerHelper;

class CustomerFactory
{
    /**
     * @param array $data
     *
     * @return CustomerEntity
     */
    public static function construct(array $data): CustomerEntity
    {
        $customer = new CustomerEntity();
        $customer->setName($data[1]);
        $customer->setPhone(CustomerHelper::getOnlyPhoneNumber($data[2]));
        $customer->setIsPhoneValid(CustomerHelper::isPhoneValid($data[2]));
        $customer->setCountryCode(CustomerHelper::getCountryCode($data[2]));
        $customer->setCountryName(CustomerHelper::getCountryName($customer->getCountryCode()));
        return $customer;
    }
}
