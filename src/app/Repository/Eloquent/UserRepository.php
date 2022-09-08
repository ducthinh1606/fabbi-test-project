<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\InterfaceRepo\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }

    public function all()
    {
        return $this->_model->all();
    }
}
