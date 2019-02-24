<?php

namespace Producers;

use CurrencySources\Currency as Currency;

class Course
{
    /**
     * @var Currency
     */
    private $from;

    /**
     * @var Currency
     */
    private $to;

    /**
     * @var float
     */
    private $value;

    /**
     * Course constructor.
     * @param Currency $from
     * @param Currency $to
     * @param float $value
     */
    public function __construct(Currency $from,Currency $to,float $value)
    {
        $this->from=$from;
        $this->to=$to;
        $this->value=$value;
    }

    /**
     * @return bool
     */
    public function isExistCourse() : bool
    {
        if ($this->value==0){
            return false;
        } else {
            return true;
        }
    }
}