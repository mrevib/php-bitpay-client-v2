<?php

/**
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Rate;

class Rate
{
    protected $name;
    protected $code;
    protected $rate;

    public function __construct()
    {
    }

    /**
     * Gets detailed currency name
     *
     * @return string the name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets detailed currency name
     *
     * @param string $name the name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets ISO 4217 3-character currency code
     *
     * @return string the code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets ISO 4217 3-character currency code
     *
     * @param string $code the code
     */
    public function setCode(string $code)
    {
        $this->code = $code;
    }

    /**
     * Gets rate for the requested baseCurrency /currency pair
     *
     * @return float the rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets rate for the requested baseCurrency /currency pair
     *
     * @param float $rate the rate
     */
    public function setRate(float $rate)
    {
        $this->rate = $rate;
    }

    /**
     * Gets Rate as array
     *
     * @return array Rate as array
     */
    public function toArray()
    {
        $elements = [
            'name' => $this->getName(),
            'code' => $this->getCode(),
            'rate' => $this->getRate(),
        ];

        foreach ($elements as $key => $value) {
            if (empty($value)) {
                unset($elements[$key]);
            }
        }

        return $elements;
    }
}
