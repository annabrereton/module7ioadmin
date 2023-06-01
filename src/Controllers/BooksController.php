<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BooksController
{
    // The framework uses autoloading to create a renderer and inject it into the class when it is called
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
//        $data = [
//            ['title' => 'Refactoring', 'author' => 'Martin Fowler'],
//            ['title' => 'Test-Driven Development', 'author' => 'Kent Beck']
//        ];
        $data = $this->booksModel->getBooks();
        return $this->renderer->render($response, 'books.php', ['books' => $data]); // the key 'books' is automatically recognised as the variable $books in books.php
    }

}