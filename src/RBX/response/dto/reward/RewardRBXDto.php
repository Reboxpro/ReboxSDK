<?php

namespace RBX\response\dto\reward;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class RewardRBXDto extends BaseResponseRBXDto
{
    /**
     * UID платежа
     * @var ?string $uid
     */
    protected ?string $uid = null;

    /**
     * UID цепочки платежа
     * @var ?string $chain_uid
     */
    protected ?string $chain_uid = null;

    /**
     * ID метод платежа
     * @var ?int $method_id
     */
    protected ?int $method_id = null;

    /**
     * ID валюты
     * @var ?int $currency_id
     */
    protected ?int $currency_id = null;

    /**
     * Конечная сумма с учетом комиссий
     * @var ?float $amount
     */
    protected ?float $amount = null;

    /**
     * Причины исполнения/отклонения платежа
     * @var array|null $reason_completion
     */
    protected ?array $reason_completion = null;

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
     * @return string
     */
    public function getChainUid(): ?string
    {
        return $this->chain_uid;
    }

    /**
     * @return int
     */
    public function getMethodId(): ?int
    {
        return $this->method_id;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): ?int
    {
        return $this->currency_id;
    }

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @return array|null
     */
    public function getReasonCompletion(): ?array
    {
        return $this->reason_completion;
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
