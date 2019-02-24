<?php

namespace CurrencySources;

class CurrencyList implements ICurrencyList
{
    /**
     * @var array
     */
    private $list;

    /**
     * CurrencyList constructor.
     */
    public function __construct()
    {
        //@todo implement fill list currencies
        $this->list=[];
    }

    /**
     * @param string $code
     * @return Currency
     */
    public function getCurrencyByCode(string $code) : Currency
    {
       if (isset($this->list[$code]) || array_key_exists($code, $this->list)){
           return $this->list[$code];
       } else {
           return $this->getUndefinedCurrency($code);
       }
    }

    /**
     * @param string $code
     * @return bool
     */
    public function isCurrencyExistByCode(string $code) : bool
    {
        if (isset($this->list[$code]) || array_key_exists($code, $this->list)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $code
     * @return Currency
     */
    private function getUndefinedCurrency(string $code) : Currency
    {
        return new Currency('undefined',$code);
    }

}