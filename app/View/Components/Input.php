<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;

    public $name;
    public $label;
    public $value;
    public $required;
    public $placeholder;

    public function __construct($type = 'text', $name, $label = null, $value = null, $required = false, $placeholder="")
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}