<?php

namespace RBX\response\dto\payment\out;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class PaymentOutListRBXDto extends BaseResponseRBXDto
{
    /** @var PaymentOutInfoRBXDto[] $list */
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
            $paymentFieldDto = new PaymentOutInfoRBXDto();
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
