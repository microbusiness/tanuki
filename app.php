<?php


$from='RUB';
$to='USD';
$value=10;
$courseReceiver=new CurrencyCourseReceiver(new \CurrencySources\CurrencyList(),new \Producers\CacheProducer(new \Producers\DatabaseProducer(new \Producers\HttpProducer())));
$course=$courseReceiver->calcCourse($value,$to,$from);
