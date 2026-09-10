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
     * @return float
     */
    public function getCashback(): float
    {
        return $this->cashback;
    }
}
