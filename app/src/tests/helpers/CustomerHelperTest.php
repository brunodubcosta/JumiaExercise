<?php
declare (strict_types = 1);

namespace unitTests\helpers;

use classes\helpers\CustomerHelper;
use PHPUnit\Framework\TestCase;

class CustomerHelperTest extends TestCase
{

    //Morocco

    public function testisMoroccoPhoneValid()
    {
        $phone = '(212) 698054317';
        $this->assertTrue(CustomerHelper::isPhoneValid($phone));
    }

    public function testisMoroccoPhoneInvalid()
    {
        $phone = '(212) 69805431A';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }

    public function testGetMoroccoCountryCodeByPhoneNumber(){
        $phone = '(212) 698054317';
        $expectedValue = '+212';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryCode($phone));
    }

    public function testGetMoroccoCountryNameByCountryCode()
    {
        $countryCode = "+212";
        $expectedValue = 'Morocco';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryName($countryCode));
     }

    //Ethiopia

    public function testisEthiopiaPhoneValid()
    {
        $phone = '(251) 914701723';
        $this->assertTrue(CustomerHelper::isPhoneValid($phone));
    }
    public function testisEthiopiaPhoneInvalid()
    {
        $phone = '(251)	9773199405';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }

    public function testGetEthiopiaCountryCodeByPhoneNumber(){
        $phone = '(251) 914701723';
        $expectedValue = '+251';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryCode($phone));
    }

    public function testGetEthiopiaCountryNameByCountryCode()
    {
        $countryCode = "+251";
        $expectedValue = 'Ethiopia';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryName($countryCode));
     }

    //Mozambique
    public function testisMozambiquePhoneValid()
    {
        $phone = '(258) 849181828';
        $this->assertTrue(CustomerHelper::isPhoneValid($phone));
    }
    public function testisMozambiquePhoneInvalid()
    {
        $phone = '(258)	84330678235';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }
    public function testGetMozambiqueCountryCodeByPhoneNumber(){
        $phone = '(258) 847602609';
        $expectedValue = '+258';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryCode($phone));
    }

    public function testGetMozambiqueCountryNameByCountryCode()
    {
        $countryCode = "+258";
        $expectedValue = 'Mozambique';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryName($countryCode));
     }

    //Uganda

    public function testisUgandaPhoneValid()
    {
        $phone = '(256) 775069443';
        $this->assertTrue(CustomerHelper::isPhoneValid($phone));
    }
    public function testisUgandaPhoneInvalid()
    {
        $phone = '(256)	775069443';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }
    public function testGetUgandaCountryCodeByPhoneNumber(){
        $phone = '(256) 7503O6263';
        $expectedValue = '+256';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryCode($phone));
    }

    public function testGetUgandaCountryNameByCountryCode()
    {
        $countryCode = "+256";
        $expectedValue = 'Uganda';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryName($countryCode));
     }

    //Cameroon

    public function testisCameroonPhoneValid()
    {
        $phone = '(237)	697151594';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }

    public function testisCameroonPhoneInValid()
    {
        $phone = '(237) 6A0311634';
        $this->assertFalse(CustomerHelper::isPhoneValid($phone));
    }

    public function testGetCameroonCountryCodeByPhoneNumber(){
        $phone = '(237) 697151594';
        $expectedValue = '+237';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryCode($phone));
    }

    public function testGetCameroonCountryNameByCountryCode()
    {
        $countryCode = "+237";
        $expectedValue = 'Cameroon';
        $this->assertEquals($expectedValue,CustomerHelper::getCountryName($countryCode));
     }

     //Other
     public function testValidGetOnlyPhoneNumber(){
        $phone = '(237) 697151594';
        $expectedValue = '697151594';
        $this->assertEquals($expectedValue,CustomerHelper::getOnlyPhoneNumber($phone));
     }
     public function testInvalidGetOnlyPhoneNumber(){
        $phone = '(237) 697151594';
        $expectedValue = '(237) 697151594';
        $this->assertNotEquals($expectedValue,CustomerHelper::getOnlyPhoneNumber($phone));
     }
}
