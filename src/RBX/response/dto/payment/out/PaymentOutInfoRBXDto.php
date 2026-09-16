<?php

namespace RBX\response\dto\payment\out;

use RBX\response\dto\payment\PaymentInfoRBXDto;

class PaymentOutInfoRBXDto extends PaymentInfoRBXDto
{
    /**
     * Кэшбэк
     * @var float|null $cashback
     */
    protected ?float $cashback = null;

    /**
     * Внешний идентификатор платежа
     * @var string|null
     */
    protected ?string $external_id = null;

    /**
     * @return float|null
     */
    public function getCashback(): ?float
    {
        return $this->cashback;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->external_id;
    }
}
