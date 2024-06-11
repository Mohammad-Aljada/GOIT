<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MeetingsTable extends Component
{
    /**
     * Meetings data.
     *
     * @var mixed
     */
    public $meetings;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $meetings
     * @return void
     */
    public function __construct($meetings)
    {
        $this->meetings = $meetings;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.meeting.table.meetings-table');
    }
}
