<?php

namespace App\Repository\InterfaceRepo;

interface BaseRepositoryInterface
{
    public function getAll();
    public function find($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
