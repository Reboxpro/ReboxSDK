<?php

namespace RBX\request;

use RBX\response\dto\payment\ChainPaymentRBXDto;
use RBX\response\dto\payment\method\MethodListRBXDto;
use RBX\response\dto\payment\PaymentFieldsRBXDto;
use RBX\response\dto\payment\PaymentOutRBXDto;
use RBX\response\dto\payment\PaymentRBXDto;

class PaymentOutCollection extends BaseRequest
{
    const
        PATH_METHOD_LIST = 'v2/payment/out/method-list',
        PATH_PAYMENT = 'v2/payment/out/payment',
        PATH_PAYMENT_INFO = 'v2/payment/out/payment-info',
        PATH_PAYMENT_FIELDS = 'v2/payment/out/payment-fields',
        PATH_CHAIN_PAYMENT = 'v2/payment/out/chain-payment';

    /**
     * @param int $currencyId
     * @return MethodListRBXDto
     * @throws \Exception
     */
    public function getMethodList(int $currencyId): MethodListRBXDto
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
     * @param int $methodId
     * @param float $amount
     * @param array $params
     * @param array $files
     * @param string|null $externalId
     * @return PaymentOutRBXDto
     * @throws \Exception
     */
    public function payment(
        int $methodId,
        float $amount,
        array $params,
        array $files = [],
        string $externalId = null
    ): PaymentOutRBXDto {
        $data = [
            'amount_payment' => $amount,
            'payment_fields' => json_encode($params),
        ];

        if (!empty($externalId)) {
            $data += ['external_id' => $externalId];
        }

        $response = $this->execute(
            self::PATH_PAYMENT,
            self::METHOD_POST,
            ['methodId' => $methodId],
            $data,
            $files,
            ['Content-Type' => 'multipart/form-data']
        );

        $result = new PaymentOutRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param int $methodId
     * @return PaymentFieldsRBXDto
     * @throws \Exception
     */
    public function getPaymentFields(int $methodId): PaymentFieldsRBXDto
    {
        $response = $this->execute(
            self::PATH_PAYMENT_FIELDS,
            self::METHOD_GET,
            ['methodId' => $methodId]
        );

        $result = new PaymentFieldsRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param string $uid
     * @return PaymentRBXDto
     * @throws \Exception
     */
    public function getPaymentInfo(string $uid): PaymentRBXDto
    {
        $response = $this->execute(
            self::PATH_PAYMENT_INFO,
            self::METHOD_GET,
            ['uid' => $uid]
        );

        $result = new PaymentRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }

    /**
     * @param string|null $chainUid
     * @param string|null $externalId
     * @return ChainPaymentRBXDto
     * @throws \Exception
     */
    public function getChainPaymentInfo(string $chainUid = null, string $externalId = null): ChainPaymentRBXDto
    {
        $response = $this->execute(
            self::PATH_CHAIN_PAYMENT,
            self::METHOD_GET,
            ['chainUid' => $chainUid, 'externalId' => $externalId]
        );

        $result = new ChainPaymentRBXDto();
        $result->parseApiResponse($response);

        return $result;
    }
}
