<?php

namespace CodeviceCompany\LaravelUiKit\Components\Button;

use CodeviceCompany\LaravelUiKit\Components\Button;

class DefaultButton extends Button
{
    public function render()
    {
        return view('ui-kit::components.button.default');
    }
}
