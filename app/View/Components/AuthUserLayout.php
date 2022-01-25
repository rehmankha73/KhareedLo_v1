<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AuthUserLayout extends Component
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

    public function render()
    {
        return view('layouts.auth-user-layout');
    }
}
