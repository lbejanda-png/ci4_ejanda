<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Ledson John Ejanda',
                'role'      => 'Administrator'
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Cedrick Valera',
                'role'      => 'Cashier'
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Andrew De Jesus',
                'role'      => 'Cashier'
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Jairus Galicia',
                'role'      => 'Manager'
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Jose Paolo Ong',
                'role'      => 'Inventory Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}