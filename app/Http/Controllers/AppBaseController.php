<?php

namespace App\Http\Controllers;

use App\Traits\JsonResponse;

class AppBaseController extends Controller {
    use JsonResponse;
    /**
     * @OA\Info(
     *   title="Admin Generator API",
     *   version="1.0.0",
     * )
     * @OA\SecurityScheme(
     *     type="http",
     *     description="Login with email and password to get the authentication token",
     *     name="Token based Based",
     *     in="header",
     *     scheme="bearer",
     *     bearerFormat="JWT",
     *     securityScheme="apiAuth",
     * )
     */
}
