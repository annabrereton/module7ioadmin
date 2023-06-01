<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BookFormController
{
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $phpRenderer)
    {
        $this->renderer = $phpRenderer;
    }

    function __invoke(RequestInterface  $request,
                      ResponseInterface $response,
                      array             $args): ResponseInterface
    {
        return $this->renderer->render($response, 'bookform.php', $args);
    }
}
