<?php

use Producers\IReciever;
use CurrencySources\ICurrencyList;
use Producers\Course;

class CurrencyCourseReceiver
{
    /**
     * @var ICurrencyList
     */
    private $currencyList;

    /**
     * @var IReciever
     */
    private $receiver;

    /**
     * CurrencyCourseReceiver constructor.
     * @param ICurrencyList $currencyList
     * @param IReciever $receiver
     */
    public function __construct(ICurrencyList $currencyList,IReciever $receiver)
    {
        $this->currencyList=$currencyList;
        $this->receiver=$receiver;
    }

    /**
     * @param float $value
     * @param string $toCourceCode
     * @param string $fromCourceCode
     * @return Course
     */
    public function calcCourse(float $value,string $toCourceCode,string $fromCourceCode)
    {
        if ((false===$this->currencyList->isCurrencyExistByCode($fromCourceCode))||(false===$this->currencyList->isCurrencyExistByCode($toCourceCode))){
            return new Course($this->currencyList->getCurrencyByCode($fromCourceCode),$this->currencyList->getCurrencyByCode($toCourceCode),0);
        }
        return $this->receiver->receive($this->currencyList->getCurrencyByCode($fromCourceCode),$this->currencyList->getCurrencyByCode($toCourceCode),$value);
    }


}