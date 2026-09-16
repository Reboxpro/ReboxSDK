<?php

namespace RBX\response\dto\reference;

use RBX\response\dto\BaseRBXDto;

class CurrencyRBXDto extends BaseRBXDto
{
    /**
     * ID валюты
     * @var int|null $id
     */
    public ?int $id = null;

    /**
     * Код валюты
     * @var string|null $code
     */
    public ?string $code = null;

    /**
     * Название валюты
     * @var string|null $title
     */
    public ?string $title = null;
}
