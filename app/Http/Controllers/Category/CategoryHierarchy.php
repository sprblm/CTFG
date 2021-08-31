<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryHierarchy extends Controller {
    public function getCategoryHierarchy() {
        $hierarchies = Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();

        return view ('category.hierarchies', [
            'items' => $hierarchies,
            'title' => 'Category Hierarchies',
        ]);
    }
}
