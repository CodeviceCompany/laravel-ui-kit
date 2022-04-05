<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
        public ?string $id = null,
        public ?bool $disabled = false,
        public ?string $bag = 'default',
    ) {
        $this->value = $name ? old($name, $value) : $value;
    }

    public function render()
    {
        return view('ui-kit::components.textarea');
    }
}
