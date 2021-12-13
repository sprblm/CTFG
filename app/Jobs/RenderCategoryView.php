<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Category;

class RenderCategoryView implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        $categories = Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();

        $html = \View::make('partials.categories', ['catHierarchies' => $categories, 'activeCat' => null, 'activeParent' => null, 'activeGrandParent' => null])->render();
        file_put_contents(resource_path('views/cache/categories_cache.blade.php'), $html);
        return true;
    }
}
