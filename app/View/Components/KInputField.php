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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.k-input-field');
    }
}
