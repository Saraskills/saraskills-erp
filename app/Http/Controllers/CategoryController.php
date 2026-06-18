<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::with('parent')
            ->latest()
            ->paginate(20);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'data' => $category
        ]);
    }

    public function show(Category $category)
    {
        return response()->json([
            'success' => true,
            'data' => $category->load('parent')
        ]);
    }

    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully',
            'data' => $category
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully'
        ]);
    }
}