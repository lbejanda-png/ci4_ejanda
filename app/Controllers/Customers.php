<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Ledson John Ejanda',
                'email'     => 'ledson@gmail.com',
                'phone'     => '09123456789'
            ],
            [
                'full_name' => 'Cedrick Valera',
                'email'     => 'ced@gmaik.com',
                'phone'     => '092345635323'
            ],
            [
                'full_name' => 'Andrew De Jesus',
                'email'     => 'andoro@gmail.com',
                'phone'     => '09342378901'
            ],
            [
                'full_name' => 'Jairus Galicia',
                'email'     => 'jaijai@gmail.com',
                'phone'     => '09786459012'
            ],
            [
                'full_name' => 'Jose Paolo Ong',
                'email'     => 'mistahong@gmail.com',
                'phone'     => '09567898723'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}