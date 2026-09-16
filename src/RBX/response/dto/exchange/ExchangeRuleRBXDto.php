<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseRBXDto;

class ExchangeRuleRBXDto extends BaseRBXDto
{
    /**
     * @var float|null $commission
     */
    protected ?float $commission = null;

    /**
     * @var float|null $rate_from
     */
    protected ?float $rate_from = null;

    /**
     * @var float|null $rate_to
     */
    protected ?float $rate_to = null;

    /**
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }

    /**
     * @return float|null
     */
    public function getRateFrom(): ?float
    {
        return $this->rate_from;
    }

    /**
     * @return float|null
     */
    public function getRateTo(): ?float
    {
        return $this->rate_to;
    }
}
