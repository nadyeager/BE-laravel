<?php

namespace App\Http\Controllers;

use iluminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 * version="1.0.0",
 * title="E-Commerce API",
 * description="E-Commerce API.",
 * @OA\Contact(
 * email="nadia1206@gmail.com"
 * )
 * )
 *
 * @OA\Server(
 * url=L5_SWAGGER_CONST_HOST,
 * description="Server Utama (Development/Production)"
 * )
 *
 * @OA\SecurityScheme(
 * securityScheme="bearerAuth",
 * type="http",
 * scheme="bearer",
 * bearerFormat="JWT"
 * )
 */

abstract class Controller
{
    
}
