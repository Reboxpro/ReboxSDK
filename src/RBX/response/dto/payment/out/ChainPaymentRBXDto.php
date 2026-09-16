<?php

namespace RBX\response\dto\payment\out;

use RBX\response\dto\BaseResponseRBXDto;
use RBX\response\dto\CurlResponseRBXDto;

class ChainPaymentRBXDto extends BaseResponseRBXDto
{
    /** @var PaymentOutInfoRBXDto[] $_payments */
    protected array $payments;

    /** @var array $total */
    protected array $total;

    /**
     * @param CurlResponseRBXDto $response
     * @return void
     * @throws \Exception
     */
    public function parseApiResponse(CurlResponseRBXDto $response): void
    {
        $decodedResponse = $this->decodeResponse($response);
        $this->total = [
            'amount_payment' => $decodedResponse['total']['amount_payment'],
            'amount' => $decodedResponse['total']['amount'],
            'commission' => $decodedResponse['total']['commission'],
            'cashback' => $decodedResponse['total']['cashback'],
        ];

        foreach ($decodedResponse['payments'] as $payment) {
            $paymentDto = new PaymentOutInfoRBXDto();
            $paymentDto->setAttributes($payment);
            $this->payments [] = $paymentDto;
        }
    }

    /**
     * @return PaymentOutInfoRBXDto[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @return array
     */
    public function getTotal(): array
    {
        return $this->total;
    }
}
