<?php

namespace RBX\response\dto\reward;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseDto;

class RewardListRBXDto extends BaseResponseRBXDto
{
    /** @var RewardRBXDto[] $list */
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
            $paymentFieldDto = new RewardRBXDto();
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
