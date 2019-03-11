<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Repository\FooRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function foo(FooRepository $repository): Response
    {
        return new Response();
    }
}
