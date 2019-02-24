<?php

namespace Producers;

use CurrencySources\Currency as Currency;

class HttpProducer implements IReciever
{
    public function receive(Currency $from, Currency $to, float $value): Course
    {
        return $this->getCourse($from,$to,$value);
    }

    /**
     * @param \CurrencySources\Currency $from
     * @param \CurrencySources\Currency $to
     * @param float $value
     * @return \Producers\Course
     */
    public function getCourse(Currency $from,Currency $to,float $value): Course
    {
        // TODO: Implement receive() method.
        return new Course($from,$to,1);
    }
}