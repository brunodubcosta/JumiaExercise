<?php
declare (strict_types = 1);
namespace unitTests\factories;

use PHPUnit\Framework\TestCase;
use classes\entities\CustomerEntity;
use classes\factories\CustomerFactory;

class CustomerHelperTest extends TestCase
{

    public function testValidConstructCustomer(){
        $expected = new CustomerEntity;
        $expected->setName('Bruno');
        $expected->setPhone('775069443');
        $expected->setIsPhoneValid(true);
        $expected->setCountryCode('+256');
        $expected->setCountryName('Uganda');

        $values = [
            '1',
            'Bruno',
            '(256) 775069443',
        ];

        $this->assertEquals($expected,CustomerFactory::construct($values));
    }

    public function testInvalidConstructCustomer(){
        $expected = new CustomerEntity; 
        $expected->setName('Bruno');
        $expected->setPhone('913420701');
        $expected->setIsPhoneValid(true);
        $expected->setCountryCode('+251');
        $expected->setCountryName('Portugal');

        $values = [
            '1',
            'Bruno',
            '(256) 775069443',
        ];

        $this->assertNotEquals($expected,CustomerFactory::construct($values));
    }
}