<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function findAll()
    {
        return $this->category->all();
    }

    public function findById(int $categoryId)
    {
        return $this->category->findOrFail($categoryId);
    }

    public function create(array $category)
    {
        $category = $this->category->create($category);
        return $category;
    }

    public function update(int $categoryId)
    {
    }

    public function delete(int $categoryId)
    {
    }
}
