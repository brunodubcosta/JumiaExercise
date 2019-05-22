<?php

use models\Customer as CustomerModel;
use classes\helpers\types\FilterType as Filter;
use classes\helpers\types\StateType;
use classes\factories\CustomerFactory;

/**
 * Returns all numbers from Number's model
 *
 * @param array $filters
 *
 * @return array
 */
function indexCustomersNumbers(array $filters): array
{
    $customersData = (new CustomerModel())->getBy($filters);
    $customersArray = [];

    foreach ($customersData as $row) {

        $customerEntity = CustomerFactory::construct($row); //turns table row into customer obj

        switch ($filters[Filter::BY_STATE_KEY]) {
            //valid numbers
            case StateType::VALID:
                if ($customerEntity->isPhoneValid()) {
                    $customersArray[] = $customerEntity;
                }
                break;
            //invalid numbers
            case StateType::INVALID:
                if (!$customerEntity->isPhoneValid()) {
                    $customersArray[] = $customerEntity;
                }
                break;
            //all numbers
            default:
                $customersArray[] = $customerEntity;
                break;
        }
    }
    return $customersArray;
}




