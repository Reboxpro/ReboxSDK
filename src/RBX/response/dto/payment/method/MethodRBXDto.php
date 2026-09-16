<?php

namespace RBX\response\dto\payment\method;

use RBX\response\dto\BaseRBXDto;

class MethodRBXDto extends BaseRBXDto
{
    /**
     * ID метода платежа
     * @var int|null $id
     */
    public ?int $id = null;

    /**
     * Код метода платежа
     * @var string|null $code
     */
    public ?string $code = null;

    /**
     * Название метода платежа
     * @var string|null $name
     */
    public ?string $name = null;

    /**
     * Описание метода платежа
     * @var string|null $description
     */
    public ?string $description = null;

    /**
     * ID валюты
     * @var int|null $currency_id
     */
    public ?int $currency_id = null;

    /**
     * Минимальный размер платежа
     * @var float|null $min_amount
     */
    public ?float $min_amount = null;

    /**
     * Лимит платежа
     * @var float|null $max_amount
     */
    public ?float $max_amount = null;
}
