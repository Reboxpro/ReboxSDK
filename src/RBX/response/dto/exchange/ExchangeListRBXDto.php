<?php

namespace RBX\response\dto\exchange;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class ExchangeListRBXDto extends BaseResponseRBXDto
{
    /** @var ExchangeInfoRBXDto[] $list */
    protected array $list = [];

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        foreach ($decodedResponse as $attributes) {
            $paymentFieldDto = new ExchangeInfoRBXDto();
            $paymentFieldDto->setAttributes($attributes);
            $this->list[] = $paymentFieldDto;
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
