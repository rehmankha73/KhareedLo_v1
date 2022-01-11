<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KInputField extends Component
{

    public $type;
    public $name;

    public function __construct(string $type, string $name)
    {
        $this->name = $name;
        $this->type = $type;
    }


    public function render()
    {
        return view('components.k-input-field');
    }
}
