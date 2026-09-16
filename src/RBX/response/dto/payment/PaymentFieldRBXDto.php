<?php

namespace RBX\response\dto\payment;

use RBX\response\dto\BaseRBXDto;

class PaymentFieldRBXDto extends BaseRBXDto
{
    /**
     * @var string|null $code
     */
    public ?string $code = null;

    /**
     * @var string|null $title
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null $label
     */
    public ?string $label = null;

    /**
     * @var string|null $mask
     */
    public ?string $mask = null;

    /**
     * @var string|null $regexp
     */
    public ?string $regexp = null;

    /**
     * @var int|null $minLen
     */
    public ?int $minLen = null;

    /**
     * @var int|null $maxLen
     */
    public ?int $maxLen = null;
}
