<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseDto;

class ExchangePaymentPartRBXDto extends BaseDto
{
    protected int $currency_id;
    protected string $currency_code;
    protected float $amount;
    protected string $status;
}
