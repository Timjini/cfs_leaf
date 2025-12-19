<?php

namespace MyApp\Controller;

use MyApp\Controller\Controller;


final class TestController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name'          => 'Notebook',
                'description'   => 'Core i7',
                'value'         =>  800.00,
                'date_register' => '2017-06-22',
            ],
            [
                'name'          => 'Mouse',
                'description'   => 'Razer',
                'value'         =>  125.00,
                'date_register' => '2017-10-25',
            ],
            [
                'name'          => 'Keyboard',
                'description'   => 'Mechanical Keyboard',
                'value'         =>  250.00,
                'date_register' => '2017-06-23',
            ],
        ];
        echo $this->twig->render('index.html.twig', ['products' => $products]);
    }
}
