<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;

class FormGroup extends Component
{
    public function __construct(
        public $name = null,
        public $label = null,
        public $prefix = null,
        public $prefixClass = null,
        public $suffix = null,
        public $hint = null,
        public $required = null,
        public $bag = 'default',
        public $for = null,
    ) {
        $this->for = $for ?? str()->uuid();
    }

    public function render()
    {
        return view('ui-kit::components.form-group');
    }
}
