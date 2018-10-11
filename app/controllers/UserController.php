<?php

namespace App\Controllers;

use App\Core\App;

class UserController
{
    public function index()
    {

        $users = App::get('database')->selectAll('users');
        return view('users', ['users' => $users]);
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'username' => $_POST['username']
        ]);

        return redirect('/users');
        header('Location: /users');
    }
}