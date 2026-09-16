<?php

namespace RBX\response\dto\client;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class WalletListRBXDto extends BaseResponseRBXDto
{
    /** @var WalletRBXDto[] $list */
    protected array $list;

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        foreach ($decodedResponse as $item) {
            $this->addWallet($item['currencyId'], $item['balance']);
        }
    }

    /**
     * @param int $currencyId
     * @param float $amount
     * @return void
     */
    protected function addWallet(int $currencyId, float $amount)
    {
        $walletDto = new WalletRBXDto();
        $walletDto->currency_id = $currencyId;
        $walletDto->amount = $amount;
        $this->list []= $walletDto;
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }
}
