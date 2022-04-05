<?php

namespace CodeviceCompany\LaravelUiKit\Tests\Components;

use CodeviceCompany\LaravelUiKit\Tests\TestCase;

class TextareaTest extends TestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->assertComponentRenders(
            '<textarea name="body" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 " rows="3"></textarea>',
            '<x-ui-textarea name="body"></x-ui-textarea>',
        );
    }

    /** @test */
    public function specific_attributes_can_be_overwritten()
    {
        $this->assertComponentRenders(
            '<textarea name="body" rows="10" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 p-4"></textarea>',
            '<x-ui-textarea name="body" id="body" class="p-4" rows="10"></x-ui-textarea>',
        );
    }

    /** @test */
    public function inputs_can_have_old_values()
    {
        $this->flashOld(['body' => 'Eloquent']);

        $this->assertComponentRenders(
            '<textarea name="body" rows="3" class="block w-full shadow-sm sm:text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50">Eloquent</textarea>',
            '<x-ui-textarea name="body">Test</x-ui-textarea>',
        );
    }
}
