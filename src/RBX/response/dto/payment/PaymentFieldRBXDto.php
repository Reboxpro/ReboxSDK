<?php

namespace RBX\response\dto\payment;

use RBX\response\dto\BaseDto;

class PaymentFieldRBXDto extends BaseDto
{
    /**
     * @var string $code
     */
    public string $code;

    /**
     * @var string $title
     */
    public string $title;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null $label
     */
    public ?string $label;

    /**
     * @var string|null $mask
     */
    public ?string $mask;

    /**
     * @var string|null $regexp
     */
    public ?string $regexp;

    /**
     * @var int|null $minLen
     */
    public ?int $minLen;

    /**
     * @var int|null $maxLen
     */
    public ?int $maxLen;
}
