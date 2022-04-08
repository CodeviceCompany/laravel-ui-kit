<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;
use function view;

class Modal extends Component
{
    public function __construct(
        public $id = null,
        public $footer = false,
        public $open = false,
        public $withCloseButton = false,
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.modal');
    }
}
