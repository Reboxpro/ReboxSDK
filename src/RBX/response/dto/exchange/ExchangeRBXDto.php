<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseDto;

class ExchangeRBXDto extends BaseResponseRBXDto
{
    protected string $uid;
    protected ExchangePaymentPartRBXDto $out;
    protected ExchangePaymentPartRBXDto $in;
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
}
