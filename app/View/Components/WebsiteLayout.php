<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class WebsiteLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('website.layout.main', [
            'setting' => Setting::findOrFail(1),
            'locale' => app()->getLocale(),
        ]);
    }
}
