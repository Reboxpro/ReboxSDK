<?php

namespace RBX\request;

use RBX\response\dto\payment\method\MethodListRBXDto;
use RBX\response\dto\payment\in\PaymentInInfoRBXDto;
use RBX\response\dto\payment\in\PaymentInListRBXDto;
use RBX\response\dto\payment\CryptoAddressRBXDto;
use RBX\response\dto\reward\RewardListRBXDto;
use RBX\response\dto\reward\RewardRBXDto;

/**
 * Коллекция методов входящих платежей
 */
class PaymentInCollection extends BaseRequest
{
    const
        PATH_PAYMENT_IN_CRYPTO_ADDRESS = 'v2/payment/in/crypto-address',
        PATH_METHOD_LIST = 'v2/payment/in/method-list',
        PATH_PAYMENT_LIST = 'v2/payment/in/payment-list',
        PATH_PAYMENT_INFO = 'v2/payment/in/payment-info',
        PATH_REWARD_LIST = 'v2/payment/in/reward-list',
        PATH_REWARD_INFO = 'v2/payment/in/reward-info';

    /**
     * Получение крипто адреса
     * @param int $methodId
     * @return CryptoAddressRBXDto
     * @throws \Exception
     */
    public function getCryptoAddress(int $methodId): CryptoAddressRBXDto
    {
        $response = $this->execute(
            self::PATH_PAYMENT_IN_CRYPTO_ADDRESS,
            self::METHOD_GET,
            ['methodId' => $methodId]
        );

        $result = new CryptoAddressRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * Получение доступных методов платежа
     * @param $currencyId
     * @return MethodListRBXDto
     * @throws \Exception
     */
    public function getMethodList($currencyId): MethodListRBXDto
    {
        $response = $this->execute(
            self::PATH_METHOD_LIST,
            self::METHOD_GET,
            ['currencyId' => $currencyId]
        );

        $result = new MethodListRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param array $queryParams
     * @return PaymentInListRBXDto
     * @throws \Exception
     */
    public function getPaymentList(array $queryParams): PaymentInListRBXDto
    {
        $response = $this->execute(
            self::PATH_PAYMENT_LIST,
            self::METHOD_GET,
            $queryParams
        );

        $result = new PaymentInListRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * Получение информации по платежу
     * @param string $uid
     * @return PaymentInInfoRBXDto
     * @throws \Exception
     */
    public function getPaymentInfo(string $uid): PaymentInInfoRBXDto
    {
        $response = $this->execute(
            self::PATH_PAYMENT_INFO,
            self::METHOD_GET,
            ['uid' => $uid]
        );

        $result = new PaymentInInfoRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param array $queryParams
     * @return RewardListRBXDto
     * @throws \Exception
     */
    public function getRewardList(array $queryParams): RewardListRBXDto
    {
        $response = $this->execute(
            self::PATH_REWARD_LIST,
            self::METHOD_GET,
            $queryParams
        );

        $result = new RewardListRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * Получение информации по платежу
     * @param string $uid
     * @return RewardRBXDto
     * @throws \Exception
     */
    public function getRewardInfo(string $uid): RewardRBXDto
    {
        $response = $this->execute(
            self::PATH_REWARD_INFO,
            self::METHOD_GET,
            ['uid' => $uid]
        );

        $result = new RewardRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }
}
