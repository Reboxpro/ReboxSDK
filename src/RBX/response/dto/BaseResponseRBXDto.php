<?php

namespace RBX\response\dto;

use RBX\exceptions\ForbiddenException;
use RBX\exceptions\InternalServerException;
use RBX\exceptions\ValidationException;
use RBX\exceptions\NotFoundException;
use RBX\exceptions\SignAuthException;
use RBX\exceptions\UserException;
use RBX\helpers\HttpHelper;

abstract class BaseResponseRBXDto extends BaseDto
{
    /**
     * @param CurlResponseDto $response
     * @return void
     */
    abstract public function parseApiResponse(CurlResponseDto $response): void;

    /**
     * @param CurlResponseDto $response
     * @return mixed
     * @throws \Exception
     */
    public function decodeResponse(CurlResponseDto $response)
    {
        $responseBody = json_decode($response->getBody(), true);
        if ($responseBody == null) {
            $responseBody = $response->getBody();
        }

        if ($responseCode = $response->getCode()) {
            switch ($responseCode) {
                case HttpHelper::HTTP_CODE_SUCCESS:
                    return $responseBody['result'] ?? $responseCode;
                case HttpHelper::HTTP_CODE_USER_ERROR:
                    throw new UserException(
                        $responseBody['message'] ?? 'Пользовательская ошибка',
                        $responseBody['error_data'] ?? []
                    );
                case HttpHelper::HTTP_CODE_UNAUTHORIZED:
                    throw new SignAuthException(
                        $responseBody['message'] ?? 'Ошибка верификации подписи',
                        $responseBody['error_data'] ?? []
                    );
                case HttpHelper::HTTP_CODE_NOT_FOUND:
                    throw new NotFoundException(
                        $responseBody['message'] ?? 'Not Found',
                        $responseBody['error_data'] ?? []
                    );
                case HttpHelper::HTTP_CODE_VALIDATION_ERROR:
                    throw new ValidationException(
                        $responseBody['message'] ?? 'Ошибка валидации',
                        $responseBody['error_data'] ?? []
                    );
                case HttpHelper::HTTP_CODE_FORBIDDEN_CODE:
                    throw new ForbiddenException(
                        $responseBody['message'] ?? 'Ошибка доступа',
                        is_array($responseBody)
                            ? $responseBody : ['data' => $responseBody]
                    );
                default:
                    throw new InternalServerException(
                        $responseBody['message'] ?? 'Unknown error',
                        is_array($responseBody)
                            ? $responseBody : ['data' => $responseBody]
                    );
            }
        }

        throw new \Exception('Ошибка формата ответа от сервера');
    }
}
