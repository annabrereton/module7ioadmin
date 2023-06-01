<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BookIdController
{
    private PhpRenderer $renderer;
    Private BooksModel $booksModel;

    public function __construct(PhpRenderer $phpRenderer, BooksModel $booksModel)
    {
        $this->renderer = $phpRenderer;
        $this->booksModel = $booksModel;
    }

    function __invoke(RequestInterface  $request,
                      ResponseInterface $response,
                      array             $args): ResponseInterface
    {
        $id = $args['id']; // can put validation in here to check id is a valid integer
        $data = $this->booksModel->getBook($id);
        return $this->renderer->render($response, 'book.php', ['book' => $data]); // the key 'book' is automatically recognised as the variable $book in book.php
    }
}