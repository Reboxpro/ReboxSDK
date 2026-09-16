<?php

namespace RBX\response\dto\client;

use RBX\response\dto\BaseRBXDto;

class WalletRBXDto extends BaseRBXDto
{
    /**
     * ID валюты
     * @var  int|null $currency_id
     */
    public ?int $currency_id = null;

    /**
     * Сумма кошелька
     * @var float|null $amount
     */
    public ?float $amount = null;
}
