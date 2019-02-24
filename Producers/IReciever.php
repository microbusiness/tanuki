<?php

namespace Producers;

use CurrencySources\Currency as Currency;

interface IReciever
{
    /**
     * @param Currency $from
     * @param Currency $to
     * @param float $value
     * @return Course
     */
    public function receive(Currency $from,Currency $to,float $value) : Course;

    /**
     * @param \CurrencySources\Currency $from
     * @param \CurrencySources\Currency $to
     * @param float $value
     * @return \Producers\Course
     */
    public function getCourse(Currency $from,Currency $to,float $value) : Course;
}