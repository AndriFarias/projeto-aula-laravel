<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component

    {
        public $placeholder;
        public $name;
        public $value;
    
        public function __construct($placeholder = null, $name = null, $value = null)
        {
            $this->placeholder = $placeholder;
            $this->name = $name;
            $this->value = $value;
        }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
