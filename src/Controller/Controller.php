<?php

namespace MyApp\Controller;

use Twig\Environment;

abstract class Controller
{
    public Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
}
