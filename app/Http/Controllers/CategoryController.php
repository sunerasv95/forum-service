<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Repositories\contracts\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = [];
        $categories = $this->categoryRepository->findAll();

        return ResponseHelper::success($categories);
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->validated();
        $category = $this->categoryRepository->create($data);

        return ResponseHelper::success($category, 201);
    }
}
