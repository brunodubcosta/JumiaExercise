<?php

use classes\helpers\Paginate;
use classes\helpers\types\FilterType as Filter;
use classes\helpers\types\StateType;

require __DIR__ . '/../../vendor/autoload.php';
include '../controllers/CustomerController.php';

$filters = [
    Filter::BY_COUNTRY_KEY =>
    isset($_POST[Filter::BY_COUNTRY_KEY])
        ? $_POST[Filter::BY_COUNTRY_KEY]
        : Filter::BY_COUNTRY_DEFAULT,
    Filter::BY_STATE_KEY =>
    isset($_POST[Filter::BY_STATE_KEY])
        ? $_POST[Filter::BY_STATE_KEY]
        : Filter::BY_STATE_DEFAULT,
    Filter::BY_PAGE_KEY =>
    isset($_POST[Filter::BY_PAGE_KEY])
        ? $_POST[Filter::BY_PAGE_KEY]
        : Filter::BY_PAGE_DEFAULT, //has to be last filter.
];

$customersList = indexCustomersNumbers($filters);

// **** Pagination ****
$num = isset($_POST[Filter::BY_PAGE_KEY]) ? intval($_POST[Filter::BY_PAGE_KEY]) : 0;
$countCustomers = count($customersList);
$paginate = new Paginate($num, $countCustomers);
// **** Pagination ****

$countriesSelectList = [
    Filter::BY_COUNTRY_DEFAULT => 'All',
    '251' => 'Ethiopia',
    '212' => 'Morocco',
    '258' => 'Mozambique',
    '256' => 'Uganda',
    '237' => 'Cameroon'
];

$stateSelectList = [
    Filter::BY_STATE_DEFAULT => 'All',
    StateType::INVALID => 'Invalid phone numbers',
    StateType::VALID => 'Valid phone numbers',
];

include __DIR__ . '/../views/customer/Show.php';
