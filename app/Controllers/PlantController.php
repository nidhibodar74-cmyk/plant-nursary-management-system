<?php

namespace App\Controllers;

use App\Models\PlantModel;

class PlantController extends BaseController
{
    public function report()
    {
        $plantModel = new \App\Models\PlantModel();
        $plants = $plantModel->findAll();

        return view('report', ['plants' => $plants]);
    }

    public function category($selectedCategory = null)
{
    $plantModel = new \App\Models\PlantModel();

    // Get unique categories
    $categories = $plantModel->distinct()->select('category')->findAll();

    // If a category is selected, filter by it
    if ($selectedCategory) {
        $plants = $plantModel->where('category', $selectedCategory)->findAll();
    } else {
        $plants = [];
    }

    return view('category_view', [
        'categories' => $categories,
        'plants' => $plants,
        'selectedCategory' => $selectedCategory
    ]);
}


}


