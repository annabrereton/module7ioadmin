<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MyCallableClass
{
    function __invoke(RequestInterface $request,
                              ResponseInterface $response,
                              array $args): ResponseInterface
    {
        $response->getBody()->write('Hello from a class method');
        return $response;
    }

}