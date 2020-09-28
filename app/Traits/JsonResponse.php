<?php

namespace App\Traits;


trait JsonResponse {
    /**
     * Success Response
     *
     * @param $data
     * @param string $message
     * @param int $code
     * @param array $headers
     * @param int $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($message = "", $data = null, $code = 200, $headers = [], $options = 0) {
        /**
         * @OA\Schema(
         *   schema="SuccessJsonResponse",
         *   @OA\Property(
         *     property="success",
         *     type="boolean",
         *     description="Status message, true or false",
         *     example="true"
         *  ),
         *   @OA\Property(
         *     property="message",
         *     type="string",
         *     description="Detail message",
         *     example="message content"
         *  ),
         *   @OA\Property(
         *     property="data",
         *     type="object",
         *     description="Data of response",
         *  )
         *
         * )
         */
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($response, $code, $headers, $options);
    }

    /**
     *  Error Response
     * @param string $message
     * @param null $error
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function error($message = '', $error = null, $code = 400) {
        /**
         * @OA\Schema(
         *   schema="ErrorJsonResponse",
         *   @OA\Property(
         *     property="sucess",
         *     type="string",
         *     description="Status message, true or false",
         *     example="false"
         *  ),
         *   @OA\Property(
         *     property="message",
         *     type="string",
         *     description="Detail message",
         *     example="message content"
         *  ),
         *   @OA\Property(
         *     property="data",
         *     type="object",
         *     description="Data of response",
         *  ),
         *   @OA\Property(
         *     property="errors",
         *     type="object",
         *     description="Errors details",
         *  )
         * )
         */
        $response = [
            'success' => false,
            'message' => $message,
            'data' => null,
            'error' => $error
        ];
        return response()->json($response, $code);
    }
}
