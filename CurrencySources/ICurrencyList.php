<?php

namespace CurrencySources;

interface ICurrencyList
{
    /**
     * @param string $code
     * @return Currency
     */
    public function getCurrencyByCode(string $code) : Currency;

    /**
     * @param string $code
     * @return bool
     */
    public function isCurrencyExistByCode(string $code) : bool;

}