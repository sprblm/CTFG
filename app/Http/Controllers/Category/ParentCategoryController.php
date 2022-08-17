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
        /*$ei = Category::where('name', 'Evaluate impact')->with('childItems')->get();
        $gf = Category::where('name', 'Get funding')->with('childItems')->get();
        $bs = Category::where('name', 'Build something')->with('childItems')->get();
        $fr = Category::where('name', 'Fieldwide resources')->with('childItems')->get();
        $ab = Category::where('name', 'Active battles')->with('childItems')->get();
        $ho = Category::where('name', 'Help out')->with('childItems')->get();
        $mto = Category::where('name', 'Meet the others')->with('childItems')->get();
        $lact = Category::where('name', 'Learn about civic tech')->with('childItems')->get();
        $fjsh = Category::where('name', 'Find a job or hire someone')->with('childItems')->get();

        return view ('category.by-parent.people', [
            'ei' => $ei,
            'gf' => $gf,
            'bs' => $bs,
            'fr' => $fr,
            'ab' => $ab,
            'ho' => $ho,
            'mto' => $mto,
            'lact' => $lact,
            'fjsh' => $fjsh,
            'title' => 'The People',
            'menu' => 'people',
        ]);*/

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
