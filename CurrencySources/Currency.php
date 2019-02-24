<?php

namespace CurrencySources;

class Currency
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $code;

    /**
     * Currency constructor.
     * @param $name
     * @param $code
     */
    public function __construct($name,$code)
    {
        $this->name=$name;
        $this->code=$code;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
}