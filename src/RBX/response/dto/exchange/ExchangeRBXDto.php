<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseDto;

class ExchangeRBXDto extends BaseResponseRBXDto
{
    protected string $uid;
    protected ExchangePaymentPartRBXDto $out;
    protected ?ExchangePaymentPartRBXDto $in = null;
    protected ExchangeRuleRBXDto $rules;
    protected string $created_at;
    protected string $updated_at;

    public function __construct()
    {
        $this->out = new ExchangePaymentPartRBXDto();
        $this->in = new ExchangePaymentPartRBXDto();
        $this->rules = new ExchangeRuleRBXDto();
    }

    /**
     * @param CurlResponseDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        $this->setAttributes($decodedResponse);

        $this->out->setAttributes($decodedResponse['out']);
        $this->in->setAttributes($decodedResponse['in']);
        $this->rules->setAttributes($decodedResponse['rules']);
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @return ExchangePaymentPartRBXDto
     */
    public function getOut(): ExchangePaymentPartRBXDto
    {
        return $this->out;
    }

    /**
     * @return ExchangePaymentPartRBXDto
     */
    public function getIn(): ExchangePaymentPartRBXDto
    {
        return $this->in;
    }

    /**
     * @return ExchangeRuleRBXDto
     */
    public function getRules(): ExchangeRuleRBXDto
    {
        return $this->rules;
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
