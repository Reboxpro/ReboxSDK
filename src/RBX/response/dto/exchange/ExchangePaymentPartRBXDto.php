<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseRBXDto;

class ExchangePaymentPartRBXDto extends BaseRBXDto
{
    /**
     * @var int|null $currency_id
     */
    protected ?int $currency_id = null;

    /**
     * @var string|null $currency_code
     */
    protected ?string $currency_code = null;

    /**
     * @var float|null $amount
     */
    protected ?float $amount = null;

    /**
     * @var string|null $status
     */
    protected ?string $status = null;

    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currency_id;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
}
