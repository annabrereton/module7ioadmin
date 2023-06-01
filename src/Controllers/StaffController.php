<?php

namespace App\Controllers;

use App\Models\StaffModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class StaffController
{
    private PhpRenderer $renderer;
    private StaffModel $staffModel;

    public function __construct(PhpRenderer $phpRenderer, StaffModel $staffModel)
    {
        $this->renderer = $phpRenderer;
        $this->staffModel = $staffModel;
    }

    function __invoke(RequestInterface $request,
                      ResponseInterface $response,
                      array $args): ResponseInterface
    {
        $data = $this->staffModel->getStaff();
        return $this->renderer->render($response, 'staff.php', ['staff' => $data]);
    }
}