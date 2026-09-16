<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseRBXDto;

class ExchangeRateRBXDto extends BaseRBXDto
{
    protected ?int $currency_id = null;
    protected ?float $pay = null;
    protected ?float $sold = null;

    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currency_id;
    }

    /**
     * @return float|null
     */
    public function getPay(): ?float
    {
        return $this->pay;
    }

    /**
     * @return float|null
     */
    public function getSold(): ?float
    {
        return $this->sold;
    }
}
