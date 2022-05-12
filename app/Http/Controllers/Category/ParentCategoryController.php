<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class ParentCategoryController extends Controller {
    // Get categories under the Tech
    public function theTech() {
        $pc = Category::where('name', 'Participatory democracy')->with('childItems')->get();
        $govtech = Category::where('name', 'Govtech')->with('childItems')->get();
        $cd = Category::where('name', 'Civic data')->with('childItems')->get();
        $at = Category::where('name', 'Advocacy tech')->with('childItems')->get();
        $media = Category::where('name', 'Media')->with('childItems')->get();
        $et = Category::where('name', 'Emerging tech')->with('childItems')->get();

        return view ('category.by-parent.tech', [
            'pc' => $pc,
            'govtech' => $govtech,
            'cd' => $cd,
            'at' => $at,
            'media' => $media,
            'et' => $et,
            'title' => 'The Tech',
        ]);
    }

    // Get categories under the People
    public function thePeople() {
        $ei = Category::where('name', 'Evaluate impact')->with('childItems')->get();
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
        ]);
    }

    // Get categories under adjacent technologies
    public function adjacent() {
        $fl = Category::where('name', 'Foundational layers')->with('childItems')->get();
        $dl = Category::where('name', 'Digital literacy')->with('childItems')->get();
        $rtpd = Category::where('name', 'Related tech for public good')->with('childItems')->get();
        $dsp = Category::where('name', 'Digital security and privacy')->with('childItems')->get();
        $et = Category::where('name', 'Ethical tech')->with('childItems')->get();
        $tpc = Category::where('name', 'Tech for public challenges')->with('childItems')->get();

        return view ('category.by-parent.adjacent', [
            'fl' => $fl,
            'dl' => $dl,
            'rtpd' => $rtpd,
            'dsp' => $dsp,
            'et' => $et,
            'tpc' => $tpc,
            'title' => 'Adjacent Fields',
        ]);
    }
}
