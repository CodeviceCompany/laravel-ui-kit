<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;
use function view;

class Button extends Component
{
    public function __construct(
        public $icon = false,
        public $href = false,
        public $hideTextOnMobile = false,
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.button.index');
    }
}
