<?php

namespace RBX\response\dto\reference;

use RBX\response\dto\BaseRBXDto;

class CurrencyRBXDto extends BaseRBXDto
{
    /**
     * ID валюты
     * @var int $id
     */
    public int $id;

    /**
     * Код валюты
     * @var string $code
     */
    public string $code;

    /**
     * Название валюты
     * @var string $title
     */
    public string $title;
}
