<?php

namespace RBX\response\dto\payment;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class PaymentInfoRBXDto extends BaseResponseRBXDto
{
    /**
     * UID платежа
     * @var string|null $uid
     */
    protected ?string $uid = null;

    /**
     * UID цепочки платежа
     * @var string|null $chain_uid
     */
    protected ?string $chain_uid = null;

    /**
     * Статус платежа
     * @var string|null $status
     */
    protected ?string $status = null;

    /**
     * ID валюты
     * @var int|null $currency_id
     */
    protected ?int $currency_id = null;

    /**
     * Код валюты
     * @var string|null $currency_code
     */
    protected ?string $currency_code = null;

    /**
     * ID метода платежа
     * @var int|null $method_id
     */
    protected ?int $method_id = null;

    /**
     * Название метода платежа
     * @var string|null $method_id
     */
    protected ?string $method_name = null;

    /**
     * Сумма платежа
     * @var float|null $amount_payment
     */
    protected ?float $amount_payment = null;

    /**
     * Конечная сумма с учетом комиссий
     * @var float|null $amount
     */
    protected ?float $amount = null;

    /**
     * Комиссия
     * @var float|null $commission
     */
    protected ?float $commission = null;

    /**
     * Данные о зачисления средств
     * @var array|null $accrual_info
     */
    protected ?array $accrual_info = null;

    /**
     * Комментарий
     * @var string|null $comment
     */
    protected ?string $comment = null;

    /**
     * Причины исполнения/отклонения платежа
     * @var array|null $reason_completion
     */
    protected ?array $reason_completion = null;

    /**
     * Подробности платежа
     * @var array|null $details
     */
    protected ?array $details = null;

    /**
     * Создан
     * @var string|null $created_at
     */
    protected ?string $created_at = null;

    /**
     * Обновлен
     * @var string|null $updated_at
     */
    protected ?string $updated_at = null;

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
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return string|null
     */
    public function getChainUid(): ?string
    {
        return $this->chain_uid;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currency_id;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }

    /**
     * @return int|null
     */
    public function getMethodId(): ?int
    {
        return $this->method_id;
    }

    /**
     * @return string|null
     */
    public function getMethodName(): ?string
    {
        return $this->method_name;
    }

    /**
     * @return float|null
     */
    public function getAmountPayment(): ?float
    {
        return $this->amount_payment;
    }

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
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
     * @return array|null
     */
    public function getReasonCompletion(): ?array
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
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }
}
