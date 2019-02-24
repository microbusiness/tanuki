<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$from='RUB';
$to='USD';
$value=10;
$courseReceiver=new CurrencyCourseReceiver(new \CurrencySources\CurrencyList(),new \Producers\CacheProducer(new \Producers\DatabaseProducer(new \Producers\HttpProducer())));
$course=$courseReceiver->calcCourse($value,$to,$from);
echo $course->format('native');
