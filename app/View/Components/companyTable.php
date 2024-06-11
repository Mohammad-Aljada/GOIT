<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class companyTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $companies;
    public function __construct($companies)
    {
        $this->companies = $companies;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.company.table.company-table');
    }
}
