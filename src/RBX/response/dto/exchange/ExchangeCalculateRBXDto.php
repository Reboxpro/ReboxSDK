<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class ExchangeCalculateRBXDto extends BaseResponseRBXDto
{
    protected float $amount;

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        $this->amount = floatval($decodedResponse);
    }
}
