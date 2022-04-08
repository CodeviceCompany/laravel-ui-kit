<?php

namespace CodeviceCompany\LaravelUiKit\Components\Button;

use Illuminate\View\Component;

class Index extends Component
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
