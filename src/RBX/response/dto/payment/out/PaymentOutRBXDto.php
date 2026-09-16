<?php

namespace RBX\response\dto\payment\out;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class PaymentOutRBXDto extends BaseResponseRBXDto
{
    /**
     * UID цепочки платежей
     * @var string|null $chain_uid
     */
    protected ?string $chain_uid = null;

    /**
     * Код статус платежа
     * @var int|null $code
     */
    protected ?int $code = null;

    /**
     * Кол-во платежей
     * @var float|null $total
     */
    protected ?float $total = null;

    /**
     * Список успешно созданных платежей
     * @var array|null $success
     */
    protected ?array $payments = null;

    /**
     * Общая сумма с учетом комиссии
     * @var float|null $totalAmount
     */
    protected ?float $totalAmount = null;

    /**
     * Общая сумма платежа
     * @var float|null $totalAmountPayment
     */
    protected ?float $totalAmountPayment = null;

    /**
     * Общая комиссия
     * @var float|null $totalCommission
     */
    protected ?float $totalCommission = null;

    /**
     * Общий кэшбэк
     * @var float|null $totalCashback
     */
    protected ?float $totalCashback = null;

    /**
     * Общая информация о конечном зачислении средств по созданным платежам
     *  @var array|null $totalAccrualInfo
     */
    protected ?array $totalAccrualInfo = null;

    /**
     * @var string|null $error
     */
    protected ?string $error = null;

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
     * UID цепочки платежей
     * @return string|null
     */
    public function getChainUid(): ?string
    {
        return $this->chain_uid;
    }

    /**
     * Код платежа (промежуточный статус платежа)
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * Общая сумма платежа
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * Список успешно созданных платежей
     *
     * @return array|null
     */
    public function getPaymentList(): ?array
    {
        return $this->payments;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * @return float|null
     */
    public function getTotalAmountPayment(): ?float
    {
        return $this->totalAmountPayment;
    }

    /**
     * @return float|null
     */
    public function getTotalCommission(): ?float
    {
        return $this->totalCommission;
    }

    /**
     * @return float|null
     */
    public function getTotalCashback(): ?float
    {
        return $this->totalCashback;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @return array|null
     */
    public function getTotalAccrualInfo(): ?array
    {
        return $this->totalAccrualInfo;
    }
}
