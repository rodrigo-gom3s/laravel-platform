<?php

namespace App\View\Components\Screenings;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public object $screenings,
        public bool $showView = true,
        public bool $showEdit = true,
        public bool $showDelete = true,
        public bool $showSeat = true,
        public bool $showMovie = true,
        public array $screeningSoldOut,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.screenings.table');
    }
}
