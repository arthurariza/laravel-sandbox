<?php

namespace App\View\Components\Features;

use App\Models\Feature;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Statuses extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $statuses = DB::table('features')
                      ->selectRaw("COUNT(CASE WHEN status = 1 THEN 1 END) AS open")
                      ->selectRaw("COUNT(CASE WHEN status = 2 THEN 1 END) AS progress")
                      ->selectRaw("COUNT(CASE WHEN status = 3 THEN 1 END) AS closed")
                      ->first();

        return view('components.features.statuses', compact('statuses'));
    }
}
