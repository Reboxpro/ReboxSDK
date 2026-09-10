<?php

namespace RBX\response\dto\payment\in;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseDto;

class PaymentInListRBXDto extends BaseResponseRBXDto
{
    /** @var PaymentInInfoRBXDto[] $list */
    protected array $list = [];

    /**
     * @param CurlResponseDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        foreach ($decodedResponse as $attributes) {
            $paymentFieldDto = new PaymentInInfoRBXDto();
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
