<?php

namespace RBX\response\dto\client;

use RBX\response\dto\BaseRBXDto;

class WalletRBXDto extends BaseRBXDto
{
    /**
     * ID валюты
     * @var  int $currency_id
     */
    public int $currency_id;

    /**
     * Сумма кошелька
     * @var float $amount
     */
    public float $amount;
}
