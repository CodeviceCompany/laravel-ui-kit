<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
        public ?string $id = null,
        public ?bool $disabled = false,
        public ?string $bag = 'default',
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.select');
    }
}
