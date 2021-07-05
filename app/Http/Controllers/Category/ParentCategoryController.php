<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ParentCategory;

class ParentCategoryController extends Controller {
    // Get categories under the Tech
    public function theTech() {
        $parent = ParentCategory::where('name', 'The Tech')->first();

        return view('category.by-parent', [
            'title' => 'The Tech',
            'cats' => $parent->categories
        ]);
    }

    // Get categories under the People
    public function thePeople() {
        $parent = ParentCategory::where('name', 'The People')->first();

        return view('category.by-parent', [
            'title' => 'The People',
            'cats' => $parent->categories
        ]);
    }
}
