<?php

namespace Bitpay\Util\JsonMapper;


class JsonMapper_Exception extends \Exception
{
    private $bitPayMessage = "Unexpected JsonMapper exception. ";
    private $bitPayCode    = "BITPAY-UTIL: ";

    /**
     * Construct the JsonMapper_Exception.
     *
     * @param string $message [optional] The Exception message to throw.
     */
    public function __construct($message = "")
    {

        $message = $this->bitPayCode.$this->bitPayMessage.$message;

        parent::__construct($message, 101);
    }
}