<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
        public ?string $id = null,
        public ?bool $disabled = false,
        public ?string $type = 'text',
        public ?string $bag = 'default',
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.input');
    }
}
