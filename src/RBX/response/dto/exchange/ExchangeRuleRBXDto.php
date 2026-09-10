<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseDto;

class ExchangeRuleRBXDto extends BaseDto
{
    /**
     * @var float $commission
     */
    protected float $commission;

    /**
     * @var float $rate_from
     */
    protected float $rate_from;

    /**
     * @var float $rate_to
     */
    protected float $rate_to;

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @return float
     */
    public function getRateFrom(): float
    {
        return $this->rate_from;
    }

    /**
     * @return float
     */
    public function getRateTo(): float
    {
        return $this->rate_to;
    }
}
