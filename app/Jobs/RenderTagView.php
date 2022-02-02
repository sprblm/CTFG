<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Tag;

class RenderTagView implements ShouldQueue
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
        $tags = Tag::whereNull('parent_id')
            ->whereIn('name', ['Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other'])
            ->orderByRaw("FIELD(name , 'Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other') ASC")
            ->with('childItems')
            ->get();

        $html = \View::make('partials.tags', ['tagHierarchies' => $tags, 'activeTag' => null, 'activeParentTag' => null])->render();
        file_put_contents(resource_path('views/cache/tags_cache.blade.php'), $html);

        \Log::info("Done rendering tag view cache");

        return true;
    }
}
