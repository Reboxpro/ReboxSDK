<?php

namespace RBX\response\dto\payment\out;

use RBX\response\dto\payment\PaymentInfoRBXDto;

class PaymentOutInfoRBXDto extends PaymentInfoRBXDto
{
    /**
     * Кэшбэк
     * @var float $cashback
     */
    protected float $cashback;

    /**
     * Внешний идентификатор платежа
     * @var string|null
     */
    protected ?string $external_id;

    /**
     * @return float
     */
    public function getCashback(): float
    {
        return $this->cashback;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }
}
