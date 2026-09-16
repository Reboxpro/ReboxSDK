<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseRBXDto;

class ExchangeRateRBXDto extends BaseRBXDto
{
    protected int $currency_id;
    protected float $pay;
    protected float $sold;

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currency_id;
    }

    /**
     * @return float
     */
    public function getPay(): float
    {
        return $this->pay;
    }

    /**
     * @return float
     */
    public function getSold(): float
    {
        return $this->sold;
    }
}
