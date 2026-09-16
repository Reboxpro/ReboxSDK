<?php

namespace RBX\request;

use RBX\response\dto\exchange\ExchangeCalculateRBXDto;
use RBX\response\dto\exchange\ExchangeRateListRBXDto;
use RBX\response\dto\exchange\ExchangeListRBXDto;
use RBX\response\dto\exchange\ExchangeInfoRBXDto;
use RBX\response\dto\exchange\ExchangeRBXDto;

class ExchangeCollection extends BaseRequest
{
    const
        PATH_EXCHANGE           = 'v2/exchange/exchange',
        PATH_EXCHANGE_CALCULATE = 'v2/exchange/calculate',
        PATH_EXCHANGE_LIST      = 'v2/exchange/exchange-list',
        PATH_EXCHANGE_INFO      = 'v2/exchange/exchange-info',
        PATH_EXCHANGE_RATES     = 'v2/exchange/rates';

    /**
     * @return ExchangeRateListRBXDto
     * @throws \Exception
     */
    public function getRates(): ExchangeRateListRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE_RATES,
            self::METHOD_GET,
        );

        $result = new ExchangeRateListRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param int $currencyFromId
     * @param int $currencyToId
     * @param float $amount
     * @return ExchangeCalculateRBXDto
     * @throws \Exception
     */
    public function calculate(int $currencyFromId, int $currencyToId, float $amount): ExchangeCalculateRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE_CALCULATE,
            self::METHOD_POST,
            [],
            [
                "currency_from_id"  => $currencyFromId,
                "currency_to_id"    => $currencyToId,
                "amount_payment"  => $amount
            ]
        );

        $result = new ExchangeCalculateRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param int $currencyFromId
     * @param int $currencyToId
     * @param float $amount
     * @return ExchangeRBXDto
     * @throws \Exception
     */
    public function exchange(int $currencyFromId, int $currencyToId, float $amount): ExchangeRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE,
            self::METHOD_POST,
            [],
            [
                "currency_from_id"  => $currencyFromId,
                "currency_to_id"    => $currencyToId,
                "amount_payment"  => $amount
            ]
        );

        $result = new ExchangeRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param array $queryParams
     * @param int $page
     * @param int $count
     * @return ExchangeListRBXDto
     * @throws \Exception
     */
    public function getExchangeList(array $queryParams = [], int $page = 1, int $count = 50): ExchangeListRBXDto
    {
        $queryParams = array_merge(
            $queryParams,
            [
                'page' => $page,
                'per-page' => $count
            ]
        );

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
     * @return ExchangeInfoRBXDto
     * @throws \Exception
     */
    public function getExchangeInfo(string $uid): ExchangeInfoRBXDto
    {
        $response = $this->execute(
            self::PATH_EXCHANGE_INFO,
            self::METHOD_GET,
            ['uid' => $uid]
        );

        $result = new ExchangeInfoRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }
}
