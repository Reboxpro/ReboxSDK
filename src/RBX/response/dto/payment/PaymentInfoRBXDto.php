<?php

namespace RBX\response\dto\payment;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class PaymentInfoRBXDto extends BaseResponseRBXDto
{
    /**
     * UID платежа
     * @var string $uid
     */
    protected string $uid;

    /**
     * UID цепочки платежа
     * @var string $chain_uid
     */
    protected string $chain_uid;

    /**
     * Внешний идентификатор платежа
     * @var string|null
     */
    protected ?string $external_id;

    /**
     * Статус платежа
     * @var string $status
     */
    protected string $status;

    /**
     * ID валюты
     * @var int $currency_id
     */
    protected int $currency_id;

    /**
     * ID метода платежа
     * @var int $method_id
     */
    protected int $method_id;

    /**
     * Сумма платежа
     * @var float $amount_payment
     */
    protected float $amount_payment;

    /**
     * Конечная сумма с учетом комиссий
     * @var float $amount
     */
    protected float $amount;

    /**
     * Комиссия
     * @var float $commission
     */
    protected float $commission;

    /**
     * Кэшбэк
     * @var float $cashback
     */
    protected float $cashback;


    /**
     * Данные о зачисления средств
     * @var array|null $accrual_info
     */
    protected ?array $accrual_info;

    /**
     * Комментарий
     * @var string|null $comment
     */
    protected ?string $comment;

    /**
     * Причины исполнения/отклонения платежа
     * @var array|null $reason_completion
     */
    protected ?array $reason_completion;

    /**
     * Подробности платежа
     * @var array|null $details
     */
    protected ?array $details;

    /**
     * Создан
     * @var string $created_at
     */
    protected string $created_at;

    /**
     * Обновлен
     * @var string $updated_at
     */
    protected string $updated_at;

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        $this->setAttributes($decodedResponse);
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getChainUid(): string
    {
        return $this->chain_uid;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currency_id;
    }

    /**
     * @return int
     */
    public function getMethodId(): int
    {
        return $this->method_id;
    }

    /**
     * @return float
     */
    public function getAmountPayment(): float
    {
        return $this->amount_payment;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @return float
     */
    public function getCashback(): float
    {
        return $this->cashback;
    }

    /**
     * @return array|null
     */
    public function getAccrualInfo(): ?array
    {
        return $this->accrual_info;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @return array
     */
    public function getReasonCompletion(): array
    {
        return $this->reason_completion;
    }

    /**
     * @return array|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }
}
