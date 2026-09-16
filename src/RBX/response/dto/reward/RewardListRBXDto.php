<?php

namespace RBX\response\dto\reward;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class RewardListRBXDto extends BaseResponseRBXDto
{
    /** @var RewardRBXDto[] $list */
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
