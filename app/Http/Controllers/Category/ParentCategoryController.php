<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class ParentCategoryController extends Controller {
    // Get categories under the Tech
    public function theTech() {
        $tech = Category::where('name', 'The Tech')->first();

        $categories = Category::where('parent_id', $tech->id)->orderBy('order_sort', 'ASC')->with('childItems')->get();
        return view ('category.hierarchies', [
            'items' => $categories,
            'title' => 'The Tech',
            'menu' => 'tech',
        ]);
    }

    // Get categories under the People
    public function thePeople() {
        $people = Category::where('name', 'The People')->first();

        $categories = Category::where('parent_id', $people->id)->orderBy('order_sort', 'ASC')->with('childItems')->get();

        return view ('category.hierarchies', [
            'items' => $categories,
            'title' => 'The People',
            'menu' => 'people',
        ]);
    }

    // Get categories under adjacent technologies
    public function adjacent() {
        $adj = Category::where('name', 'Adjacent Fields')->first();

        $categories = Category::where('parent_id', $adj->id)->orderBy('order_sort', 'ASC')->with('childItems')->get();
        
        return view ('category.hierarchies', [
            'items' => $categories,
            'title' => 'Adjacent Fields',
            'menu' => 'adj',
        ]);
    }
}
