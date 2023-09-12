<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
       "/users/create",
       "/users/update/1"//la ruta de put para q no agarre el csrf, el problema es q no puedo poner la {id} dinamica
    ];
}
