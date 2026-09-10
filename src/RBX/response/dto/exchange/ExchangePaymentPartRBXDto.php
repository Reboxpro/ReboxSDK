<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseDto;

class ExchangePaymentPartRBXDto extends BaseDto
{
    /**
     * @var int $currency_id
     */
    protected int $currency_id;

    /**
     * @var string $currency_code
     */
    protected string $currency_code;

    /**
     * @var float $amount
     */
    protected float $amount;

    /**
     * @var string $status
     */
    protected string $status;

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currency_id;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currency_code;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
