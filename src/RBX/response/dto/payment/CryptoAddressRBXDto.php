<?php

namespace RBX\response\dto\payment;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class CryptoAddressRBXDto extends BaseResponseRBXDto
{
    /**
     * Адрес криптовалюты
     * @var string $crypto_address
     */
    protected string $crypto_address;

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $this->crypto_address = $this->decodeResponse($response);
    }
}
