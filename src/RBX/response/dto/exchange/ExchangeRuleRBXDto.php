<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseDto;

class ExchangeRuleRBXDto extends BaseDto
{
    protected float $commission;
    protected float $rate_from;
    protected float $rate_to;
}
