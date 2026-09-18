<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class ExchangeInfoRBXDto extends BaseResponseRBXDto
{
    protected ?string $uid = null;
    protected ?ExchangePaymentPartRBXDto $out = null;
    protected ?ExchangePaymentPartRBXDto $in = null;
    protected ?float $rate = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct()
    {
        $this->out = new ExchangePaymentPartRBXDto();
        $this->in = new ExchangePaymentPartRBXDto();
    }

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
     * @return ExchangePaymentPartRBXDto|null
     */
    public function getOut(): ?ExchangePaymentPartRBXDto
    {
        return $this->out;
    }

    /**
     * @return ExchangePaymentPartRBXDto|null
     */
    public function getIn(): ?ExchangePaymentPartRBXDto
    {
        return $this->in;
    }

    /**
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
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
