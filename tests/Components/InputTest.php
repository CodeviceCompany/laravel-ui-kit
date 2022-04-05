<?php

namespace CodeviceCompany\LaravelUiKit\Tests\Components;

use CodeviceCompany\LaravelUiKit\Tests\TestCase;

class InputTest extends TestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->assertComponentRenders(
            '<input type="text" value="" name="search" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 " autocomplete="false" />',
            '<x-ui-input name="search" />',
        );
    }

    /** @test */
    public function specific_attributes_can_be_overwritten()
    {
        $this->assertComponentRenders(
            '<input type="password" value="" name="confirm_password" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 p-4" autocomplete="false" id="confirmPassword" class="p-4" />',
            '<x-ui-input name="confirm_password" id="confirmPassword" type="password" class="p-4" />',
        );
    }

    /** @test */
    public function inputs_can_have_old_values()
    {
        $this->flashOld(['search' => 'Eloquent']);

        $this->assertComponentRenders(
            '<input type="text" value="Eloquent" name="search" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 " autocomplete="false" />',
            '<x-ui-input name="search" />',
        );
    }
}
