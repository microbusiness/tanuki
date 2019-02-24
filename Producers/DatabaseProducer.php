<?php

namespace Producers;

use CurrencySources\Currency as Currency;

class DatabaseProducer extends AbstractProducer
{

    /**
     * @param \Producers\Course $course
     */
    public function save(Course $course) : void
    {
        // TODO: Implement save() method.
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