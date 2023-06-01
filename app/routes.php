<?php
declare(strict_types=1);

use App\Controllers\BookAddController;
use App\Controllers\BookFormController;
use App\Controllers\BookIdController;
use App\Controllers\BooksController;
use App\Controllers\CoursesAPIController;
use App\Controllers\MyCallableClass;
use App\Controllers\StaffController;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller

    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });

    $app->get('/courses', CoursesAPIController::class);

    // Types of request handler

    // Anonymous function request handler
    $app->get('/anon', function (RequestInterface $request,
                               ResponseInterface $response,
                                array $args): ResponseInterface {
        $response->getBody()->write('Hello from an anon function');
        return $response;
    });

    // Named function request handler
    $app->get('/named', 'namedFuncHandler');

    // Class method request handler - this is the object-oriented way of handling a get request
    $app->get('/class', MyCallableClass::class);

    $app->get('/books', BooksController::class);
    $app->get('/books/{id}', BookIdController::class);

    $app->get('/staff', StaffController::class);

    $app->get('/addbook', BookFormController::class);
    $app->post('/books', BookAddController::class); // no clash between this /books and the one above as one is a get and the other post req
};
function namedFuncHandler(RequestInterface $request,
          ResponseInterface $response,
          array $args): ResponseInterface
{
    $response->getBody()->write('Hello from a named function');
    return $response;
}


