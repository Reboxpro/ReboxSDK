<?php

namespace RBX\request;

use RBX\response\dto\exchange\ExchangeListRBXDto;
use RBX\response\dto\exchange\ExchangeRBXDto;

class ExchangeCollection extends BaseRequest
{
    const
        PATH_EXCHANGE_LIST = 'v2/exchange/exchange-list',
        PATH_EXCHANGE_INFO = 'v2/exchange/exchange-info';

    /**
     * @param array $queryParams
     * @return ExchangeListRBXDto
     * @throws \Exception
     */
    public function getExchangeList(array $queryParams = []): ExchangeListRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE_LIST,
            self::METHOD_GET,
            $queryParams,
        );

        $result = new ExchangeListRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param string|null $uid
     * @return ExchangeRBXDto
     * @throws \Exception
     */
    public function getExchangeInfo(string $uid): ExchangeRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE_INFO,
            self::METHOD_GET,
            ['uid' => $uid]
        );

        $result = new ExchangeRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }
}
