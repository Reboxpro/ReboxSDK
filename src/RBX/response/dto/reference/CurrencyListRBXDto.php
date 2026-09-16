<?php

namespace RBX\response\dto\reference;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class CurrencyListRBXDto extends BaseResponseRBXDto
{
    /** @var CurrencyRBXDto[] $list */
    protected array $list = [];

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        foreach ($decodedResponse as $currency) {
            $currencyDto = new CurrencyRBXDto();
            $currencyDto->setAttributes($currency);
            $this->list[] = $currencyDto;
        }
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }
}
