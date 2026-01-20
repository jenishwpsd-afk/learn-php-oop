<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        return $this->user->all();
    }

    public function store($data)
    {
        return $this->user->create($data['name'], $data['email']);
    }

    public function edit($id)
    {
        return $this->user->find($id);
    }

    public function update($id, $data)
    {
        return $this->user->update($id, $data['name'], $data['email']);
    }

    public function destroy($id)
    {
        return $this->user->delete($id);
    }
}
