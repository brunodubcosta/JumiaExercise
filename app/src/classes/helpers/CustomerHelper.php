<?php

namespace classes\helpers;
class CustomerHelper
{
    /**
     * @param string $phone
     *
     * @return bool
     */
    public static function isPhoneValid(string $phone): bool
    {
        switch (self::getCountryCode($phone)) {
            case "+237": //Cameroon
                return preg_match('/\(237\)\ ?[2368]\d{7,8}$/', $phone);
            case "+251": //Ethiopia
                return preg_match('/\(251\)\ ?[1-59]\d{8}$/', $phone);
            case "+212": //Morocco
                return preg_match('/\(212\)\ ?[5-9]\d{8}$/', $phone);
            case "+258": //Mozambique
                return preg_match('/\(258\)\ ?[28]\d{7,8}$/', $phone);
            case "+256": //Uganda
                return preg_match('/\(256\)\ ?\d{9}$/', $phone);
            default:
                return false;
        }
    }

    /**
     * @param string $countryCode
     *
     * @return string
     */
    public static function getCountryName(string $countryCode): string
    {
        switch ($countryCode) {
            case "+237":
                return "Cameroon";
            case "+251":
                return "Ethiopia";
            case "+212":
                return "Morocco";
            case "+258":
                return "Mozambique";
            case "+256":
                return "Uganda";
            default:
                return "?";
        }
    }

    /**
     * @param string $phone
     *
     * @return string
     */
    public static function getCountryCode(string $phone): string
    {
        $data = explode(' ', $phone);
        $code = str_replace(['(', ')'], '', $data[0]);
        return '+' . $code;
    }

    /**
     * @param string $phone
     *
     * @return string
     */
    public static function getOnlyPhoneNumber(string $phone): string
    {
        $data = explode(' ', $phone);
        return $data[1];
    }
}