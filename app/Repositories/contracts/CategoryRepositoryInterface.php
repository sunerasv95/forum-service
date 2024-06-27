<?php

namespace App\Repositories\contracts;

use App\Models\Category;

interface CategoryRepositoryInterface
{

    public function findAll();

    public function findById(int $categoryId);

    public function create(array $category);

    public function update(int $categoryId);

    public function delete(int $categoryId);
}
