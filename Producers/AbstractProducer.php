<?php

namespace Producers;

use CurrencySources\Currency as Currency;

abstract class AbstractProducer implements IReciever
{
    /**
     * @var IReciever
     */
    private $source;

    /**
     * CacheProducer constructor.
     * @param IReciever $source
     */
    public function __construct(IReciever $source)
    {
        $this->source=$source;
    }

    /**
     * @param Currency $from
     * @param Currency $to
     * @param float $value
     * @return Course
     */
    public function receive(Currency $from,Currency $to,float $value) : Course
    {
        $course=$this->getCourse($from, $to,$value);
        if (false===$course->isExistCourse()){
            $course=$this->source->receive($from,$to,$value);
            $this->save($course);
        }
        return $course;
    }

    abstract protected function save(Course $course);
}