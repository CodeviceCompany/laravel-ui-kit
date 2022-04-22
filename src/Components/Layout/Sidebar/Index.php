<?php

namespace CodeviceCompany\LaravelUiKit\Components\Layout\Sidebar;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public string $title,
        public ?string $actions = null,
        public Collection|array|null $navigations = null
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.layout.sidebar.index');
    }
}
